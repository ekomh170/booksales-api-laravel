<?php

namespace App\Models;

class Author
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'nama' => 'Tere Liye',         'negara' => 'Indonesia'],
            ['id' => 2, 'nama' => 'Andrea Hirata',     'negara' => 'Indonesia'],
            ['id' => 3, 'nama' => 'J.K. Rowling',      'negara' => 'Inggris'],
            ['id' => 4, 'nama' => 'George Orwell',     'negara' => 'Inggris'],
            ['id' => 5, 'nama' => 'Nadhifa Allya Tsana', 'negara' => 'Indonesia'],
        ];
    }
}
