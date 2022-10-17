<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProvinciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departamento_id' => $this->faker->numberBetween(1, 24),
            'name' => $this->faker->state,
        ];
    }
}
