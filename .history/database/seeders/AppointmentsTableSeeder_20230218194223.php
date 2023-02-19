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
        $faker = \Faker\Factory::create('en_PH');

        for ($i = 0; $i < 50; $i++) {
            Appointment::create([
                // 'patient_id' => $faker->numberBetween(1, 50),
                'doctor_id' => $faker->numberBetween(1, 9),
                'appointment_date' => $faker->dateTimeBetween('now', '+1 month'),
                'appointment_time' => $faker->randomElement(['Morning', 'Afternoon']),
                'appointment_type' => $faker->randomElement(['Regular Checkup', 'Cleaning','Emergency']),
                'reason' => $faker->sentence,
                'dental_history' => $faker->paragraph,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date(),
                'medications' => $faker->sentence,
                'allergies' => $faker->sentence,
                'medical_conditions' => $faker->sentence,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->email,
                'emergency_contact_name' => $faker->name,
                'emergency_contact_number' => $faker->phoneNumber,
                'special_instructions' => $faker->sentence,
                'referral_source' => $faker->word,
                'hear_about_practice' => $faker->randomElement(['Search Engine', 'Social Media', 'Friend or Family', 'Advertisement', 'Other']),
                'signature_confirm' => $faker->boolean,
                'reminders_consent' => $faker->boolean,
                'release_signature' => $faker->boolean,
            ]);
        }
    }
}
