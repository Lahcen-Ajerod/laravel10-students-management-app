<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eleve>
 */
class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matiere_id' => \App\Models\Matiere::factory(),
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(25, 60),
        ];
    }
}
