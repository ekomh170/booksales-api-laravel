<?php

use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 *
 * Route untuk web sudah dipindahkan ke routes/api.php
 * Aplikasi sekarang fokus ke REST API (Tugas Pertemuan 3)
 */

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Selamat Datang di Booksales API - SIB STT NF',
        'info' => [
            'nama' => 'Eko Muchamad Haryono',
            'nim' => '0110223079',
            'tugas' => 'Pertemuan 3 - REST API',
            'endpoints' => [
                'GET /api/authors' => 'Mendapatkan semua authors',
                'GET /api/books' => 'Mendapatkan semua books',
                'GET /api/authors/{id}' => 'Mendapatkan detail author',
                'GET /api/books/{id}' => 'Mendapatkan detail book',
            ]
        ]
    ]);
});

