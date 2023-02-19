<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Faker\Generator as Faker;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Patient::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-50 years', 'now'),
                'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                'patient_image' => $faker->imageUrl(640, 480),
            ]);
        }
    }
}
