<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'boat_id' => $this->faker->numberBetween(1, 5),
            'service_id' => $this->faker->numberBetween(1, 5),
            'location_id' => $this->faker->numberBetween(1, 5),
            'depart_date' => $this->faker->date,
            'depart_time' => $this->faker->time,
            'seats_enable' => $this->faker->numberBetween(8, 12),
            'duration' => '1:00',
            'price_adult' => $this->faker->randomNumber(2),
            'price_child' => $this->faker->randomNumber(2),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
