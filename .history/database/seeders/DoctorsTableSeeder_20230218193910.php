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
        $images = [
            '7YVZYZeITc8',
            'iFgRcqHznqg', 
            'ILip77SbmOE',
            'Endodontist', 
            'QXevDflbl8A',
             'Zz5LQe-VSMY', 'WMD64tMfc4k', 'pAtA8xe_iVM', 'SJvDxw0azqw'];

        $imageCount = count($images);
        for ($i = 0; $i < 10; $i++) {
            $imageIndex = $i % $imageCount;
            $image = $images[$imageIndex];
            $displayImage = "https://images.unsplash.com/photos/{$image}";
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

//https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80


