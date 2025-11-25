<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumniReview>
 */
class AlumniReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_alumni' => $this->faker->name(),
            'tahun_lulus' => $this->faker->year(),
            'kesan' => $this->faker->paragraph(),
            'pekerjaan' => $this->faker->jobTitle(),
            'foto' => 'storage/app/public/alumni/dummy.jpg',
            'admin_id' => 1,
        ];
    }
}
