<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\FeeSchedule;
use App\Models\Appointment;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all appointments to generate random appointment_id for each transaction
        $appointments = Appointment::all();

        foreach (range(1, 200) as $i) {
            // Create a new transaction with a random appointment_id
            $transaction = Transaction::create([
                'appointment_id' => $appointments->random()->appointment_id,
                'total_cost' => 0,
                'payment_method' => $faker->randomElement(['Credit Card', 'Paypal', 'Bank_transfer', '']),
                'payment_status' => $faker->randomElement(['pending', 'paid', 'failed']),
            ]);

            // Generate a random number of transaction items (between 1 and 5)
            $numItems = rand(1, 5);

            // Create the transaction items
            for ($j = 0; $j < $numItems; $j++) {
                $feeSchedule = FeeSchedule::inRandomOrder()->first();
                $transactionItem = new TransactionItem([
                    'fee_schedule_id' => $feeSchedule->id,
                ]);
                $transaction->transactionItems()->save($transactionItem);
            }
        }
    }
}
