<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(80000, 100000),
            'effective_at' => $this->faker->date,
        ];
    }
}
