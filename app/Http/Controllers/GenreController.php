<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Controller untuk handle request terkait Genres
 * Mengembalikan response dalam format JSON
 *
 * Tugas Pertemuan 4 & 5 - REST API (CRUD)
 * Nama: Eko Muchamad Haryono
 * NIM: 0110223079
 */
class GenreController extends Controller
{
    /**
     * Ambil semua data genres (READ ALL)
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $genres = Genre::all();

        return response()->json([
            'success' => true,
            'message' => 'Data genres berhasil diambil',
            'data' => $genres
        ], 200);
    }

    /**
     * Tambah data genre baru (CREATE)
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:genres,slug',
            'description' => 'nullable|string'
        ]);

        // Auto-generate slug jika tidak diisi
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        // Simpan ke database
        $genre = Genre::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil ditambahkan',
            'data' => $genre
        ], 201); // HTTP 201 Created
    }

    /**
     * Ambil detail genre berdasarkan ID (SHOW)
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail genre berhasil diambil',
            'data' => $genre
        ], 200);
    }

    /**
     * Update data genre berdasarkan ID (UPDATE)
     *
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan',
                'data' => null
            ], 404);
        }

        // Validasi input
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'slug' => 'nullable|string|unique:genres,slug,' . $id,
            'description' => 'nullable|string'
        ]);

        // Auto-generate slug jika name diubah dan slug tidak diisi
        if (isset($validated['name']) && empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['name']);
        }

        // Update data
        $genre->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil diupdate',
            'data' => $genre->fresh()
        ], 200);
    }

    /**
     * Hapus data genre berdasarkan ID (DESTROY)
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Genre tidak ditemukan',
                'data' => null
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre berhasil dihapus',
            'data' => null
        ], 200);
    }
}
