<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Protocolo>
 */
class ProtocoloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_report'  =>  \App\Models\Denuncia::factory()->create(),
            'protocol' => 'BO123123123123123',
            'status' => 'Protocolo Enviado!'
        ];
    }
}