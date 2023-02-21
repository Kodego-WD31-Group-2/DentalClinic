<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Billings;
use App\Models\FeeSchedule;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class BillingsController extends Controller
{   

     // Show Add Page Form
     public function add() {
        return view('billings.add-billing');
    }

    // Store Billing Entry
    public function store(Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'billing_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasFile('billing_image')) {
            $formFields['billing_image'] = $request->file('billing_image')->store('billing_images', 'public');
        }
        
        Billings::create($formFields);
        
        return redirect('/billings/list')->with('message', 'Billing created successfully');
    }
   
    // Show All Billings
    public function index() 
    {
        $billings = Billings::all();
        return view('billings.show-billings', compact('billings'));
    }  
    
    // Show A Billing
    public function show(Billings $billing) {
        return view('billings.billing', [
            'billing' => $billing
        ]);    
    }

    // Show Edit Form
    public function edit(Billings $billing) {
        return view('billings.edit-billing', ['billing' => $billing]);
    }

    // Update Billing Entry
    public function update(Request $request, Billings $billing) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'billing_image' => 'image',  
        ]);

        if($request->hasFile('billing_image')) {
            $formFields['billing_image'] = $request->file('billing_image')->store('billing_image', 'public');
        }

        $billing->update($formFields);
        
        return redirect('/billings/list')->with('message', 'Billing updated successfully');
    }

    // Delete an Billing Entry
    public function destroy(Billings $billing) {
        $billing->delete();
        return redirect('/billings/list')->with('message', 'Billing deleted successfuly');
    }

    public function feeschedule()
    {
        $fees = FeeSchedule::all();

        return view('billings.fee-schedule', compact('fees'));
    }

    // Show Add Page Form
    public function transactionItem() {
       return view('billings.add-transaction');
   }

    public function addTransaction(Request $request)
{
    $validatedData = $request->validate([
        'transaction_id' => 'required|unique:transactions,transaction_id',
        'fee_item' => 'required',
    ]);

    $transaction = new TransactionItem();
    $transaction->transaction_id = $validatedData['transaction_id'];
    $transaction->fee_item = $validatedData['fee_item'];
    $transaction->save();
    
    return redirect('/billings/')->with('message', 'Billing created successfully');

    // return redirect()->route('transaction.list')
    //     ->with('success', 'Transaction added successfully.');
}

}
