<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\JsonResponse;

/**
 * Controller untuk handle request terkait Authors
 * Mengembalikan response dalam format JSON
 *
 * Tugas Pertemuan 3 - REST API
 * Nama: Eko Muchamad Haryono
 * NIM: 0110223079
 */
class AuthorController extends Controller
{
    /**
     * Ambil semua data authors
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Data authors berhasil diambil',
            'data' => $authors
        ], 200);
    }

    /**
     * Ambil detail author berdasarkan ID beserta books
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $author = Author::with('books')->find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail author berhasil diambil',
            'data' => $author
        ], 200);
    }
}
