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
                'exam.jpg'
            ],
            [
                'Teeth Cleaning', 
                'Say goodbye to stubborn plaque and tartar with our professional teeth cleaning services. Our skilled dental hygienists will give you a deep clean, leaving your teeth feeling smooth and looking brighter.', 
                'cleaning.jpg'],
            [
                'Fillings', "Don't let cavities ruin your smile. Our tooth-colored fillings blend in seamlessly with your natural teeth, restoring your tooth's strength and appearance.", 
                'filling.jpg'],
            [
                'Root Canals', 
                'Save your natural teeth from extraction with our pain-free root canal treatments. Our skilled dentists use the latest technology and techniques to ensure a comfortable experience and successful outcome.', 
                'root_canal.jpg'],
            [
                'Extractions', 
                'When a tooth is beyond repair, our gentle and compassionate dental team will perform a safe and efficient extraction to prevent further damage to your oral health.', 
                'extraction.jpg'],
            [
                'Crowns', 
                'Get a strong and natural-looking solution to restore your damaged or decayed teeth with our high-quality dental crowns. Our team of dental experts will customize a crown to perfectly match your natural teeth.', 
                'crown.jpg'],
            [
                'Bridges', 
                'Our dental bridges are designed to replace your missing teeth, giving you a full and beautiful smile. Our skilled dental team will ensure that your bridge fits perfectly and functions just like your natural teeth.', 
                'bridge.jpg'],
            [
                'Implants', 
                'Our dental implants are the ultimate solution for missing teeth. With our state-of-the-art technology, we can provide you with a permanent, comfortable, and natural-looking replacement that will last a lifetime.', 
                'implant.jpg'],
            [
                'Orthodontics', "Get the perfect smile you've always wanted with our comprehensive orthodontic treatments. Our skilled orthodontists will create a personalized treatment plan to straighten your teeth, correct your bite, and improve your overall oral health.", 
                'orthodontics.jpg'],
            [
                'Teeth Whitening', 
                'Brighten up your smile with our teeth whitening services. Our effective and safe treatments will leave your teeth several shades whiter and give you the confidence to show off your beautiful smile.', 
                'whitening.jpg'],
            [
                'Periodontal Therapy', "Don't let gum disease take a toll on your oral health. Our periodontal therapy treatments will eliminate bacteria and plaque buildup in your gums, protecting your teeth and improving your overall health.", 
                'periodontal.jpg'],
            [
                'Oral Surgery', 
                'Our experienced dental surgeons use the latest techniques and technology to perform oral surgeries such as wisdom teeth removal and gum grafts with precision and care. Trust our team to give you the best possible outcome.', 
                'surgery.jpg'],
        ];

        $randomService = $this->faker->randomElement($services);
        
        return [
            'service' => $randomService[0],
            'service_description' => $randomService[1],
            'service_image' => $randomService[2],
        ];
    }
}