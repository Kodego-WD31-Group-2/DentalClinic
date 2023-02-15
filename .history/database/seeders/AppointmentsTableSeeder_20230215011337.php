<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AppointmentsTableSeeder extends Seeder
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
            Appointment::create([
                'patient_id' => $faker->numberBetween(1, 50),
                'doctor_id' => $faker->numberBetween(1, 10),
                'appointment_date' => $faker->dateTimeBetween('now', '+1 month'),
                'appointment_time' => $faker->randomElement(['Morning', 'Afternoon']),
                'appointment-type' => $faker->randomElement(['Regualr', 'Female']),
                'reason' => $faker->sentence,
                'dental-history' => $faker->paragraph,
                'first-name' => $faker->firstName,
                'last-name' => $faker->lastName,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date(),
                'medications' => $faker->sentence,
                'allergies' => $faker->sentence,
                'medical-conditions' => $faker->sentence,
                'phone-number' => $faker->phoneNumber,
                'email' => $faker->email,
                'emergency-contact-name' => $faker->name,
                'emergency-contact-number' => $faker->phoneNumber,
                'special-instructions' => $faker->sentence,
                'referral-source' => $faker->word,
                'hear-about-practice' => $faker->randomElement(['Male', 'Female']),
                'signature-confirm' => $faker->boolean,
                'reminders-consent' => $faker->boolean,
                'release-signature' => $faker->boolean,
            ]);
        }
    }
}
