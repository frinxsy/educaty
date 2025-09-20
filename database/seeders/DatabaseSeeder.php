<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('1123'), // password
        ]);

        Materi::factory()->create([
            'judul' => 'Simple Past',
            'kategori' => 'B.Inggris',
            'file_materi' => 'video/simple-present.mp4' 
        ]);
        // // Materi::factory()->create([
        // //     'judul' => 'Polinomial',
        // //     'kategori' => 'Matematika',
        // //     'file_materi' => 'video/Polinomial.mp4'
        // // ]);
        // Materi::factory()->create([
        //     'judul' => 'Gagasan Pokok',
        //     'kategori' => 'B.Indonesia',
        //     'file_materi' => 'video/Gagasan-pokok.mp4'
        // ]);
        // Materi::factory()->create([
        //     'judul' => 'Laravel',
        //     'kategori' => 'RPL',
        //     'file_materi' => 'video/laravel.mp4'
        // ]);
    }
}
