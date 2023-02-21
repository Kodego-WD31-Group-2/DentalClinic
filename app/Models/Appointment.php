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
        'appointment_date',
        'appointment_time',
        'appointment_type',
        'reason',
        'dental_history',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'medications',
        'allergies',
        'medical_conditions',
        'phone_number',
        'email',
        'emergency_contact_name',
        'emergency_contact_number',
        'special_instructions',
        'referral_source',
        'hear_about_practice',
        'signature_confirm',
        'reminders_consent',
        'release_signature',
        
    ];

    public function scopeFilter($query, array $filters) {

        // if ($filters['search'] ?? false) {
        //     $query->where('first_name', 'like', '%' . $filters['search'] . '%' )
        //         ->orWhere('last_name', 'like', '%' . $filters['search'] . '%' );
        // }
        if ($filters['search'] ?? false) {
            $query->where(function ($query) use ($filters) {
                $query->where('first_name', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('last_name', 'like', '%' . $filters['search'] . '%')
                    ->orWhereHas('doctor', function ($query) use ($filters) {
                        $query->where('first_name', 'like', '%' . $filters['search'] . '%')
                            ->orWhere('last_name', 'like', '%' . $filters['search'] . '%');
                    });
            });
        }
    }

    protected $primaryKey = 'appointment_id';

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
