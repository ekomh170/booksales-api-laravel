<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;

// Controller untuk handle request terkait library/perpustakaan
class LibraryController extends Controller
{
    // Method untuk tampilkan halaman daftar genre
    public function genres()
    {
        $genres = Genre::all(); // ambil data dari model Genre
        return view('genres.index', compact('genres')); // kirim ke view
    }

    // Method untuk tampilkan halaman daftar penulis
    public function authors()
    {
        $authors = Author::all(); // ambil data dari model Author
        return view('authors.index', compact('authors')); // kirim ke view
    }
}
