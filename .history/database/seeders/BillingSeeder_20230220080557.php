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
        $appointments = Appointment::all();

        foreach ($appointments as $appointment) {
            // Create a billing
            $billing = Billing::factory()->create([
                'appointment_id' => $appointment->appointment_id,
            ]);
        
            // Create 3-5 billing items
            for ($i = 0; $i < rand(3, 5); $i++) {
                $billingItem = BillingItem::factory()->create([
                    'billing_id' => $billing->id,
                ]);
        
                // Associate the billing item with a transaction item
                $transactionItem = TransactionItem::inRandomOrder()->first();
                $billingItem->transactionItem()->associate($transactionItem);
                $billingItem->save();
            }
        }
        

    }
}
