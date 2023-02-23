<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
   
    // Show Contact Us Form
    public function add() {
        return view('contact.add-contact');
    }

     // Store doctor Entry
     public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        
        Contact::create($formFields);
        
        return redirect('/home')->with('message', 'Message sent successfully');
    }

     //Admin view contact messages
     public function show() {
        $contacts = Contact::latest()
        ->filter(request()->only('search'))
        ->simplepaginate(15);
        
        return view('contact.contact-inbox', compact('contacts'));
       
    }

    public function index() 
    {
        $contacts = Contact::all();
        return view('contact.view-contact', compact('contacts'));
    }  

       //Show Doctor View, Show Single View
       public function view(Contact $contacts) {
        return view('contact.view-contact', [
            'contacts' => $contacts
        ]);
    }

    
}
