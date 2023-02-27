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
                'service_name' => 'Consultation fee',
                'average_cost' => 1500,
            ],
            [
                'service_name' => 'X-rays and diagnostic tests',
                'average_cost' => 2500,
            ],
            [
                'service_name' => 'Teeth cleaning and polishing',
                'average_cost' => 2000,
            ],
            [
                'service_name' => 'Composite fillings',
                'average_cost' => 3000,
            ],
            [
                'service_name' => 'Surgical extraction',
                'average_cost' => 4000,
            ],
            [
                'service_name' => 'Root canal treatment',
                'average_cost' => 10000,
            ],
            [
                'service_name' => 'Porcelain crown',
                'average_cost' => 20000,
            ],
            [
                'service_name' => 'Complete dentures',
                'average_cost' => 30000,
            ],
            [
                'service_name' => 'Implant',
                'average_cost' => 75000,
            ],
            [
                'service_name' => 'Braces',
                'average_cost' => 50000,
            ],
            [
                'service_name' => 'Teeth whitening treatment',
                'average_cost' => 10000,
            ],
            [
                'service_name' => 'Fluoride treatment',
                'average_cost' => 1000,
            ],
            [
                'service_name' => 'Sealant',
                'average_cost' => 1500,
            ],
            [
                'service_name' => 'Nitrous oxide sedation',
                'average_cost' => 3000,
            ],
            [
                'service_name' => 'Missed appointment fee',
                'average_cost' => 500,
            ],
        ];

        foreach ($fees as $fee) {
            DB::table('fee_schedule')->insert($fee);
        }
    }
}
