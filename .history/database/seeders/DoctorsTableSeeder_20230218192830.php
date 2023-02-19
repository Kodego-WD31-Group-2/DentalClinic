<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $images = ['doctor', 'dentist', 'dental+staff','Endodontist', 'Orthodontist', 'Oral and Maxillofacial Surgeon', 'Pediatric Dentist', 'Periodontist', 'Prosthodontist'];

        $imageCount = count($images);
        for ($i = 0; $i < 9; $i++) {
            $imageIndex = $i % $imageCount;
            $image = $images[$imageIndex];
            $displayImage = "https://source.unsplash.com/random/320x240/?{$image}";
            $fName = $faker->firstName;
            $lName = $faker->lastName;
            // $name = "$fName $lName";
            Doctor::create([
                // 'photo' => $displayImage,
                // 'name' => $name,
                'first_name' => $fName,
                'last_name' =>  $lName,
                // 'phone_number' => $faker->phoneNumber,
                // 'address' => $faker->address,
                // 'gender' => $faker->randomElement(['Male', 'Female']),
                // 'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
                'specialty' => $faker->randomElement(['Endodontist', 'Orthodontist', 'Oral and Maxillofacial Surgeon', 'Pediatric Dentist', 'Periodontist', 'Prosthodontist']),
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                // 'doctor_image' => $faker->imageUrl(640, 480),
                'doctor_image' => $displayImage,
            ]);
        }
        
    }
}
