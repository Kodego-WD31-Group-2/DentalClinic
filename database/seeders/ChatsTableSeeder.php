<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++) {
            Chats::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'chat_message' => $faker->sentence(10),
                'chat_email' => $faker->email,
                'chat_hours' => $faker->numberBetween(0, 12),
                'chat_minutes' => $faker->numberBetween(0, 59),
                'chat_photo' => $faker->photoUrl(640, 480),
            ]);
        }
    }
}
