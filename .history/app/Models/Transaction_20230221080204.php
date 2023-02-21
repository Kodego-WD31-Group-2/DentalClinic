<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'appointment_id',
        'total_cost'
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function getTotalCostAttribute()
{
    $totalCost = 0;
    foreach ($this->transactionItems as $item) {
        $totalCost += $item->feeSchedule->price;
    }
    return $totalCost;
}
