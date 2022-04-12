<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'sin_number' => $this->faker->numberBetween(1000, 2000),
            'access' => $this->faker->randomElement(['employee', 'admin', 'manager']),
        ];
    }
}
