<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Titular>
 */
class TitularesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id"=>$this->faker->unique()->numberBetween(1,15),
            "apellido"=>$this->faker->lastName(),
            "nombre"=>$this->faker->firstName(),
            "dni"=>$this->faker->unique()->numberBetween(10000000, 99999999),
            "domicilio"=>$this->faker->address(),
        ];
    }
}
