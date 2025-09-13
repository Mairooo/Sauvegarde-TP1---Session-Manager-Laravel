<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WorkSession;
use App\Models\User;
use App\Models\Projet;
use App\Models\Salle;

class WorkSessionFactory extends Factory
{
    protected $model = WorkSession::class;
    
    public function definition(): array
    {
        $startTime = $this->faker->dateTimeBetween('08:00', '16:00');
        $endTime = (clone $startTime)->modify('+'.rand(1, 4).' hours');
        
        return [
            'user_id' => User::factory(),
            'projet_id' => Projet::factory(),
            'salle_id' => Salle::factory(),
            'date' => $this->faker->dateTime()->format('Y-m-d'),
            'heure_debut' => $startTime->format('H:i:s'),
            'heure_fin' => $endTime->format('H:i:s'),
            'status' => $this->faker->randomElement(['planifiee', 'en_cours', 'terminee', 'annulee']),
        ];
    }
}
