<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;

/**
 * API Routes untuk Tugas Pertemuan 3, 4, 5, 6 & 7
 *
 * Semua routes akan menggunakan prefix /api secara otomatis
 * Contoh: /api/authors, /api/books, /api/genres, /api/transactions
 *
 * Pertemuan 5: Menggunakan apiResource untuk CRUD lengkap
 * Pertemuan 6: Authentication & Authorization dengan middleware
 * Pertemuan 7: CRUD Transaksi dengan relasi dan otorisasi khusus
 */

// ==================== AUTHENTICATION ROUTES (Pertemuan 6) ====================
Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// Protected auth routes - require authentication
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/me', [AuthController::class, 'me'])->name('auth.me');
});

// ==================== PUBLIC ROUTES (Pertemuan 6) ====================
// Read All dan Show dapat diakses untuk semua orang (tanpa autentikasi)

// Genres - Public access
Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/{genre}', [GenreController::class, 'show'])->name('genres.show');

// Authors - Public access
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');

// Books - Public access (Read Only dari Pertemuan 3)
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

// ==================== ADMIN ONLY ROUTES (Pertemuan 6) ====================
// Create, Update, dan Destroy hanya dapat diakses oleh admin

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    // Genres - Admin only
    Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
    Route::put('/genres/{genre}', [GenreController::class, 'update'])->name('genres.update');
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy'])->name('genres.destroy');

    // Authors - Admin only
    Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
    Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');

    // Transactions - Admin only (Read All & Destroy)
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
});

// ==================== CUSTOMER ROUTES (Pertemuan 7) ====================
// Create, Update, dan Show hanya dapat diakses oleh customer yang sudah autentikasi

Route::middleware('auth:sanctum')->group(function () {
    // Transactions - Authenticated Customer
    Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::put('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
});
