<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk 5 data dummy penulis dari Indonesia, Inggris, dan Amerika
        Author::create([
            'name' => 'Nadhifa Allya Tsana',
            'email' => 'nadhifa.allya@email.com',
            'country' => 'Indonesia',
            'birth_date' => '1995-03-15',
            'biography' => 'Penulis muda Indonesia yang menulis novel romance dan young adult dengan tema kekinian dan relatable untuk generasi Z.'
        ]);

        Author::create([
            'name' => 'Pidi Baiq',
            'email' => 'pidi.baiq@email.com',
            'country' => 'Indonesia',
            'birth_date' => '1972-08-08',
            'biography' => 'Penulis, musisi, dan komikus Indonesia terkenal dengan novel Dilan yang viral di kalangan remaja.'
        ]);

        Author::create([
            'name' => 'Colleen Hoover',
            'email' => 'colleen.hoover@email.com',
            'country' => 'Amerika',
            'birth_date' => '1979-12-11',
            'biography' => 'Penulis Amerika yang viral di TikTok dengan novel romance seperti It Ends with Us dan Verity.'
        ]);

        Author::create([
            'name' => 'Sally Rooney',
            'email' => 'sally.rooney@email.com',
            'country' => 'Inggris',
            'birth_date' => '1991-02-20',
            'biography' => 'Penulis Irlandia yang terkenal dengan novel Normal People dan Conversations with Friends yang hits di kalangan milenial.'
        ]);

        Author::create([
            'name' => 'Taylor Jenkins Reid',
            'email' => 'taylor.jenkins@email.com',
            'country' => 'Amerika',
            'birth_date' => '1983-12-20',
            'biography' => 'Penulis Amerika terkenal dengan novel The Seven Husbands of Evelyn Hugo yang viral di BookTok dan Instagram.'
        ]);
    }
}
