<?php

namespace App\Models;

// Model Genre untuk menyimpan data genre buku
// Menggunakan array statis karena belum pakai database
class Genre
{
    // Method untuk mengambil semua data genre
    public static function all(): array
    {
        // Return array berisi 5 data genre
        return [
            ['id' => 1, 'nama' => 'Fiksi',     'slug' => 'fiksi'],
            ['id' => 2, 'nama' => 'Nonfiksi',  'slug' => 'nonfiksi'],
            ['id' => 3, 'nama' => 'Sci-Fi',    'slug' => 'sci-fi'],
            ['id' => 4, 'nama' => 'Biografi',  'slug' => 'biografi'],
            ['id' => 5, 'nama' => 'Teknologi', 'slug' => 'teknologi'],
        ];
    }
}
