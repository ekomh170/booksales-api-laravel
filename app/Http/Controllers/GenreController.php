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
 * Tugas Pertemuan 4 - REST API (Create & Read)
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
}
