<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        $services = [
            [
                'Dental Exams', 
                'Keep your smile shining bright with our comprehensive dental exams. Our experienced dentists will thoroughly examine your teeth and gums to ensure that your oral health is in top condition.', 
                'https://plus.unsplash.com/premium_photo-1661581069635-765f835a1a52?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8RGVudGFsJTIwRXhhbXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            
            ],
            [
                'Teeth Cleaning', 
                'Say goodbye to stubborn plaque and tartar with our professional teeth cleaning services. Our skilled dental hygienists will give you a deep clean, leaving your teeth feeling smooth and looking brighter.', 
                'https://images.unsplash.com/photo-1581585004042-bca38021ce1e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fFRlZXRoJTIwQ2xlYW5pbmd8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Fillings',
                "Don't let cavities ruin your smile. Our tooth-colored fillings blend in seamlessly with your natural teeth, restoring your tooth's strength and appearance.", 
                'https://images.unsplash.com/photo-1511766443616-f41c8cadf015?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGRlbnRhbCUyMEZpbGxpbmdzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Root Canals', 
                'Save your natural teeth from extraction with our pain-free root canal treatments. Our skilled dentists use the latest technology and techniques to ensure a comfortable experience and successful outcome.', 
                'root_canal.jpg'
            ],
            [
                'Extractions', 
                'When a tooth is beyond repair, our gentle and compassionate dental team will perform a safe and efficient extraction to prevent further damage to your oral health.', 
                'https://images.unsplash.com/photo-1606811951341-756fdd437682?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDh8fGRlbnRhbCUyMGNsaW5pY3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Crowns', 
                'Get a strong and natural-looking solution to restore your damaged or decayed teeth with our high-quality dental crowns. Our team of dental experts will customize a crown to perfectly match your natural teeth.', 
                'https://images.unsplash.com/photo-1660300110427-c4a6efdf18b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzIxfHxkZW50YWwlMjBjbGluaWN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Bridges', 
                'Our dental bridges are designed to replace your missing teeth, giving you a full and beautiful smile. Our skilled dental team will ensure that your bridge fits perfectly and functions just like your natural teeth.', 
                'bridge.jpg'
            ],
            [
                'Implants', 
                'Our dental implants are the ultimate solution for missing teeth. With our state-of-the-art technology, we can provide you with a permanent, comfortable, and natural-looking replacement that will last a lifetime.', 
                'https://images.unsplash.com/photo-1468493858157-0da44aaf1d13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njh8fGRlbnRhbCUyMGNsaW5pY3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Orthodontics', 
                "Get the perfect smile you've always wanted with our comprehensive orthodontic treatments. Our skilled orthodontists will create a personalized treatment plan to straighten your teeth, correct your bite, and improve your overall oral health.", 
                'https://images.unsplash.com/photo-1621516799962-7dad52802428?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTI0fHxkZW50YWwlMjBjbGluaWN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Teeth Whitening', 
                'Brighten up your smile with our teeth whitening services. Our effective and safe treatments will leave your teeth several shades whiter and give you the confidence to show off your beautiful smile.', 
                'https://images.unsplash.com/photo-1663182234283-28941e7612da?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzQ4fHxkZW50YWwlMjBjbGluaWN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60'
            ],
            [
                'Periodontal Therapy', 
                "Don't let gum disease take a toll on your oral health. Our periodontal therapy treatments will eliminate bacteria and plaque buildup in your gums, protecting your teeth and improving your overall health.", 
                'periodontal.jpg'
            ],
            [
                'Oral Surgery', 
                'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.', 
                'https://images.unsplash.com/photo-1619988252418-a1e6ee10b122?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTZ8fGRlbnRhbCUyMGNsaW5pY3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
            ],
        ];

        $randomService = $this->faker->randomElement($services);
        
        return [
            'service' => $randomService[0
        ],
            'service_description' => $randomService[1
        ],
            'service_image' => $randomService[2
        ],
        ];
    }
}