<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BoatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->sentence(1),
            'seatscount' => $this->faker->numberBetween(8, 12),
            'price_adult' => $this->faker->randomNumber(2),
            'price_child' => $this->faker->randomNumber(2),
            'image' => $this->faker->url,
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
