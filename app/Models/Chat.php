<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'chat_email', 'chat_message', 'chat_image', 'chat_hours', 'chat_notification', 'chat_minutes',
        
    ];

    protected $primaryKey = 'chat_id';
}
