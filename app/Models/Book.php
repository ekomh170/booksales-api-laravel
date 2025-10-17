<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Model Book menggunakan Eloquent untuk database
class Book extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'title',
        'isbn',
        'description',
        'published_date',
        'price',
        'stock',
        'genre',
        'cover_photo',
        'author_id'
    ];

    // Cast tanggal dan harga
    protected $casts = [
        'published_date' => 'date',
        'price' => 'decimal:2',
    ];

    // Relasi many-to-one dengan Author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
