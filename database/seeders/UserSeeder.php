<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@booksales.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Create Regular User
        User::create([
            'name' => 'Regular User',
            'email' => 'user@booksales.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);

        // Create Additional Test Users
        User::create([
            'name' => 'Eko Muchamad Haryono',
            'email' => 'eko@booksales.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Muhaammad Akbar Maulana',
            'email' => 'akbar@booksales.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
        ]);
    }
}
