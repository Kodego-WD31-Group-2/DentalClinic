<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeeScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fees = [
            [
                'name' => 'Consultation fee',
                'amount' => 1500,
            ],
            [
                'name' => 'X-rays and diagnostic tests',
                'amount' => 2500,
            ],
            [
                'name' => 'Teeth cleaning and polishing',
                'amount' => 2000,
            ],
            [
                'name' => 'Composite fillings',
                'amount' => 3000,
            ],
            [
                'name' => 'Surgical extraction',
                'amount' => 4000,
            ],
            [
                'name' => 'Root canal treatment',
                'amount' => 10000,
            ],
            [
                'name' => 'Porcelain crown',
                'amount' => 20000,
            ],
            [
                'name' => 'Complete dentures',
                'amount' => 30000,
            ],
            [
                'name' => 'Implant',
                'amount' => 75000,
            ],
            [
                'name' => 'Braces',
                'amount' => 50000,
            ],
            [
                'name' => 'Teeth whitening treatment',
                'amount' => 10000,
            ],
            [
                'name' => 'Fluoride treatment',
                'amount' => 1000,
            ],
            [
                'name' => 'Sealant',
                'amount' => 1500,
            ],
            [
                'name' => 'Nitrous oxide sedation',
                'amount' => 3000,
            ],
            [
                'name' => 'Missed appointment fee',
                'amount' => 500,
            ],
        ];

        foreach ($fees as $fee) {
            DB::table('fee_schedules')->insert($fee);
        }
    }
}
