<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

/**
 * API Routes untuk Tugas Pertemuan 3 & 4
 *
 * Semua routes akan menggunakan prefix /api secara otomatis
 * Contoh: /api/authors, /api/books, /api/genres
 */

// Route API untuk Genres (Tugas Pertemuan 4)
Route::get('/genres', [GenreController::class, 'index'])->name('api.genres.index');
Route::post('/genres', [GenreController::class, 'store'])->name('api.genres.store');

// Route API untuk Authors (Tugas Pertemuan 3 & 4)
Route::get('/authors', [AuthorController::class, 'index'])->name('api.authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('api.authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('api.authors.show');

// Route API untuk Books (Tugas Pertemuan 3)
Route::get('/books', [BookController::class, 'index'])->name('api.books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('api.books.show');

