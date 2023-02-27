<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(PatientAppointmentSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(PatientAppointmentTransactionSeeder::class);
        // $this->call(AppointmentsTableSeeder::class);
        // $this->call(BillingsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(ContactUsSeeder::class);
        // $this->call(PatientsTableSeeder::class);
        $this->call(FeeScheduleSeeder::class);
        // $this->call(TransactionItemSeeder::class);
    }
}
