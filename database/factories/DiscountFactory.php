<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(4),
            'amount' => $this->faker->randomNumber(2),
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
