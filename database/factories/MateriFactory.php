<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence,
            'kategori' => 'B. Inggris',
            'file_materi' => '/video/simple-present.mp4',
        ];
    }
}
