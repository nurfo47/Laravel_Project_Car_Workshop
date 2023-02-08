<?php

namespace Database\Factories;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date'=>Carbon::now(),
            'total'=>$this->faker->numberBetween(100,800),
            'carworker_id'=>$this->faker->numberBetween(1,2),
            'costumer_id'=>$this->faker->numberBetween(1,14),
        ];
    }
}
