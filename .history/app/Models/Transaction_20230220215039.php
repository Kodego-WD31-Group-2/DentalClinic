<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        
        'total_cost'
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }

    public function getTotalCostAttribute()
    {
        return $this->transactionItems->sum('amount');
    }
}
