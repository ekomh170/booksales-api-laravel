<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

// Route untuk halaman utama, redirect ke genres
Route::get('/', fn () => redirect()->route('genres.index'));

// Route untuk halaman genres (daftar genre buku)
Route::get('/genres', [LibraryController::class, 'genres'])->name('genres.index');

// Route untuk halaman authors (daftar penulis)
Route::get('/authors', [LibraryController::class, 'authors'])->name('authors.index');
