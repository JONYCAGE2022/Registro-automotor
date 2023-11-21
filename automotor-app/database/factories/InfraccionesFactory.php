<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Infraccion>
 */
class InfraccionesFactory extends Factory
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
            "auto_id"=>$this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]),
            "fecha"=>$this->faker->date(),
            "desripcion"=>$this->faker->sentence(),
            "tipo"=>$this->faker->randomElement(['alta velocidad','doble fila','alcoholemia'])
        ];
    }
}
