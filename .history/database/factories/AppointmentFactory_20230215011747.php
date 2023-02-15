<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'patient_id' => function () {
                return Patient::factory()->create()->patient_id;
            },
            'doctor_id' => function () {
                return Doctor::factory()->create()->doctor_id;
            },
            'patient_id' => $faker->numberBetween(1, 50),
            'doctor_id' => $faker->numberBetween(1, 10),
            'appointment_date' => $faker->dateTimeBetween('now', '+1 month'),
            'appointment_time' => $faker->randomElement(['Morning', 'Afternoon']),
            'appointment-type' => $faker->randomElement(['Regular Checkup', 'Cleaning','Emergency']),
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
            'hear-about-practice' => $faker->randomElement(['Search Engine', 'Social Media', 'Friend or Family', 'Advertisement', 'Other']),
            'signature-confirm' => $faker->boolean,
            'reminders-consent' => $faker->boolean,
            'release-signature' => $faker->boolean,
        ];
    }
}
