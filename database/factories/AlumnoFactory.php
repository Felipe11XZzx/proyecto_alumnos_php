<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Facades\Hash;

class AlumnoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'dni' => fake()->randomNumber(8),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password123'),
        ];
    }
}