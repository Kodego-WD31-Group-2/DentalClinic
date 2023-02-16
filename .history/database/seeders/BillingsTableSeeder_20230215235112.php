<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Billing;
use Faker\Generator as Faker;

class BillingsTableSeeder extends Seeder
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
            Billing::create([
                'patient_id' => $faker->numberBetween(1, 50),
                'appointment_id' => $faker->numberBetween(1, 50),
                'total_cost' => $faker->randomFloat(2, 50, 200),
                'payment_method' => $faker->randomElement(['Cash', 'debit card', 'credit card', 'insurance']),
                'insurance_provider' => $faker->randomElement([null, 'Aetna', 'Cigna', 'Blue Cross Blue Shield']),
            ]);
        }
    }
}