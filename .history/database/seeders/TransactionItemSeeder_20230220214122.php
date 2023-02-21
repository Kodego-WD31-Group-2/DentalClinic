<?php

namespace Database\Seeders;

use App\Models\FeeSchedule;
use Illuminate\Database\Seeder;
use App\Models\TransactionItem;
use App\Models\Transaction;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionIds = Transaction::pluck('id');
        $feeScheduleIds = FeeSchedule::pluck('id');
        
        for ($i = 0; $i < 200; $i++) {
            TransactionItem::create([
                'transaction_id' => $transactionIds->random(),
                'fee_schedule_id' => $feeScheduleIds->random()
            ]);
        }
    }
}

