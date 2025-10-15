<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/**
 * API Routes untuk Tugas Pertemuan 3
 * 
 * Semua routes akan menggunakan prefix /api secara otomatis
 * Contoh: /api/authors, /api/books
 */

// Route API untuk Authors
Route::get('/authors', [AuthorController::class, 'index'])->name('api.authors.index');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('api.authors.show');

// Route API untuk Books
Route::get('/books', [BookController::class, 'index'])->name('api.books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('api.books.show');

