<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'total_cost'
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
