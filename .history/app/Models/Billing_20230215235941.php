<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'patient_id', 
        'appointment_id', 'total_cost', 'payment_method', 'insurance_provider',
    ];

    // Relationships with Patients and Appointments
    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function appointment() {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}