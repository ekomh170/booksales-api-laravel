<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

/**
 * API Routes untuk Tugas Pertemuan 3, 4 & 5
 *
 * Semua routes akan menggunakan prefix /api secara otomatis
 * Contoh: /api/authors, /api/books, /api/genres
 *
 * Pertemuan 5: Menggunakan apiResource untuk CRUD lengkap
 */

// Route API Resource untuk Genres (Tugas Pertemuan 4 & 5)
// Otomatis generate: index, store, show, update, destroy
Route::apiResource('genres', GenreController::class);

// Route API Resource untuk Authors (Tugas Pertemuan 3, 4 & 5)
// Otomatis generate: index, store, show, update, destroy
Route::apiResource('authors', AuthorController::class);

// Route API untuk Books (Tugas Pertemuan 3) - Read Only
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

