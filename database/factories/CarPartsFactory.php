<?php

namespace Database\Factories;
use App\Models\CarParts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarParts>
 */
class CarPartsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pname'=>$this->faker->randomElement(['Brisaci', 'Diskovi', 'Stop svijetla', 'Farovi', 'Ulje i filteri', 'Klima', 'Amortizeri', 'Servo pumpe']),
            'price'=>$this->faker->numberBetween(60,450),
            'carworker_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
