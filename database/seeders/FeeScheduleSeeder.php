<?php

namespace Database\Seeders;

use App\Models\FeeSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $faker = \Faker\Factory::create();
    
    $fees = [
        'Consultation fee',
        'X-rays and diagnostic tests',
        'Teeth cleaning and polishing',
        'Composite fillings',
        'Surgical extraction',
        'Root canal treatment',
        'Porcelain crown',
        'Complete dentures',
        'Implant',
        'Braces',
        'Teeth whitening treatment',
        'Fluoride treatment',
        'Sealant',
        'Nitrous oxide sedation',
        'Missed appointment fee',
    ];

    foreach ($fees as $fee) {
        FeeSchedule::create([
            'name' => $fee,
            'description' => '',
            'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 500),
        ]);
    }
}

}
