<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

       // Show Add Contact Form
       public function add() {
        return view('contact.add-contact');
    }

    
    // Store Contact Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        
        Contact::create($formFields);
        
        return redirect('/contact')->with('message', 'Listing created successfully');
    }
}
