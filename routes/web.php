<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

Route::get('/', fn () => redirect()->route('genres.index'));
Route::get('/genres', [LibraryController::class, 'genres'])->name('genres.index');
Route::get('/authors', [LibraryController::class, 'authors'])->name('authors.index');
