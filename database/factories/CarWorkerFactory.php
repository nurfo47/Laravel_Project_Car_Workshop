<?php

namespace Database\Factories;
use App\Models\CarWorker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarWorker>
 */
class CarWorkerFactory extends Factory
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
            'worker_id'=>$this->faker->numberBetween(1,2),
            'car_id'=>$this->faker->numberBetween(5,14),
        ];
    }
}
