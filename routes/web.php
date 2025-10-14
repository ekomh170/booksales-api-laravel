<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

// Route untuk halaman utama, redirect ke books
Route::get('/', fn () => redirect()->route('books.index'));

// Route untuk halaman authors (daftar penulis dari database)
Route::get('/authors', [LibraryController::class, 'authors'])->name('authors.index');

// Route untuk halaman books (daftar buku dari database)
Route::get('/books', [LibraryController::class, 'books'])->name('books.index');
