<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    /**
     * Display a listing of transactions (Admin Only)
     * GET /api/transactions
     */
    public function index()
    {
        $transactions = Transaction::with(['customer', 'book'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Data transaksi berhasil diambil',
            'data' => $transactions
        ], 200);
    }

    /**
     * Store a newly created transaction (Authenticated Customer)
     * POST /api/transactions
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'total_amount' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Generate unique order number
        $order_number = 'ORD-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));

        // Create transaction
        $transaction = Transaction::create([
            'order_number' => $order_number,
            'customer_id' => $request->user()->id,
            'book_id' => $request->book_id,
            'total_amount' => $request->total_amount,
        ]);

        // Load relations
        $transaction->load(['customer', 'book']);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil dibuat',
            'data' => $transaction
        ], 201);
    }

    /**
     * Display the specified transaction (Authenticated Customer - Own Transaction)
     * GET /api/transactions/{id}
     */
    public function show(Request $request, $id)
    {
        $transaction = Transaction::with(['customer', 'book'])->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        // Check if user owns this transaction
        if ($transaction->customer_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses ke transaksi ini'
            ], 403);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail transaksi',
            'data' => $transaction
        ], 200);
    }

    /**
     * Update the specified transaction (Authenticated Customer - Own Transaction)
     * PUT/PATCH /api/transactions/{id}
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        // Check if user owns this transaction
        if ($transaction->customer_id !== $request->user()->id) {
            return response()->json([
                'success' => false,
                'message' => 'Anda tidak memiliki akses untuk mengupdate transaksi ini'
            ], 403);
        }

        $validator = Validator::make($request->all(), [
            'book_id' => 'sometimes|required|exists:books,id',
            'total_amount' => 'sometimes|required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Update fields
        if ($request->has('book_id')) {
            $transaction->book_id = $request->book_id;
        }

        if ($request->has('total_amount')) {
            $transaction->total_amount = $request->total_amount;
        }

        $transaction->save();
        $transaction->load(['customer', 'book']);

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil diupdate',
            'data' => $transaction
        ], 200);
    }

    /**
     * Remove the specified transaction (Admin Only)
     * DELETE /api/transactions/{id}
     */
    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi tidak ditemukan'
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaksi berhasil dihapus'
        ], 200);
    }
}
