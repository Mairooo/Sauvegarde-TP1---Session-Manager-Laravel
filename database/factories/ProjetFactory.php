<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Projet;

class ProjetFactory extends Factory
{
    protected $model = Projet::class;
    
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $endDate = (clone $startDate)->modify('+'.rand(1,10).' days');
        
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'date_debut' => $startDate->format('Y-m-d'),
            'date_fin' => $endDate->format('Y-m-d'),
        ];
    }
}
