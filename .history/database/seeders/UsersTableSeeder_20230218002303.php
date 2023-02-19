<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}


$animals = ['dog', 'cat', 'panda', 'koala', 'penguin', 'bunny', 'lion', 'tiger', 'elephant', 'zebra', 'giraffe'];
$positions = ['Dental Hygienist', 'Dental Assistant', 'Dental Receptionist', 'Office Manager', 'Dental Laboratory Technician', 'Dental Therapist'];

$animalCount = count($animals);
for ($i = 0; $i < 25; $i++) {
    $animalIndex = $i % $animalCount;
    $animal = $animals[$animalIndex];
    $position = $faker->randomElement($positions);
    $employeeImage = "https://source.unsplash.com/random/320x240/?{$animal}";