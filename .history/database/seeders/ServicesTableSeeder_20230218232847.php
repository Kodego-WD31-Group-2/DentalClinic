<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'service' => 'Dental exams',
                'service_description' => 'Keep your smile shining bright with our comprehensive dental exams. Our experienced dentists will thoroughly examine your teeth and gums to ensure that your oral health is in top condition.',
                'service_image' => 'https://images.pexels.com/photos/3845553/pexels-photo-3845553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Teeth cleaning',
                'service_description' => 'Say goodbye to stubborn plaque and tartar with our professional teeth cleaning services. Our skilled dental hygienists will give you a deep clean, leaving your teeth feeling smooth and looking brighter.',
                'service_image' => 'https://images.pexels.com/photos/3779713/pexels-photo-3779713.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Fillings',
                'service_description' => 'Don\'t let cavities ruin your smile. Our tooth-colored fillings blend in seamlessly with your natural teeth, restoring your tooth\'s strength and appearance.',
                'service_image' => 'https://images.pexels.com/photos/6627536/pexels-photo-6627536.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Root canals',
                'service_description' => 'Save your natural teeth from extraction with our pain-free root canal treatments. Our skilled dentists use the latest technology and techniques to ensure a comfortable experience and successful outcome.',
                'service_image' => 'https://images.pexels.com/photos/305566/pexels-photo-305566.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Extractions',
                'service_description' => 'When a tooth is beyond repair, our gentle and compassionate dental team will perform a safe and efficient extraction to prevent further damage to your oral health.',
                'service_image' => 'https://images.pexels.com/photos/6502542/pexels-photo-6502542.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Crowns',
                'service_description' => 'Get a strong and natural-looking solution to restore your damaged or decayed teeth with our high-quality dental crowns. Our team of dental experts will customize a crown to perfectly match your natural teeth.',
                'service_image' => 'https://images.pexels.com/photos/7788496/pexels-photo-7788496.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Bridges',
                'service_description' => 'Our dental bridges are designed to replace your missing teeth, giving you a full and beautiful smile. Our skilled dental team will ensure that your bridge fits perfectly and functions just like your natural teeth.',
                'service_image' => 'https://images.pexels.com/photos/4269700/pexels-photo-4269700.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Implants',
                'service_description' => 'Our dental implants are the ultimate solution for missing teeth. With our state-of-the-art technology, we can provide you with a permanent, comfortable, and natural-looking replacement that will last a lifetime.',
                'service_image' => 'https://images.pexels.com/photos/4687905/pexels-photo-4687905.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Orthodontics',
                'service_description' => 'Get the perfect smile you\'ve always wanted with our comprehensive orthodontic treatments. Our skilled orthodontists will create a personalized treatment plan to straighten your teeth, correct your bite, and improve your overall oral health.',
                'service_image' => 'https://images.pexels.com/photos/4270093/pexels-photo-4270093.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' =>'Teeth whitening',
                'service_description' => 'Brighten up your smile with our teeth whitening services. Our effective and safe treatments will leave your teeth several shades whiter and give you the confidence to show off your beautiful smile.',
                'service_image' => 'https://images.pexels.com/photos/6627575/pexels-photo-6627575.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Periodontal therapy',
                'service_description' => "Don't let gum disease take a toll on your oral health. Our periodontal therapy treatments will eliminate bacteria and plaque buildup in your gums, protecting your teeth and improving your overall health.",
                'service_image' => 'https://images.pexels.com/photos/4269362/pexels-photo-4269362.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Oral surgery',
                'service_description' => 'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.',
                'service_image' => 'https://images.pexels.com/photos/7584482/pexels-photo-7584482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Dentures',
                'service_description' => 'If you have lost some or all of your teeth, dentures can provide a natural-looking and functional replacement. There are several types of dentures available, including full, partial, and implant-supported dentures.',
                'service_image' => 'https://images.pexels.com/photos/7584482/pexels-photo-7584482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Invisalign',
                'service_description' => 'Invisalign is a popular alternative to traditional braces for straightening teeth. This treatment uses clear, removable aligners to gradually shift your teeth into the desired position, giving you a straighter and healthier smile.',
                'service_image' => 'https://images.pexels.com/photos/7584482/pexels-photo-7584482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Oral surgery',
                'service_description' => 'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.',
                'service_image' => 'https://images.pexels.com/photos/7584482/pexels-photo-7584482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
            [
                'service' => 'Oral surgery',
                'service_description' => 'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.',
                'service_image' => 'https://images.pexels.com/photos/7584482/pexels-photo-7584482.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            ],
        ];
            // Loop through each service and create a new record in the services table
    foreach ($services as $service) {
        DB::table('services')->insert([
            'service' => $service['service'],
            'service_description' => $service['service_description'],
            'service_image' => $service['service_image'],
        ]);
    }
}
}

