<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billings extends Model
{
    protected $primaryKey = 'billing_id';

    protected $fillable = [
        'appointment_id',
        'payment_method',
        'insurance_provider'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id', 'appointment_id');
    }

    public function billingItems()
    {
        return $this->hasMany(BillingItems::class, 'billing_id', 'billing_id');
    }
}
