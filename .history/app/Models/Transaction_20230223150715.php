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
        'pay'
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItem::class);
    }
    
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function getTotalCostAttribute()
    {
        return $this->transactionItems()
            ->join('fee_schedules', 'transaction_items.fee_schedule_id', '=', 'fee_schedules.id')
            ->selectRaw('SUM(fee_schedules.amount) AS total_cost')
            ->value('total_cost');
    }

// public function getFirstNameAttribute()
// {
//     $appointment = $this->appointment()->with('first_name')->first();
//     return optional($appointment)->first_name;
// }

}
