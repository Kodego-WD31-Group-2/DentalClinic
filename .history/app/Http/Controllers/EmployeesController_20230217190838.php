<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{   

     // Show Add Page Form
     public function add() {
        return view('employees.add-employee');
    }

    // Store Employee Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'employee_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);

        if($request->hasFile('employee_image')) {
            $formFields['employee_image'] = $request->file('employee_image')->store('employee_images', 'public');
        }
        
        Employee::create($formFields);
        
        return redirect('/employees/list')->with('message', 'Employee created successfully');
    }
   
    // Show All Employees
    public function index() 
    {
        $employees = Employee::all();
        return view('employees.show-employees', compact('employees'));
    }  
    
    // Show A Employee
    public function show(Employee $employee) {
        return view('employees.employee', [
            'employee' => $employee
        ]);    
    }

    // Show Edit Form
    public function edit(Employee $employee) {
        return view('employees.edit-employee', ['employee' => $employee]);
    }

    // Update Employee Entry
    public function update(Request $request, Employee $employee) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'employee_image' => 'image',  
        ]);

        if($request->hasFile('employee_image')) {
            $formFields['employee_image'] = $request->file('employee_image')->store('employee_image', 'public');
        }

        $employee->update($formFields);
        
        return redirect('/employees/list')->with('message', 'Employee updated successfully');
    }

    // Delete an Employee Entry
    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect('/employees/list')->with('message', 'Employee deleted successfuly');
    }
}
