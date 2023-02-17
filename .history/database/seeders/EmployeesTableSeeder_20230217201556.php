<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $animals = ['dog', 'cat', 'panda', 'koala', 'penguin', 'bunny'];
        $positions = ['Dental Hygienist', 'Dental Assistant', 'Dental Receptionist', 'Office Manager', 'Dental Laboratory Technician', 'Dental Therapist'];

        for ($i = 0; $i < 25; $i++) {
            $animal = $faker->randomElement($animals);
            $position = $faker->randomElement($positions);
            $employeeImage = "https://source.unsplash.com/random/320×240/?{$animal}";
            Employee::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'employee_image' => $employeeImage,
                'position' => $faker-> $position,
            ]);
        }
    }
}
