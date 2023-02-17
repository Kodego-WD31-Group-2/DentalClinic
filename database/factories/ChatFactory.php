<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'chat_email' => $this->faker->unique()->safeEmail(),
            'chat_message' => $this->faker->sentence(10),
            'chat_image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
