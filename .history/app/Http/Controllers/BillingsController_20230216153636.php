<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{   

     // Show Add Page Form
     public function add() {
        return view('billings.add-billing');
    }

    // Store Employee Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'billing_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('billing_image')) {
            $formFields['billing_image'] = $request->file('billing_image')->store('billing_images', 'public');
        }
        
        Employee::create($formFields);
        
        return redirect('/billings/list')->with('message', 'Employee created successfully');
    }
   
    // Show All Employees
    public function index() 
    {
        $billings = Employee::all();
        return view('billings.show-billings', compact('billings'));
    }  
    
    // Show A Employee
    public function show(Employee $billing) {
        return view('billings.billing', [
            'billing' => $billing
        ]);    
    }

    // Show Edit Form
    public function edit(Employee $billing) {
        return view('billings.edit-billing', ['billing' => $billing]);
    }

    // Update Employee Entry
    public function update(Request $request, Employee $billing) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'billing_image' => 'image',  
        ]);

        if($request->hasFile('billing_image')) {
            $formFields['billing_image'] = $request->file('billing_image')->store('billing_image', 'public');
        }

        $billing->update($formFields);
        
        return redirect('/billings/list')->with('message', 'Employee updated successfully');
    }

    // Delete an Employee Entry
    public function destroy(Employee $billing) {
        $billing->delete();
        return redirect('/billings/list')->with('message', 'Employee deleted successfuly');
    }
}
