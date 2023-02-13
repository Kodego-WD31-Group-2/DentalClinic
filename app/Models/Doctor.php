<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'specialty', 'doctor_image', 'email', 'description',
    ];

    protected $primaryKey = 'doctor_id';
    
    //Relationship with appointments
    public function appointments() {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}