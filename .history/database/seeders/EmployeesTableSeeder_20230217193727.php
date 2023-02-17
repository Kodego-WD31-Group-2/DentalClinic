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

        for ($i = 0; $i < 25; $i++) {
            Employee::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'employee_image' => $faker->randomElement(['https://loremflickr.com/320/240/dog', 'https://loremflickr.com/320/240/cat', 'https://loremflickr.com/320/240/panda', 'https://loremflickr.com/320/240/koala', 'https://loremflickr.com/320/240/penguin', 'https://loremflickr.com/320/240/dog']),
                'position' => $faker->randomElement(['Dental Hygienist', 'Dental Assistant', 'Dental Receptionist', 'Office Manager', 'Dental Laboratory Technician', 'Dental Therapist']),
            ]);
        }
    }
}
//https://loremflickr.com/320/240/dog