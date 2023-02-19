<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
            $displayImage = "https://source.unsplash.com/random/320x240/?{$animal}";
            $fName = $faker->firstName;
            $lName = $faker->lastName;
            $name = "$"
            User::create([
                'photo' => $displayImage,
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'role' => 'user',
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
            ]);
        }
    }
}
