<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AppointmentsController extends Controller
{   

     // Show Create Appointment Form
     public function add() {
        $doctors = Doctor::all();
        return view('appointments.form-appointment', compact('doctors'));
    }

    // Store Appointment Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            // 'patient_id' => 'required',
            'doctor_id' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_type' => 'required',
            'reason' => 'required',
            'dental_history' => 'nullable',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',            
            'dob' => 'required',
            'medications' => 'nullable',
            'allergies' => 'nullable',
            'medical_conditions' => 'nullable',
            'phone_number' => 'required',
            'email' => 'required',
            'emergency_contact_name' => 'nullable',
            'emergency_contact_number' => 'nullable',
            'special_instructions' => 'nullable',
            'referral_source' => 'nullable',
            'hear_about_practice' => 'nullable',
            'signature_confirm' => 'required|boolean',
            'reminders_consent' => 'required|boolean',
            'release_signature' => 'required|boolean',
            'user_id' => 'nullable'
            // 'appointment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // If you want image
        // if($request->hasFile('appointment_image')) {
        //     $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_images', 'public');
        // }
        // $formFields['user_id'] = '2'; // add user_id field with default value of 2
        
        Appointment::create($formFields);
        
        return redirect('/home')->with('message', 'Appointment created successfully');
    }
   
    // Show All Appointments
    // public function index() 
    // {
    //     $appointments = Appointment::all();
    //     return view('appointments.show-appointments', compact('appointments'));
    // }  

    // public function index() 
    // {
    //     $appointments = Appointment::latest()
    //         ->orderBy('appointment_date')
    //         ->orderBy('appointment_time')
    //         ->filter(request()->only('search'))
    //         ->simplepaginate(20);

    //     return view('appointments.show-appointments', compact('appointments'));
    // }

    public function index()
    {
        
        $sortByDate = (bool) request('sortByDate');
        $today = date('Y-m-d');

        // $appointments = Appointment::orderBy($sortByDate ? 'appointment_date' : 'created_at', $sortByDate ? 'asc' : 'desc')
        // $appointments = Appointment::orderBy(
        //     $sortByDate ? DB::raw("appointment_date = '$today' desc, appointment_date asc") : 'created_at', 
        //     $sortByDate ? 'asc' : 'desc'
        //     )
        $appointments = Appointment::when($sortByDate, function ($query) use ($today) {
            return $query->orderByRaw("appointment_date = '$today' DESC")
                ->orderBy('appointment_date')
                ->orderBy('appointment_time');
        }, function ($query) {
            return $query->orderBy('created_at', 'desc')
                ->orderBy('appointment_time');
        })
            ->orderBy('appointment_time')
            ->filter(request()->only('search'))
            ->simplepaginate(20);

            // dd($sortByDate);

        return view('appointments.show-appointments', compact('appointments', 'sortByDate'));
    }

   
    // Show Edit Form
    public function edit(Appointment $appointment) {
        $doctors = Doctor::all();
        $doctor = $appointment->doctor; // load the doctor for the appointment
        return view('appointments.edit-appointment', compact('appointment', 'doctors', 'doctor'));
    }
    
    // Update Appointment Entry
    public function update(Request $request, Appointment $appointment)
    {
    $validatedData = $request->validate([
        'doctor_id' => 'exists:doctors,doctor_id',
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'dob' => 'required',
        'appointment_date' => 'required',
        'appointment_time' => 'required',
        'appointment_type' => 'required',
        'reason' => 'required',
        'dental_history' => 'nullable',
        'medications' => 'nullable',
        'allergies' => 'nullable',
        'medical_conditions' => 'nullable',
        'phone_number' => 'required',
        'email' => 'required',
        'emergency_contact_name' => 'nullable',
        'emergency_contact_number' => 'nullable',
        'special_instructions' => 'nullable',
        'referral_source' => 'nullable',
        'hear_about_practice' => 'nullable',
        'status' => 'required',
    ]);

    $appointment->doctor_id = $validatedData['doctor_id'];
    $appointment->first_name = $validatedData['first_name'];
    $appointment->last_name = $validatedData['last_name'];
    $appointment->gender = $validatedData['gender'];
    $appointment->dob = $validatedData['dob'];
    $appointment->appointment_date = $validatedData['appointment_date'];
    $appointment->appointment_time = $validatedData['appointment_time'];
    $appointment->appointment_type = $validatedData['appointment_type'];
    $appointment->reason = $validatedData['reason'];
    $appointment->dental_history = $validatedData['dental_history'];
    $appointment->medications = $validatedData['medications'];
    $appointment->allergies = $validatedData['allergies'];
    $appointment->medical_conditions = $validatedData['medical_conditions'];
    $appointment->phone_number = $validatedData['phone_number'];
    $appointment->email = $validatedData['email'];
    $appointment->emergency_contact_name = $validatedData['emergency_contact_name'];
    $appointment->emergency_contact_number = $validatedData['emergency_contact_number'];
    $appointment->special_instructions = $validatedData['special_instructions'];
    $appointment->referral_source = $validatedData['referral_source'];
    $appointment->hear_about_practice = $validatedData['hear_about_practice'];
    $appointment->status = strtolower($validatedData['status']);
    $appointment->save();

    return redirect('/appointments/list')->with('success', 'Appointment updated successfully.');
    }

    // Delete an Appointment Entry
    public function destroy(Appointment $appointment) {
        $appointment->delete();
        return redirect('/appointments/list')->with('message', 'Appointment deleted successfuly');
    }
}
