<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk 5 data genre buku
        Genre::create([
            'name' => 'Romance',
            'slug' => 'romance',
            'description' => 'Genre buku yang berfokus pada kisah cinta dan hubungan romantis antar karakter.'
        ]);

        Genre::create([
            'name' => 'Fiction',
            'slug' => 'fiction',
            'description' => 'Cerita fiksi yang berasal dari imajinasi penulis, bukan berdasarkan kejadian nyata.'
        ]);

        Genre::create([
            'name' => 'Contemporary Fiction',
            'slug' => 'contemporary-fiction',
            'description' => 'Fiksi kontemporer yang mengangkat isu-isu masa kini dan kehidupan modern.'
        ]);

        Genre::create([
            'name' => 'Literary Fiction',
            'slug' => 'literary-fiction',
            'description' => 'Karya fiksi dengan gaya penulisan yang lebih mendalam dan fokus pada pengembangan karakter.'
        ]);

        Genre::create([
            'name' => 'Historical Fiction',
            'slug' => 'historical-fiction',
            'description' => 'Cerita fiksi yang berlatar belakang peristiwa atau periode sejarah tertentu.'
        ]);
    }
}
