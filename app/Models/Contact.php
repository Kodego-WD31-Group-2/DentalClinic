<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name', 'email', 'message'
        
    ];

    public function scopeFilter($query, array $filters) {

        // if ($filters['search'] ?? false) {
        //     $query->where('first_name', 'like', '%' . $filters['search'] . '%' )
        //         ->orWhere('last_name', 'like', '%' . $filters['search'] . '%' );
        // }
        if ($filters['search'] ?? false) {
            $query->where(function ($query) use ($filters) {
                $query->where('name', 'like', '%' . $filters['search'] . '%')
                    ->orWhere('email', 'like', '%' . $filters['search'] . '%');
            });
        }
    }
    
}
