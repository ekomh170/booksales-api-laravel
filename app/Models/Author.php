<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model Author menggunakan Eloquent untuk database
class Author extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'name',
        'email',
        'country',
        'birth_date',
        'biography'
    ];

    // Cast tanggal
    protected $casts = [
        'birth_date' => 'date',
    ];

    // Relasi one-to-many dengan Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
