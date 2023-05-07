<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patients>
 */
class PatientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'prenom' => $this->faker->firstName(),
            'nom' => $this->faker->lastName(),
            'sexe' => $this->faker->randomElement(['Homme', 'Femme']),
            'dateNaiss' => $this->faker->date(),
            'lieuNaiss' => $this->faker->city(),
            'age' => $this->faker->numberBetween(18, 90),
            'etatcivil' => $this->faker->randomElement(['Marié', 'Célibataire']),
            'addresse' => $this->faker->address(),
            'mutuelle' => $this->faker->word(),
            'profession' => $this->faker->jobTitle(),
            'email' => $this->faker->unique()->safeEmail(),
            'tel' => $this->faker->phoneNumber(),
            'observations' => $this->faker->paragraph(),
        ];
    }
}
