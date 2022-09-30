<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departure_id' => $this->faker->numberBetween(1, 10),
            'customer_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'payment_code' => Str::random(10),
            'payment_datetime' => $this->faker->dateTime(),
            'adults' => $this->faker->numberBetween(1, 3),
            'childs' => $this->faker->numberBetween(1, 3),
            'status' => 1,
        ];
    }
}
