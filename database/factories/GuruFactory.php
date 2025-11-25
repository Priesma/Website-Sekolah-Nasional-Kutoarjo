<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->jobTitle(),
            'jenjang' => $this->faker->randomElement(['TK', 'SD']),
            'deskripsi' => $this->faker->paragraph(),
            'foto' => 'storage/app/public/guru/dummy.jpg',
        ];
    }
}
