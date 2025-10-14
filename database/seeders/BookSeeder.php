<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk 5 data dummy buku kekinian dengan genre beragam
        Book::create([
            'title' => 'Geez & Ann',
            'isbn' => '978-623-7890-111-2',
            'description' => 'Kisah cinta antara dua remaja yang tumbuh dengan perbedaan karakter dan cara pandang terhadap cinta di era modern.',
            'published_date' => '2016-03-21',
            'price' => 72000.00,
            'stock' => 30,
            'genre' => 'Romance',
            'author_id' => 1, // Nadhifa Allya Tsana
        ]);

        Book::create([
            'title' => 'Dilan: Dia adalah Dilanku Tahun 1990',
            'isbn' => '978-602-03-4567-8',
            'description' => 'Novel romance tentang kisah cinta Dilan dan Milea di Bandung tahun 1990 yang penuh dengan puisi dan kenangan manis.',
            'published_date' => '2014-08-01',
            'price' => 68000.00,
            'stock' => 45,
            'genre' => 'Romance',
            'author_id' => 2 // Pidi Baiq
        ]);

        Book::create([
            'title' => 'It Ends with Us',
            'isbn' => '978-1-5011-1036-4',
            'description' => 'Novel powerful tentang Lily yang harus menghadapi hubungan toxic dan menemukan kekuatan untuk memutus siklus kekerasan.',
            'published_date' => '2016-08-02',
            'price' => 125000.00,
            'stock' => 25,
            'genre' => 'Contemporary Fiction',
            'author_id' => 3 // Colleen Hoover
        ]);

        Book::create([
            'title' => 'Normal People',
            'isbn' => '978-0-571-33465-3',
            'description' => 'Novel tentang hubungan kompleks antara Connell dan Marianne dari sekolah hingga universitas, eksplorasi mendalam tentang cinta dan kelas sosial.',
            'published_date' => '2018-08-28',
            'price' => 135000.00,
            'stock' => 20,
            'genre' => 'Literary Fiction',
            'author_id' => 4 // Sally Rooney
        ]);

        Book::create([
            'title' => 'The Seven Husbands of Evelyn Hugo',
            'isbn' => '978-1-5011-3981-5',
            'description' => 'Novel tentang bintang Hollywood legendaris Evelyn Hugo yang akhirnya menceritakan kisah hidupnya yang penuh rahasia dan skandal.',
            'published_date' => '2017-06-13',
            'price' => 140000.00,
            'stock' => 18,
            'genre' => 'Historical Fiction',
            'author_id' => 5 // Taylor Jenkins Reid
        ]);
    }
}
