<?php

namespace Database\Seeders;

use App\Models\BillingItems;
use App\Models\TransactionItem;
use Illuminate\Database\Seeder;

class BillingItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionItems = TransactionItem::all();

        for ($i = 1; $i <= 100; $i++) {
            $billingItem = new BillingItems([
                'transactionitem_id' => $transactionItems->random()->id,
                'quantity' => rand(1, 10),
                'total_cost' => rand(100, 1000) / 100
            ]);

            $billingItem->save();
        }
    }
}
