<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'service' => $this->faker->unique()->randomElement([
                'Dental Exam',
                'Dental Cleaning',
                'Teeth Whitening',
                'Dental Filling',
                'Tooth Extraction'
            ]),
            'service_description' => $this->faker->paragraphs(3, true),
            'service_image' => $this->faker->randomElement([
                'exam.jpg',
                'cleaning.jpg',
                'whitening.jpg',
                'filling.jpg',
                'extraction.jpg'
            ]),
        ];
    }
}

Service::factory()->count(5)->create([
    [
        'service' => 'Dental Exam',
        'service_description' => 'A comprehensive dental exam that includes a thorough examination of your teeth, gums, and mouth.',
        'service_image' => 'exam.jpg',
    ],
    [
        'service' => 'Dental Cleaning',
        'service_description' => 'A professional dental cleaning to remove plaque and tartar buildup from your teeth and gums.',
        'service_image' => 'cleaning.jpg',
    ],
    [
        'service' => 'Teeth Whitening',
        'service_description' => 'A cosmetic dental procedure to brighten and whiten your teeth for a more confident smile.',
        'service_image' => 'whitening.jpg',
    ],
    [
        'service' => 'Dental Filling',
        'service_description' => 'A restorative dental procedure to repair a cavity or damaged tooth with a filling material.',
        'service_image' => 'filling.jpg',
    ],
    [
        'service' => 'Tooth Extraction',
        'service_description' => 'A dental procedure to remove a damaged or infected tooth, in order to prevent further complications.',
        'service_image' => 'extraction.jpg',
    ],
]);
