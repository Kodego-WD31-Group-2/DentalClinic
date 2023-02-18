<?php

namespace Database\Seeders;
use App\Models\Chat;
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
            Chat::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'chat_message' => $faker->sentence(10),
                'chat_email' => $faker->email,
                'chat_hours' => $faker->numberBetween(0, 12),
                'chat_minutes' => $faker->numberBetween(0, 59),
                'chat_notification' => $faker->numberBetween(0, 10),
                'chat_image' => $faker->imageUrl(640, 480),
            ]);
        }
    }
}
