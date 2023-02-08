<?php

namespace Database\Factories;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['Golf', 'Passat', 'Mercedes', 'BMW', 'Jeep', 'Fiat']),
            'model'=>$this->faker->randomElement(['520d','6','E220','Punto','8','Cheroke']),
            'year'=>$this->faker->numberBetween(2004,2020),
            'motor_type'=>$this->faker->randomElement(['Dizel','Benzin']),
            'id_brand'=>$this->faker->numberBetween(1,13),
            'id_costumer'=>$this->faker->numberBetween(5,14),
        ];
    }
}
