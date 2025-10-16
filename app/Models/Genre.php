<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model Genre menggunakan Eloquent untuk database
 * Tugas Pertemuan 4 - Create & Read Genre
 */
class Genre extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];
}
