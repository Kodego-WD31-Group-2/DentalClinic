<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

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
                'service_image' => 'dental-exams.jpg',
            ],
            [
                'service' => 'Teeth cleaning',
                'service_description' => 'Say goodbye to stubborn plaque and tartar with our professional teeth cleaning services. Our skilled dental hygienists will give you a deep clean, leaving your teeth feeling smooth and looking brighter.',
                'service_image' => 'teeth-cleaning.jpg',
            ],
            [
                'service' => 'Fillings',
                'service_description' => 'Don\'t let cavities ruin your smile. Our tooth-colored fillings blend in seamlessly with your natural teeth, restoring your tooth\'s strength and appearance.',
                'service_image' => 'fillings.jpg',
            ],
            [
                'service' => 'Root canals',
                'service_description' => 'Save your natural teeth from extraction with our pain-free root canal treatments. Our skilled dentists use the latest technology and techniques to ensure a comfortable experience and successful outcome.',
                'service_image' => 'root-canals.jpg',
            ],
            [
                'service' => 'Extractions',
                'service_description' => 'When a tooth is beyond repair, our gentle and compassionate dental team will perform a safe and efficient extraction to prevent further damage to your oral health.',
                'service_image' => 'extractions.jpg',
            ],
            [
                'service' => 'Crowns',
                'service_description' => 'Get a strong and natural-looking solution to restore your damaged or decayed teeth with our high-quality dental crowns. Our team of dental experts will customize a crown to perfectly match your natural teeth.',
                'service_image' => 'crowns.jpg',
            ],
            [
                'service' => 'Bridges',
                'service_description' => 'Our dental bridges are designed to replace your missing teeth, giving you a full and beautiful smile. Our skilled dental team will ensure that your bridge fits perfectly and functions just like your natural teeth.',
                'service_image' => 'bridges.jpg',
            ],
            [
                'service' => 'Implants',
                'service_description' => 'Our dental implants are the ultimate solution for missing teeth. With our state-of-the-art technology, we can provide you with a permanent, comfortable, and natural-looking replacement that will last a lifetime.',
                'service_image' => 'implants.jpg',
            ],
            [
                'service' => 'Orthodontics',
                'service_description' => 'Get the perfect smile you\'ve always wanted with our comprehensive orthodontic treatments. Our skilled orthodontists will create a personalized treatment plan to straighten your teeth, correct your bite, and improve your overall oral health.',
                'service_image' => 'orthodontics.jpg',
            ],
            [
                'service' =>'Teeth whitening',
                'service_description' => 'Brighten up your smile with our teeth whitening services. Our effective and safe treatments will leave your teeth several shades whiter and give you the confidence to show off your beautiful smile.',
                'service_image' => 'teeth_whitening.jpg',
            ],
            [
                'service' => 'Periodontal therapy',
                'service_description' => "Don't let gum disease take a toll on your oral health. Our periodontal therapy treatments will eliminate bacteria and plaque buildup in your gums, protecting your teeth and improving your overall health.",
                'service_image' => 'periodontal_therapy.jpg',
            ],
            [
                'service' => 'Oral surgery',
                'service_description' => 'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.',
                'service_image' => 'oral_surgery.jpg',
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


