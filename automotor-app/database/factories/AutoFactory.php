<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auto>
 */
class AutoFactory extends Factory
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
            "titular_id"=>$this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]),
            "marca"=>$this->faker->randomElement(['Ford','Toyota','Chervolet','Nissan','Honda','Fiat','Iveco','Mercedes Benz','Peugeot','Citroën']),
            "modelo"=>$this->faker->word(),
            "patente"=>$this->faker->regexify('[A-Z]{3}[0-9]{3}'),
            "tipo" =>$this->faker->randomElement(['standar','suv','camioneta','camion']),
        ];
    }
}
