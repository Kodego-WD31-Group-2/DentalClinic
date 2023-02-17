<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{   

     // Show Add Page Form
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
            // 'appointment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // if($request->hasFile('appointment_image')) {
        //     $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_images', 'public');
        // }
        
        Appointment::create($formFields);
        
        return redirect('/home')->with('message', 'Appointment created successfully');
    }
   
    // Show All Appointments
    // public function index() 
    // {
    //     $appointments = Appointment::all();
    //     return view('appointments.show-appointments', compact('appointments'));
    // }  

    public function index() 
    {
        $appointments = Appointment::orderBy('appointment_date')
            ->orderBy('appointment_time')
            ->simplepaginate(20);
        return view('appointments.show-appointments', compact('appointments'));
    }
    
    // Show A Appointment
    // public function show(Appointment $appointment) {
    //     return view('appointments.appointment', [
    //         'appointment' => $appointment
    //     ]);    
    // }
 

    // Show Edit Form
    // public function edit(Appointment $appointment) {
    //     return view('appointments.edit-appointment', compact('appointment'));
    // }

    // public function edit(Appointment $appointment) {
    //     return view('appointments.edit-appointment', ['appointment' => $appointment]);
    //     return view('appointments.edit-appointment', ['appointment' => $appointment, 'doctors' => $doctor]);
    // }
    public function edit(Appointment $appointment) {
        $doctors = Doctor::all();
        $doctor = $appointment->doctor; // load the doctor for the appointment
        return view('appointments.edit-appointment', compact('appointment', 'doctors', 'doctor'));
    }
    
    // Update Appointment Entry
    public function update(Request $request, Appointment $appointment) {
        $formFields = $request->validate([
            // 'patient_id' => 'required',
            // 'doctor_id' => 'required',
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
            // 'signature_confirm' => 'boolean',
            // 'reminders_consent' => 'boolean',
            // 'release_signature' => 'boolean',
            // 'status' => 'required',
            // 'appointment_image' => 'image',  
        ]);

        // if($request->hasFile('appointment_image')) {
        //     $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_image', 'public');
        // }

        $appointment->update($formFields);
        
        return redirect('/appointments/list')->with('message', 'Appointment updated successfully');
    }

    // Delete an Appointment Entry
    public function destroy(Appointment $appointment) {
        $appointment->delete();
        return redirect('/appointments/list')->with('message', 'Appointment deleted successfuly');
    }


    public function staus(Request $request, Appointment $appointment)
{
    $appointment->status = $request->status;
    $appointment->save();

    return response()->json(['success' => true]);
}

}
