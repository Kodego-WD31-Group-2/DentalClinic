<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $images = ['doctor', 'cat', 'panda', 'koala', 'penguin', 'bunny', 'lion', 'tiger', 'elephant', 'zebra', 'giraffe'];

        $imageCount = count($images);
        for ($i = 0; $i < 25; $i++) {
            $imageIndex = $i % $imageCount;
            $image = $images[$imageIndex];
            $displayImage = "https://source.unsplash.com/random/320x240/?{$image}";
            $fName = $faker->firstName;
            $lName = $faker->lastName;
            $name = "$fName $lName";
            Doctor::create([
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
            ]);
        }
        // Default credentials
        \App\Models\Doctor::insert([
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
