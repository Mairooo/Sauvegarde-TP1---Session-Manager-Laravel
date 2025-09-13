<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Projecteur', 'Ordinateur', 'Microphone', 'Tableau']),
            'description' => $this->faker->sentence(6),
        ];
    }
}
