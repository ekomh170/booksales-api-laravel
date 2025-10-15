<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

/**
 * API Routes untuk Tugas Pertemuan 3
 * 
 * Semua routes akan menggunakan prefix /api secara otomatis
 * Contoh: /api/authors, /api/books
 */

// Route API untuk mendapatkan daftar authors
Route::get('/authors', [LibraryController::class, 'authors'])->name('api.authors.index');

// Route API untuk mendapatkan daftar books
Route::get('/books', [LibraryController::class, 'books'])->name('api.books.index');

// Route API untuk mendapatkan detail author berdasarkan ID
Route::get('/authors/{id}', [LibraryController::class, 'authorDetail'])->name('api.authors.show');

// Route API untuk mendapatkan detail book berdasarkan ID
Route::get('/books/{id}', [LibraryController::class, 'bookDetail'])->name('api.books.show');
