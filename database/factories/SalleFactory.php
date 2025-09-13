<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salle>
 */
class SalleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nom' => 'Salle ' . strtoupper($this->faker->lexify('?')),
            'capacite' => $this->faker->numberBetween(10, 100),
        ];
    }
}
