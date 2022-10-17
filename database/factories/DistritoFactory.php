<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DistritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provincia_id' => $this->faker->numberBetween(1, 100),
            'name' => $this->faker->state,
        ];
    }
}
