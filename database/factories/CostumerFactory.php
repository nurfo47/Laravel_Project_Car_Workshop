<?php

namespace Database\Factories;
use App\Models\Costumer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Costumer>
 */
class CostumerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname'=>$this->faker->firstname(),
            'lname'=>$this->faker->lastname(),
        ];
    }
}
