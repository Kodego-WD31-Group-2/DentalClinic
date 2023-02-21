<?php

namespace App\Http\Controllers;

use App\Models\FeeSchedule;
use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactionItems = TransactionItem::all();
        return view('billings.transaction-items', compact('transactionItems'));
    }

    public function edit(TransactionItem $transactionItem)
    {
        return view('transaction-edit', compact('transactionItem'));
    }

    public function update(Request $request, TransactionItem $transactionItem)
    {
        $transactionItem->update($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaction item updated successfully.');
    }

    public function destroy(TransactionItem $transactionItem)
    {
        $transactionItem->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction item deleted successfully.');
    }

    public function create()
    {
        $fees = FeeSchedule::all();
        return view('billings.add-transaction', compact('fees'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required',//|unique:transaction_items
            'fee_schedule_id' => 'required|exists:fee_schedules,id'
        ]);

        $transactionItem = new TransactionItem;
        // $transactionItem->transaction_id;/ = $request->transaction_id
        $transactionItem->fee_schedule_id = $request->fee_schedule_id;
        $transactionItem->save();

        return redirect('/transaction-items')
            ->with('success', 'Transaction added successfully.');
    }
    
//     public function showTransactionItems()
// {
//     $fees = FeeSchedule::all();

//     return view('billings.transaction-items', compact('fees'));
// }


}


