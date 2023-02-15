<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'patient_id',
        'doctor_id',
        // 'appointment_date',
        // 'appointment_time',
        // 'appointment_type',
        // 'reason',
        // 'dental_history',
        'first_name',
        'last_name',
    ];

    protected $primaryKey = 'patient_id';

    // Relationships with Patients and Doctors
    // public function patient() {
    //     return $this->belongsTo(Patient::class, 'patient_id');
    // }

    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    // Relationship with Billing
    public function billing() {
        return $this->hasOne(Billing::class, 'appointment_id');
    }
    
}
