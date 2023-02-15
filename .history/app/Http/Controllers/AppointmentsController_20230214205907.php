<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{   

     // Show Add Page Form
     public function add() {
        return view('appointments.add-appointment');
    }

    // Store Employee Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'appointment_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('appointment_image')) {
            $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_images', 'public');
        }
        
        Employee::create($formFields);
        
        return redirect('/appointments/list')->with('message', 'Employee created successfully');
    }
   
    // Show All Employees
    public function index() 
    {
        $appointments = Employee::all();
        return view('appointments.show-appointments', compact('appointments'));
    }  
    
    // Show A Employee
    public function show(Employee $appointment) {
        return view('appointments.appointment', [
            'appointment' => $appointment
        ]);    
    }

    // Show Edit Form
    public function edit(Employee $appointment) {
        return view('appointments.edit-appointment', ['appointment' => $appointment]);
    }

    // Update Employee Entry
    public function update(Request $request, Employee $appointment) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'appointment_image' => 'image',  
        ]);

        if($request->hasFile('appointment_image')) {
            $formFields['appointment_image'] = $request->file('appointment_image')->store('appointment_image', 'public');
        }

        $appointment->update($formFields);
        
        return redirect('/appointments/list')->with('message', 'Employee updated successfully');
    }

    // Delete an Employee Entry
    public function destroy(Employee $appointment) {
        $appointment->delete();
        return redirect('/appointments/list')->with('message', 'Employee deleted successfuly');
    }
}
