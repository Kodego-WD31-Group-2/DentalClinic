<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;
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
                'appointment_time' => $faker->time(),
                'reason_for_visit' => $faker->sentence,
            ]);
        }
    }
}