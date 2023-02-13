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
            'appointment_date' => $faker->dateTimeBetween('now', '+3 months'),
            'appointment_time' => $faker->time(),
            'reason_for_visit' => $faker->sentence,
        ];
    }
}
