<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Author;

class LibraryController extends Controller
{
    public function genres()
    {
        $genres = Genre::all(); // ambil array statis dari Model
        return view('genres.index', compact('genres'));
    }

    public function authors()
    {
        $authors = Author::all(); // ambil array statis dari Model
        return view('authors.index', compact('authors'));
    }
}
