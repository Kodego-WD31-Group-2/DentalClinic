<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        // 'Endodontist', 'Orthodontist', 'Oral and Maxillofacial Surgeon', 'Pediatric Dentist', 'Periodontist', 'Prosthodontist'
        $doctors = [
            [
                // G 1
                'first_name' => 'Dr. Andrea',
                'last_name' => ' Martinez',
                'specialty' => 'General Dentist',
                'email' => 'DrAndreaMartinez@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Andrea Martinez is a highly skilled and experienced dentist with over 20 years of experience in the field. She received her dental degree from the University of California, San Francisco and has since dedicated her career to providing top-quality dental care to her patients. Dr. Martinez is passionate about helping her patients achieve optimal oral health and has a special interest in cosmetic dentistry. She is a member of the American Dental Association and regularly attends continuing education courses to stay up-to-date on the latest techniques and technologies in dentistry. In her spare time, Dr. Martinez enjoys hiking and spending time with her family.',
                'doctor_image' => 'https://media.istockphoto.com/id/1390265484/photo/portrait-of-a-confident-mature-businesswoman.jpg?s=612x612&w=0&k=20&c=KqYM_HgBjx7KPPbeKRb3mWG6myoxc-RRkd7N7mNIHu8=',
            ],
            [
                // G 2
                'first_name' => 'Dr. Mikee',
                'last_name' => ' Young',
                'specialty' => 'Pediatric Dentist',
                'email' => 'DrMikeeYoung@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Mikee Young is a highly skilled and experienced dentist, dedicated to providing exceptional dental care to patients of all ages. With over 10 years of experience in the field, Dr. Young is known for his gentle touch and comprehensive approach to dental treatment. He is committed to staying up to date on the latest advancements in dental technology and techniques, ensuring that his patients receive the best possible care. Whether you need a routine cleaning or complex restorative work, you can trust Dr. Young to provide high-quality, personalized dental care.',
                'doctor_image' => 'https://media.istockphoto.com/id/1461558868/photo/serious-confident-medical-professional-in-white-lab-coat-standing-against-studio-wall-banner.jpg?s=612x612&w=0&k=20&c=hu6aX1nm4lYTqc5hVV-8m7rIu-srA_2wC1nDA3694to=',
            ],
            [
                // B 3
                'first_name' => 'Dr. Lucio',
                'last_name' => ' Vandervort',
                'specialty' => 'Orthodontist',
                'email' => 'DrLucioVandervort@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Lucio Vandervort is a highly experienced and skilled dentist with over 20 years of experience in the field. He obtained his Doctor of Dental Medicine degree from the University of Pennsylvania School of Dental Medicine, and later completed a residency in orthodontics at the University of Michigan. Dr. Vandervort has a passion for helping his patients achieve optimal oral health and a beautiful smile. He is known for his gentle and compassionate approach, and his ability to make even the most anxious patients feel at ease. Dr. Vandervort is committed to staying up-to-date with the latest advances in dental technology and techniques, and regularly participates in continuing education programs.',
                'doctor_image' => 'https://media.istockphoto.com/id/1360922192/photo/image-of-a-male-doctor-explaining-online-medical-treatment-through-a-computer-screen-white.jpg?s=612x612&w=0&k=20&c=m_vpoWgY_YsBwRlb9tJgeLvZE5XVSwMDKIAMLk2buYs=',
            ],
            [
                // B 4
                'first_name' => 'Dr. John',
                'last_name' => ' Rodriguez',
                'specialty' => 'Endodontist',
                'email' => 'DrJohnRodriguez@gmail.com',
                // 'description' => '',
                'description' => "Dr. John Rodriguez is a respected pediatrician who has dedicated her career to providing high-quality care for children. She received her medical degree from the University of California, San Francisco and completed her residency in pediatrics at Children's Hospital Los Angeles. Dr. Rodriguez has a special interest in early childhood development, and is committed to providing comprehensive care that addresses not only the physical health of her patients, but also their emotional and social well-being. She is known for her warm and caring approach, and her ability to connect with children and families. Dr. Rodriguez is also actively involved in community outreach and education, and is a strong advocate for improving access to healthcare for underserved populations",
                'doctor_image' => 'https://media.istockphoto.com/id/1328514442/photo/smiling-medical-doctor-with-stethoscope-over-white-background.jpg?s=612x612&w=0&k=20&c=Oh9124DaXVDrJ1nTAehdeJP5ysFlvSnt7fl-NDs6xzE=',
            ],
            [
                // B 5
                'first_name' => 'Dr. Howard',
                'last_name' => ' Stark',
                'specialty' => 'Periodontist',
                'email' => 'DrHowardStark@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Howard Stark was a renowned dentist who specialized in prosthodontics, the branch of dentistry that deals with the design and fabrication of dental prostheses, such as dentures, bridges, and dental implants. He obtained his dental degree from the University of Pennsylvania School of Dental Medicine and completed a residency in prosthodontics at the University of Michigan. Dr. Stark was widely recognized for his expertise in the field and his innovative approaches to dental restorations. He was committed to providing his patients with the highest quality of care, and was known for his meticulous attention to detail and his gentle approach. In addition to his clinical work, Dr. Stark was also actively involved in dental research and education, and was a sought-after speaker at conferences and seminars around the world.',
                'doctor_image' => 'https://media.istockphoto.com/id/671504504/photo/smiling-young-male-doctor-with-stethoscope-and-arms-crossed.jpg?s=612x612&w=0&k=20&c=uhvoVZ59cUSpdtrFCJW1QExMR5Fm71l3x0UDugMLGH4=',
            ],
            [
                // G 6
                'first_name' => 'Dr. Elisabeth',
                'last_name' => ' Hills',
                'specialty' => 'Prosthodontist',
                'email' => 'DrElisabethHills@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Elisabeth Hills is a highly skilled and compassionate family medicine physician who has dedicated her career to providing comprehensive care to patients of all ages. She obtained her medical degree from the University of California, San Francisco and completed her residency in family medicine at Stanford University. Dr. Hills has a special interest in preventive medicine, and is committed to helping her patients achieve and maintain optimal health through a holistic and patient-centered approach. She is known for her warm and caring demeanor, and her ability to build strong relationships with her patients. Dr. Hills is also actively involved in medical education and is a clinical instructor at a local medical school. She is passionate about teaching the next generation of physicians and ensuring that patients receive the highest quality of care.',
                'doctor_image' => 'https://media.istockphoto.com/id/1139514075/photo/female-doctor-with-stethoscope.jpg?s=612x612&w=0&k=20&c=GIIIGQZyhowJ6z2PzbNsxZcyp4vksRniPJC5TjFLHCk=',
            ],
            [
                // G 7
                'first_name' => 'Dr. Ivanna',
                'last_name' => ' Fox',
                'specialty' => 'Maxillofacial Surgeon',
                'email' => 'DrIvannaFox@gmail.com',
                // 'description' => '',
                'description' => "Dr. Ivanna Fox is a highly skilled and experienced neurologist who specializes in the diagnosis and treatment of neurological disorders. She received her medical degree from Harvard Medical School and completed her residency in neurology at the Massachusetts General Hospital. Dr. Fox has a particular interest in movement disorders, such as Parkinson's disease and essential tremor, and is known for her expertise in deep brain stimulation surgery, a treatment option for patients with advanced Parkinson's disease. She is committed to providing her patients with personalized, compassionate care and takes a collaborative approach to treatment, working closely with other healthcare providers to ensure the best possible outcomes. In addition to her clinical work, Dr. Fox is also actively involved in research and has published numerous articles in peer-reviewed journals.",
                'doctor_image' => 'https://media.istockphoto.com/id/1370905274/photo/girl-doctor-on-white-background-points-to-empty-space-banner-medical-services.jpg?s=612x612&w=0&k=20&c=0xApqMYhfEKYtUBcRt1UkU9OHHX03n53wNAmWUj4970=',
            ],
            [
                // G 8
                'first_name' => 'Dr. Elizabeth',
                'last_name' => ' Gilis',
                'specialty' => 'Dental Anesthesiologist',
                'email' => 'DrElizabethGilis@gmail.com',
                // 'description' => '',
                'description' => 'Dr. Elizabeth Gilis is a highly skilled and experienced dentist who has been practicing for over 15 years. She obtained her Doctor of Dental Medicine degree from the University of California, Los Angeles and completed her residency at the University of Washington School of Dentistry. Dr. Gilis is known for her expertise in cosmetic dentistry, and has helped numerous patients achieve their dream smiles through procedures such as teeth whitening, veneers, and Invisalign. She is also highly skilled in restorative dentistry, including dental implants, crowns, and bridges. Dr. Gilis is committed to providing her patients with personalized care and takes a patient-centered approach to treatment, ensuring that each patient receives the best possible care. She is a member of several professional organizations, including the American Dental Association and the Academy of Cosmetic Dentistry. In her free time, Dr. Gilis enjoys hiking, skiing, and spending time with her family.',
                'doctor_image' => 'https://media.istockphoto.com/id/1356785696/photo/smiling-female-doctor-with-arms-crossed-isolated-against-grey-background.jpg?s=612x612&w=0&k=20&c=35f8GYvi20F8DIYGgkcXTmkXS2vGQUmE57RZ68p3pmI=',
            ],
            [
                // B 9
                'first_name' => 'Dr. Steven',
                'last_name' => 'Strange',
                'specialty' => 'Dental Health Specialist',
                'email' => 'DrStevenStrange@gmail.com',
                // 'description' => 
                'description' => 'Dr. Steven Strange is a highly skilled and innovative dentist who has been practicing for over a decade. He obtained his dental degree from the New York University College of Dentistry and completed a residency in advanced prosthodontics at the University of Southern California. Dr. Strange is widely recognized for his expertise in dental implants and has helped countless patients restore their smiles and their confidence through this life-changing treatment. He is also highly skilled in cosmetic dentistry, including porcelain veneers, teeth whitening, and gum contouring. Dr. Strange is committed to using the latest dental technology and techniques to provide his patients with the highest quality of care. He is a member of several professional organizations, including the American Academy of Implant Dentistry and the American Society for Dental Aesthetics. In his free time, Dr. Strange enjoys practicing yoga and meditation, and is an avid collector of rare books on Eastern mysticism.',
                'doctor_image' => 'https://media.istockphoto.com/id/1226816947/photo/hurrying-to-help-male-mature-doctor-in-medical-uniform-with-stethoscope-around-neck-running.jpg?s=612x612&w=0&k=20&c=4RtHTvwkYJ2-4tDkzH0CtajGtyDHHhl0NIxKMesPQDE=',
            ],
        ];
        foreach ($doctors as $doctor) {
            DB::table('doctors')->insert([
                'first_name' => $doctor['first_name'],
                'last_name' => $doctor['last_name'],
                'specialty' => $doctor['specialty'],
                'email' => $doctor['email'],
                'description' => $doctor['description'],
                'doctor_image' => $doctor['doctor_image'],
            ]);
        }

        // $images = [
        //     'photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80',
        //     'photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 
        //     'photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
        //     'photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 
        //     'photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
        //     'photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80',
        //     'photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80',
        //     'photo-1627161683077-e34782c24d81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=703&q=80',
        //     'photo-1629425733761-caae3b5f2e50?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80'];

        // $imageCount = count($images);
        // for ($i = 0; $i < 9; $i++) {
        //     $imageIndex = $i % $imageCount;
        //     $image = $images[$imageIndex];
        //     $displayImage = "https://images.unsplash.com/{$image}";
        //     $fName = $faker->firstName;
        //     $lName = $faker->lastName;
            // $name = "$fName $lName";
            // Doctor::create([
                // 'photo' => $displayImage,
                // 'name' => $name,
                // 'first_name' => $fName,
                // 'last_name' =>  $lName,
                // 'phone_number' => $faker->phoneNumber,
                // 'address' => $faker->address,
                // 'gender' => $faker->randomElement(['Male', 'Female']),
                // 'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years')->format('Y-m-d'),
                // 'specialty' => $faker->randomElement(['Endodontist', 'Orthodontist', 'Oral and Maxillofacial Surgeon', 'Pediatric Dentist', 'Periodontist', 'Prosthodontist']),
                // 'email' => $faker->safeEmail,
                // 'doctor_image' => $faker->imageUrl(640, 480),
                // 'doctor_image' => $displayImage,
            // ]);
        // }
        
    }
}

//https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80
//https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=688&q=80
//https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1595211877493-41a4e5f236b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80
//https://images.unsplash.com/photo-1629425733761-caae3b5f2e50?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80
//https://images.unsplash.com/photo-1627161683077-e34782c24d81?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=703&q=80


