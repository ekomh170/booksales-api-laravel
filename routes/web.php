<?php

use Illuminate\Support\Facades\Route;

/**
 * Web Routes
 *
 * Route untuk web sudah dipindahkan ke routes/api.php
 * Aplikasi sekarang fokus ke REST API
 * - Pertemuan 3: REST API Read Operations
 * - Pertemuan 4: CRUD Create & Read untuk Genre dan Author
 */

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Selamat Datang di Booksales API - SIB STT NF',
        'info' => [
            'nama' => 'Eko Muchamad Haryono',
            'nim' => '0110223079',
            'pertemuan' => [
                'Pertemuan 3' => 'REST API - Read Operations',
                'Pertemuan 4' => 'CRUD API - Create & Read untuk Genre dan Author'
            ],
            'endpoints' => [
                'GET /api/genres' => 'Mendapatkan semua genres',
                'POST /api/genres' => 'Membuat genre baru',
                'GET /api/authors' => 'Mendapatkan semua authors',
                'GET /api/authors/{id}' => 'Mendapatkan detail author',
                'POST /api/authors' => 'Membuat author baru',
                'GET /api/books' => 'Mendapatkan semua books',
                'GET /api/books/{id}' => 'Mendapatkan detail book',
            ]
        ]
    ]);
});

