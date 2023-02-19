<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animals = ['dog', 'cat', 'panda', 'koala', 'penguin', 'bunny', 'lion', 'tiger', 'elephant', 'zebra', 'giraffe'];
        $positions = ['Dental Hygienist', 'Dental Assistant', 'Dental Receptionist', 'Office Manager', 'Dental Laboratory Technician', 'Dental Therapist'];

        $animalCount = count($animals);
        for ($i = 0; $i < 25; $i++) {
            $animalIndex = $i % $animalCount;
            $animal = $animals[$animalIndex];
            $position = $faker->randomElement($positions);
            $displayImage = "https://source.unsplash.com/random/320x240/?{$animal}";
            // Employee::create([
        
        // $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'employee_image' => $employeeImage,
                'position' => $position,
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
                'photo' => displayImage
            ]);
        }
        // Default credentials
        \App\Models\User::insert([
            [ 
                'name' => 'Left4code',
                'email' => 'midone@left4code.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                // 'gender' => 'male',
                // 'active' => 1,
                'remember_token' => Str::random(10)
            ]
        ]);

        // Fake users
        // User::factory()->times(9)->create();
           
    }
}

