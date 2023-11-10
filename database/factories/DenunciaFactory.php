<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Denuncia>
 */
class DenunciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_victim' => fake()->numberBetween(4,6),
            'id_attendant' => fake()->numberBetween(2,3),
            'latitude' => '-23.504323',
            'longitude' => '-46.497824',
            'status' => fake()->numberBetween(0,1),
            'created_at' => fake()->dateTimeThisYear()
        ];
    }
}
