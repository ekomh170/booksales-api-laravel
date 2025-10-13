<?php

namespace App\Models;

// Model Author untuk data penulis buku
// Pakai array biasa dulu, nanti bisa diganti database
class Author
{
    // Fungsi untuk ambil semua data author
    public static function all(): array
    {
        // Array berisi 5 penulis terkenal
        return [
            ['id' => 1, 'nama' => 'Tere Liye',         'negara' => 'Indonesia'],
            ['id' => 2, 'nama' => 'Andrea Hirata',     'negara' => 'Indonesia'],
            ['id' => 3, 'nama' => 'J.K. Rowling',      'negara' => 'Inggris'],
            ['id' => 4, 'nama' => 'George Orwell',     'negara' => 'Inggris'],
            ['id' => 5, 'nama' => 'Yuval Noah Harari', 'negara' => 'Israel'],
        ];
    }
}
