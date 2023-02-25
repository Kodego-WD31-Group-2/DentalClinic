<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\FeeSchedule;
use App\Models\Appointment;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Get all appointments to generate random appointment_id and transaction_date for each transaction
        $appointments = Appointment::all();
        $totalSeeds = 200;
        $paidPercentage = 0.8;
        $paidSeeds = intval($totalSeeds * $paidPercentage);

        for ($i = 1; $i <= $totalSeeds; $i++) {
            // Get a random appointment and use its date as the transaction date
            $appointment = $appointments->random();
            $transactionDate = Carbon::parse($appointment->date);

            // Create a new transaction with a random appointment_id and transaction_date
            $transaction = Transaction::create([
                'appointment_id' => $appointment->appointment_id,
                'transaction_date' => $transactionDate,
                'total_cost' => 0, // initialize total cost to zero
                'payment_method' => $faker->randomElement(['Credit Card', 'Paypal', 'Bank_transfer', 'Cash', 'Insurance Provider']),
                'payment_status' => $i <= $paidSeeds ? 'Paid' : $faker->randomElement(['Pending', 'Failed']),
            ]);

            // Generate a random number of transaction items (between 1 and 5)
            $numItems = rand(1, 5);
            $totalCost = 0; // initialize total cost for transaction items to zero

            // Create the transaction items and calculate total cost for transaction
            for ($j = 0; $j < $numItems; $j++) {
                $feeSchedule = FeeSchedule::inRandomOrder()->first();
                $transactionItem = new TransactionItem([
                    'fee_schedule_id' => $feeSchedule->id,
                ]);
                $totalCost += $feeSchedule->amount; // add the amount of the fee schedule to the total cost
                $transaction->transactionItems()->save($transactionItem);
            }

            // Set the total cost for the transaction
            $transaction->total_cost = $totalCost;
            $transaction->save();
        }
    }
}
