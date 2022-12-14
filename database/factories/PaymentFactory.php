<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_id' => $this->faker->numberBetween(1,20),
            'payment_method_id' => $this->faker->numberBetween(1,3),
            'card_number' => $this->faker->numberBetween(1,3),
        ];
    }
}
