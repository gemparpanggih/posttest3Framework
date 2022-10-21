<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name,
            'password' => $this->faker->name,
            'nometer' => $this->faker->randomNumber(9, true),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->name,
            'tarif_id' => $this->faker->numberBetween(1, 4), //prodi cuma 3
        ];
    }
}