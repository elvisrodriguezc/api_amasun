<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
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
            'duration' => '1:00',
            'price_adult' => $this->faker->randomNumber(2),
            'price_child' => $this->faker->randomNumber(2),
            'about' => $this->faker->paragraph,
            'includes' => $this->faker->paragraph,
            'recommendations' => $this->faker->paragraph,
            'image' => $this->faker->url,
            'status' => $this->faker->numberBetween(0,1)
        ];
    }
}
