<?php

namespace App\Models;

class Genre
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'nama' => 'Fiksi',     'slug' => 'fiksi'],
            ['id' => 2, 'nama' => 'Nonfiksi',  'slug' => 'nonfiksi'],
            ['id' => 3, 'nama' => 'Sci-Fi',    'slug' => 'sci-fi'],
            ['id' => 4, 'nama' => 'Biografi',  'slug' => 'biografi'],
            ['id' => 5, 'nama' => 'Teknologi', 'slug' => 'teknologi'],
        ];
    }
}
