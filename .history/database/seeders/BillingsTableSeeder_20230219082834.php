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
    $faker = \Faker\Factory::create('en_PH');
    $used_appointment_ids = [];

    for ($i = 0; $i < 50; $i++) {
        $appointment_id = $faker->unique()->numberBetween(1, 50);

        while (in_array($appointment_id, $used_appointment_ids)) {
            $appointment_id = $faker->unique()->numberBetween(1, 50);
        }

        array_push($used_appointment_ids, $appointment_id);

        Billing::create([
            // 'patient_id' => $faker->numberBetween(1, 50),
            'appointment_id' => $appointment_id,
            'total_cost' => $faker->randomFloat(2, 50, 200),
            'payment_method' => $faker->randomElement(['Cash', 'Debit Card', 'Credit card', 'Insurance']),
            'insurance_provider' => $faker->randomElement([null, 'MediCard', 'Intellicare', 'Maxicare', 'Caritas Health Shield']),
        ]);
    }
}

}