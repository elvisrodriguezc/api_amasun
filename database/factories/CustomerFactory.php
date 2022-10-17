<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'document_id' => $this->faker->numberBetween(1, 4),
            'document_number' => $this->faker->numerify('########'),
            'country_code'=> $this->faker->numerify('0##'),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'departamento_id'=> $this->faker->numberBetween(1, 24),
            'provincia_id'=> $this->faker->numberBetween(1, 100),
            'distrito_id'=> $this->faker->numberBetween(1, 150),
            'address' => $this->faker->streetAddress,
            'remark' => $this->faker->slug,
        ];
    }
}
