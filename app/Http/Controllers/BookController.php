<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;

/**
 * Controller untuk handle request terkait Books
 * Mengembalikan response dalam format JSON
 *
 * Tugas Pertemuan 3 - REST API
 * Nama: Eko Muchamad Haryono
 * NIM: 0110223079
 */
class BookController extends Controller
{
    /**
     * Ambil semua data books beserta author
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $books = Book::with('author')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data books berhasil diambil',
            'data' => $books
        ], 200);
    }

    /**
     * Ambil detail book berdasarkan ID beserta author
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $book = Book::with('author')->find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book tidak ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail book berhasil diambil',
            'data' => $book
        ], 200);
    }
}
