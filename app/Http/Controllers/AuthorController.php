<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Controller untuk handle request terkait Authors
 * Mengembalikan response dalam format JSON
 *
 * Tugas Pertemuan 3, 4 & 5 - REST API (CRUD)
 * Nama: Eko Muchamad Haryono
 * NIM: 0110223079
 */
class AuthorController extends Controller
{
    /**
     * Ambil semua data authors (READ ALL)
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
     * Tambah data author baru (CREATE)
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
            'country' => 'required|string|max:100',
            'birth_date' => 'nullable|date',
            'biography' => 'nullable|string'
        ]);

        // Simpan ke database
        $author = Author::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil ditambahkan',
            'data' => $author
        ], 201); // HTTP 201 Created
    }

    /**
     * Ambil detail author berdasarkan ID beserta books (SHOW)
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

    /**
     * Update data author berdasarkan ID (UPDATE)
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan',
                'data' => null
            ], 404);
        }

        // Validasi input
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:authors,email,' . $id,
            'country' => 'sometimes|required|string|max:100',
            'birth_date' => 'nullable|date',
            'biography' => 'nullable|string'
        ]);

        // Update data
        $author->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil diupdate',
            'data' => $author->fresh()
        ], 200);
    }

    /**
     * Hapus data author berdasarkan ID (DESTROY)
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author tidak ditemukan',
                'data' => null
            ], 404);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Author berhasil dihapus',
            'data' => null
        ], 200);
    }
}
