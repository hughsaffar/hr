<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Employee;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)
            ->has(
                Employee::factory()
                    ->has(Salary::factory()->count(10))
                    ->has(Address::factory()->count(5))
            )
            ->create();
    }
}
