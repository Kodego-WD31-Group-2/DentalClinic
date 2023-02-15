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
        return view('patients.add-patient');
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
            'patient_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required', 

        ]);

        if($request->hasFile('patient_image')) {
            $formFields['patient_image'] = $request->file('patient_image')->store('patient_images', 'public');
        }

        Patient::create($formFields);

        return redirect('/patients/list')->with('message', 'Patient created successfully');
    }

    // Show All Patients
    public function index() 
    {
        $patients = Patient::all();
        return view('patients.show-patients', compact('patients'));
    }

    // Show A Patient
    public function show(Patient $patient) {
        return view('patients.patient', [
            'patient' => $patient
        ]);    
    }

    // Show Edit Form
    public function edit(Patient $patient) {
        return view('patients.edit-patient', ['patient' => $patient]);
    }

    // Update Patient Entry
    public function update(Request $request, Patient $patient) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'patient_image' => 'image',
            'description' => 'required', 
        ]);

        if($request->hasFile('patient_image')) {
            $formFields['patient_image'] = $request->file('patient_image')->store('patient_image', 'public');
        }

        $patient->update($formFields);

        return redirect('/patients/list')->with('message', 'Patient updated successfully');
    }

    // Delete a Patient Entry
    public function destroy(Patient $patient) {
        $patient->delete();
        return redirect('/patients/list')->with('message', 'Patient deleted successfuly');
    }
}
