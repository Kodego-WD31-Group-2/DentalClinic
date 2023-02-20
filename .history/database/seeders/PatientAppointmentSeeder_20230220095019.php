<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PatientAppointmentSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('en_PH');

        for ($i = 0; $i < 200; $i++) {
            $patient = Patient::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-50 years', 'now'),
                'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                'patient_image' => $faker->imageUrl(640, 480),
                'user_id' => $faker->numberBetween(2, 27),
            ]);

            Appointment::create([
                'doctor_id' => $faker->numberBetween(1, 9),
                'appointment_date' => $faker->dateTimeBetween('now', '+1 month'),
                'appointment_time' => $faker->randomElement(['Morning', 'Afternoon']),
                'appointment_type' => $faker->randomElement(['Regular Checkup', 'Cleaning','Emergency']),
                'reason' => $faker->sentence,
                'dental_history' => $faker->paragraph,
                'first_name' => $patient->first_name,
                'last_name' => $patient->last_name,
                'gender' => $patient->gender,
                'dob' => $patient->date_of_birth,
                'medications' => $faker->sentence,
                'allergies' => $faker->sentence,
                'medical_conditions' => $faker->sentence,
                'phone_number' => $patient->phone_number,
                'email' => $patient->email,
                'emergency_contact_name' => $faker->name,
                'emergency_contact_number' => $faker->phoneNumber,
                'special_instructions' => $faker->sentence,
                'referral_source' => $faker->word,
                'hear_about_practice' => $faker->randomElement(['Search Engine', 'Social Media', 'Friend or Family', 'Advertisement', 'Other']),
                'signature_confirm' => $faker->boolean,
                'reminders_consent' => $faker->boolean,
                'release_signature' => $faker->boolean,
                'status' => $faker->randomElement(['pending', 'completed', 'cancelled']),
                'user_id' => $patient->user_id,
            ]);
        }
    }
}