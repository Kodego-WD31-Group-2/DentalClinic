<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            $name = "$fName $lName";
            User::create([
                'photo' => $displayImage,
                'name' => $name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'role' => 'user',
                'first_name' => $fName,
                'last_name' =>  $lName,
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
                'user_id' => $faker->numberBetween(1, 50),
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
    }
}
