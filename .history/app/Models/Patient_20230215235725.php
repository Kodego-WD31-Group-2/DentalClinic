<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'gender', 'address', 'phone_number', 'email', 'description', 'patient_image'
        
    ];

    protected $primaryKey = 'patient_id';

    // Relationship with Appointments
    public function appointments() {
        return $this->hasMany(Appointment::class, 'id');
    }

    // Relationship with Billings
    // public function billings() {
    //     return $this->hasMany(Billing::class, 'id');
    // }
}
