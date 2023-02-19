<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Seeder;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('en_PH');

        for ($i = 0; $i < 25; $i++) {
            Chat::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'chat_message' => $faker->sentence(10),
                'chat_email' => $faker->email,
                'chat_image' => $faker->imageUrl(640, 480),
            ]);
        }
    }
}
