<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $animals = ['dog', 'cat', 'panda', 'koala', 'penguin', 'bunny', 'lion', 'tiger', 'elephant', 'zebra', 'giraffe'];

        $animalCount = count($animals);
        for ($i = 0; $i < 25; $i++) {
            $animalIndex = $i % $animalCount;
            $animal = $animals[$animalIndex];
            $employeeImage = "https://source.unsplash.com/random/320x240/?{$animal}";
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'employee_image' => $employeeImage,
                'position' => $position,
            ]);
        }
    }
}
