<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{


    //Admin View All Doctors
    public function show() {
        return view('doctors.show-doctors', [
            'doctor' => Doctor::all()
        ]);    
    }

    // Show Doctors Page
    public function index() {
        return view('pages.doctors', [
            'doctor' => Doctor::all()
        ]);
    }

    // Show Add Doctor Form
    public function add() {
        return view('doctors.add-doctors');
    }

    // Store doctor Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'specialty' => 'required',
            'email' => 'required',
            'description' => 'required',
            'doctor_image' => 'required|image',
        ]);

        if($request->hasFile('doctor_image')) {
            $formFields['doctor_image'] = $request->file('doctor_image')->store('doctor_image', 'public');
        }
        
        Doctor::create($formFields);
        
        return redirect('/doctors/show')->with('message', 'Listing created successfully');
    }

    // Show Doctor Edit Form
    public function edit(Doctor $doctor) {
        return view('doctors.edit-doctors', ['doctor' => $doctor]);
    }

    //Show Doctor View, Show Single View
    public function view(Doctor $doctor) {
        return view('doctors.view-doctors', [
            'doctor' => $doctor
        ]);
    }
    

    // Update Doctor Info
    public function update(Request $request, Doctor $doctor) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'specialty' => 'required',
            'email' => 'required',
            'description' => 'required',
            'doctor_image' => 'image',  
        ]);

        if($request->hasFile('doctor_image')) {
            $formFields['doctor_image'] = $request->file('doctor_image')->store('doctor_image', 'public');
        }

        $doctor->update($formFields);
        
        return redirect('/doctors/show')->with('message', 'Listing updated successfully');
    }

    // Delete a Doctor Entry
    public function destroy(Doctor $doctor) {
        $doctor->delete();
        return redirect('/doctors/show')->with('message', 'Listing deleted successfuly');
    }

    // Show form to schedule an appointment
    public function appointmentForm() {
        $doctors = Doctor::pluck('name', 'id');
        return view('form-appointment', ['doctors' => $doctors]);
    }



    
}
