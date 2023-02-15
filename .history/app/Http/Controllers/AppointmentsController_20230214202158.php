<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    // Show Add Page Form
    public function create()
    {
        return view('appointments.create');
    }

    // Store Appointment Entry
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_type' => 'required',
            'reason' => 'required',
            'dental_history' => 'nullable',
            'first_name' => 'required',
            'last_name' => 'required',
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
        ]);

        Appointment::create($formFields);

        return redirect()->route('appointments.index')->with('message', 'Appointment created successfully');
    }

    // Show All Appointments
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

    // Show A Appointment
    public function show(Appointment $appointment)
    {
        return view('appointments.show', compact('appointment'));
    }

    // Show Edit Form
    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', compact('appointment'));
    }

    // Update Appointment Entry
    public function update(Request $request, Appointment $appointment)
    {
        $formFields = $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'appointment_date' => 'required',
            'appointment_time' => 'required',
            'appointment_type' => 'required',
            'reason' => 'required',
            'dental_history' => 'nullable',
            'first_name' => 'required',
            'last_name' => 'required',
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
        ]);

        $appointment->update($formFields);

        return redirect()->route('appointments.index')->with('message', 'Appointment updated successfully');
    }

    // Delete a Appointment Entry
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('message',
