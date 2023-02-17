<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('en_PH');

        for ($i = 0; $i < 50; $i++) {
            Employee::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'employee_image' => $faker->imageUrl(640, 480),
                'payment_method' => $faker->randomElement(['Nurse', 'debit card', 'credit card', 'insurance']),
            ]);
        }
    }
}
