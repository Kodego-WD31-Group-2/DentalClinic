<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
        /**
     * Display the appointment page.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointments()
    {
        return view('appointment.appointment');
    }

    // Show Add Page Form
    public function add() {
        return view('appointments.add-appointment');
    }

    // Store Patient Entry
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

        Patient::create($formFields);

        return redirect('/appointments/list')->with('message', 'Patient created successfully');
    }

    // Show All Patients
    public function index() 
    {
        $appointments = Patient::all();
        return view('appointments.show-appointments', compact('appointments'));
    }

    // Show A Patient
    public function show(Patient $appointment) {
        return view('appointments.appointment', [
            'appointment' => $appointment
        ]);    
    }

    // Show Edit Form
    public function edit(Patient $appointment) {
        return view('appointments.edit-appointment', ['appointment' => $appointment]);
    }

    // Update Patient Entry
    public function update(Request $request, Patient $appointment) {
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

        return redirect('/appointments/list')->with('message', 'Patient updated successfully');
    }

    // Delete a Patient Entry
    public function destroy(Patient $appointment) {
        $appointment->delete();
        return redirect('/appointments/list')->with('message', 'Patient deleted successfuly');
    }
}
