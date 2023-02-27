<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Patient;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\FeeSchedule;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PatientAppointmentTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all appointments to generate random appointment_id for each transaction
        $appointments = Appointment::all();
        $totalSeeds = 200;
        $paidPercentage = 0.8;
        $paidSeeds = intval($totalSeeds * $paidPercentage);

        for ($i = 1; $i <= $totalSeeds; $i++) {
            // Create a new patient
            $patient = Patient::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-70 years', 'now'),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'description' => $faker->text,
                'patient_image' => $faker->imageUrl(640, 480),
                'user_id' => $faker->numberBetween(2, 27),
            ]);

            // Create a new appointment with a random doctor and appointment_date
            $appointment = Appointment::create([
                'doctor_id' => $faker->numberBetween(1, 9),
                'appointment_date' => $faker->dateTimeBetween('now', '+1 month'),
                'appointment_time' => $faker->randomElement(['Morning', 'Afternoon']),
                'appointment_type' => $faker->randomElement(['Regular Checkup', 'Cleaning','Emergency']),
                'reason' => $faker->sentence,
                'dental_history' => $faker->paragraph,
                'first_name' => $patient->first_name,
                'last_name' => $patient->last_name,
                'gender' => $patient->gender,
                'dob' => $patient->date_of_birth,
                'medications' => $faker->sentence,
                'allergies' => $faker->sentence,
                'medical_conditions' => $faker->sentence,
                'phone_number' => $patient->phone_number,
                'email' => $patient->email,
                'emergency_contact_name' => $faker->name,
                'emergency_contact_number' => $faker->phoneNumber,
                'special_instructions' => $faker->sentence,
                'referral_source' => $faker->word,
                'hear_about_practice' => $faker->randomElement(['Search Engine', 'Social Media', 'Friend or Family', 'Advertisement', 'Other']),
                'signature_confirm' => $faker->boolean,
                'reminders_consent' => $faker->boolean,
                'release_signature' => $faker->boolean,
                'status' => $faker->randomElement(['pending', 'completed', 'cancelled']),
                'user_id' => $patient->user_id,
            ]);

            // Create a new transaction with a random appointment_id
            $transaction = Transaction::create([
                'appointment_id' => $appointment->appointment_id,
                'total_cost' => 0,
                'payment_method' => $faker->randomElement(['Credit Card', 'Paypal', 'Bank_Transfer', 'Cash', 'Insurance Provider']),
                'payment_status' =>$i <= $paidSeeds ? 'Paid' : $faker->randomElement(['Pending', 'Failed']),
                'transaction_date' => $appointment->appointment_date,
            ]);

                    // Generate a random number of transaction items (between 1 and 5)
        $numItems = rand(1, 5);

        // Create the transaction items
        for ($j = 0; $j < $numItems; $j++) {
            $feeSchedule = FeeSchedule::inRandomOrder()->first();
            $transactionItem = new TransactionItem([
                'fee_schedule_id' => $feeSchedule->id,
            ]);
            $transaction->transactionItems()->save($transactionItem);
        }

        // Calculate the total cost of the transaction
        $totalCost = 0;
        foreach ($transaction->transactionItems as $transactionItem) {
            $totalCost += $transactionItem->feeSchedule->cost;
        }
        $transaction->total_cost = $totalCost;
        $transaction->save();
    }
}

}