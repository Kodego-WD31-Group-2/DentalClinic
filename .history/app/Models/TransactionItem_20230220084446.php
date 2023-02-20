<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $fillable = [
        'item',
        'amount'
    ];

    public function billingItems()
    {
        return $this->hasMany(BillingItems::class, 'transactionitem_id', 'id');
    }
}
