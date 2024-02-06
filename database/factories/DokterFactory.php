<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
            'no_registrasi' => $this->faker->unique()->numerify('####'),
            'spesial_id' => $this->faker->numberBetween(1,5),
            'alamat' => $this->faker->address,
            'karir' => $this->faker->date(),
        ];
    }
}
