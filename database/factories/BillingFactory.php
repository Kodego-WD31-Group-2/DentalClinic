<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Billing;
use App\Models\Patient;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Billing::class;

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
            'appointment_id' => function () {
                return Appointment::factory()->create()->appointment_id;
            },
            'total_cost' => $faker->randomNumber(8),
            'payment_method' => $faker->randomElement(['Cash', 'credit', 'debit', 'check']),
            'insurance_provider' => $faker->company,
        ];
    }
}
