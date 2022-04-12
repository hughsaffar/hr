<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    public function definition()
    {
        return [
            'address_1' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'province' => $this->faker->randomElement(['ON', 'QC', 'BC']),
            'country' => 'Canada',
        ];
    }
}
