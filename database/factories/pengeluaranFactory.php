<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pengeluaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nominal' => $this->faker->randomDigit(),
            'keterangan' => $this->faker->sentence(),
            'tanggal' => $this->faker->date(),
            'bukti' => $this->faker->sentence(2)

        ];
    }
}
