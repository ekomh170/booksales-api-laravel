<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;

// Controller untuk handle request terkait library/perpustakaan
class LibraryController extends Controller
{
    // Method untuk tampilkan halaman daftar penulis dari database
    public function authors()
    {
        $authors = Author::all(); // ambil data dari database via Eloquent
        return view('authors.index', compact('authors')); // kirim ke view
    }

    // Method untuk tampilkan halaman daftar buku dari database
    public function books()
    {
        $books = Book::with('author')->get(); // ambil data buku beserta author
        return view('books.index', compact('books')); // kirim ke view
    }
}
