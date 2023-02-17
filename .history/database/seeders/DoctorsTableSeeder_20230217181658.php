<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Generator as Faker;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'specialty' => $faker->jobTitle,
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                'doctor_image' => $faker->imageUrl(640, 480, ''),
            ]);
        }
    }
}
