<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
use App\Models\Billing;
use App\Models\BillingItem;
use App\Models\TransactionItem;


class BillingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Get all appointments
    $appointments = Appointment::all();

    // Create a billing for each appointment
    $appointments->each(function ($appointment) {
        $billing = Billing::create([
            'appointment_id' => $appointment->id,
            'total_cost' => rand(500, 10000) / 100,
            'payment_method' => 'cash',
        ]);

        // Create 3-5 billing items for each billing
        $numItems = rand(3, 5);
        for ($i = 0; $i < $numItems; $i++) {
            $billingItem = BillingItem::create([
                'billing_id' => $billing->id,
                'item' => 'Item ' . ($i + 1),
                'amount' => rand(100, 500) / 100,
            ]);

            // Associate a random transaction item with the billing item
            $transactionItem = TransactionItem::inRandomOrder()->first();
            $billingItem->transactionItem()->associate($transactionItem);
            $billingItem->save();
        }
    });
}

        

    }
}
