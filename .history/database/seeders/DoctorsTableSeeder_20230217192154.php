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
        $faker = \Faker\Factory::create('en_PH');

        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'specialty' => $faker->randomElement(['Dental Hygienist', 'Dental Assistant', 'Dental Receptionist', 'Office Manager', 'Dental Laboratory Technician', 'Dental Therapist']),
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                'doctor_image' => $faker->imageUrl(640, 480),
            ]);
        }
    }
}


//