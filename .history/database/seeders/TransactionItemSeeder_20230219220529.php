<?php

namespace Database\Seeders;

use App\Models\TransactionItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            TransactionItem::create([
                'amount' => $faker->numberBetween(50, 2000),
                'item' => $faker->randomElement([
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
                ]),
                'amount' => $faker->numberBetween(50, 2000),
            ]);
        }
    }
}
