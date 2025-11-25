<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mitra>
 */
class MitraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mitra' => $this->faker->company(),
            'logo' => 'storage/app/public/mitra/dummy.jpg',
            'deskripsi' => $this->faker->paragraph(),
        ];
    }
}
