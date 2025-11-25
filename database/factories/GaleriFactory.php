<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),
            'kategori' => $this->faker->randomElement(['kegiatan', 'gambar-utama', 'foto-jadul', 'random']),
            'foto_url' => 'storage/app/public/galeri/dummy.jpg',
            'admin_id' => 1,
        ];
    }
}
