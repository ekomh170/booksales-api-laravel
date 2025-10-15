<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\JsonResponse;

/**
 * API Controller untuk handle request terkait library/perpustakaan
 * Semua method mengembalikan response dalam format JSON
 *
 * Tugas Pertemuan 3 - REST API
 */
class LibraryController extends Controller
{
    /**
     * Mendapatkan daftar semua penulis
     *
     * @return JsonResponse
     */
    public function authors(): JsonResponse
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Data authors berhasil diambil',
            'data' => $authors
        ], 200);
    }

    /**
     * Mendapatkan daftar semua buku beserta author
     *
     * @return JsonResponse
     */
    public function books(): JsonResponse
    {
        $books = Book::with('author')->get();

        return response()->json([
            'success' => true,
            'message' => 'Data books berhasil diambil',
            'data' => $books
        ], 200);
    }

    /**
     * Mendapatkan detail author berdasarkan ID
     *
     * @param int $id
     * @return JsonResponse
     */
    public function authorDetail(int $id): JsonResponse
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

    /**
     * Mendapatkan detail book berdasarkan ID
     *
     * @param int $id
     * @return JsonResponse
     */
    public function bookDetail(int $id): JsonResponse
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
