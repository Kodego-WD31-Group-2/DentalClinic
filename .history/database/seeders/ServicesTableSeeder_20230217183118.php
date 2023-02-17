<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Faker\Generator as Faker;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create(fil);

        for ($i = 0; $i < 20; $i++) {
            Service::create([
                'service' => $faker->word,
                'service_description' => $faker->text,
                'service_image' => $faker->imageUrl(640, 480, 'animals', true);
            ]);
        }
    }
}
