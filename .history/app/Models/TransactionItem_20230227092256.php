<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'fee_schedule_id',
        'transaction_id'
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function feeSchedule()
    {
        return $this->belongsTo(FeeSchedule::class);
    }

    public function getCostAttribute()
    {
        // calculate the cost based on the fee schedule
        return $this->feeSchedule->price * $this->quantity;
    }
}
