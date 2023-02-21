<?php

namespace App\Http\Controllers;

use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactionItems = TransactionItem::all();
        return view('transaction-items', compact('transactionItems'));
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
}
