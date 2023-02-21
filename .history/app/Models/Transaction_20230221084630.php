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
    
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function getTotalCostAttribute()
    {
        return $this->transactionItems->sum(function ($item) {
            return $item->feeSchedule->price * $item->quantity;
        });
    }
}
