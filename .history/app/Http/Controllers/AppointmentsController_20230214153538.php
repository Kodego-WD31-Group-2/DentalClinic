<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
   // Show Add Page Form
   public function add() {
    return view('appointments.add-appointment');
}

// Store Appointment Entry
public function store(Request $request) {
    $formFields = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'date_of_birth' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'email' => 'required',
        'appointment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required', 

    ]);

    if($request->hasFile('appointment_image')) {
        $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_images', 'public');
    }

    Appointme::create($formFields);

    return redirect('/appointments/list')->with('message', 'Appointment created successfully');
}

// Show All Appointments
public function index() 
{
    $appointments = Appointment::all();
    return view('appointments.show-appointments', compact('appointments'));
}

// Show A Appointment
public function show(Appointment $appointment) {
    return view('appointments.appointment', [
        'appointment' => $appointment
    ]);    
}

// Show Edit Form
public function edit(Appointment $appointment) {
    return view('appointments.edit-appointment', ['appointment' => $appointment]);
}

// Update Appointment Entry
public function update(Request $request, Appointment $appointment) {
    $formFields = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'date_of_birth' => 'required',
        'gender' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'email' => 'required',
        'appointment_image' => 'image',
        'description' => 'required', 
    ]);

    if($request->hasFile('appointment_image')) {
        $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_image', 'public');
    }

    $appointment->update($formFields);

    return redirect('/appointments/list')->with('message', 'Appointment updated successfully');
}

// Delete a Appointment Entry
public function destroy(Appointment $appointment) {
    $appointment->delete();
    return redirect('/appointments/list')->with('message', 'Appointment deleted successfuly');
}
}
