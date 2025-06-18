<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $table = 'support_tickets';
    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'subject', 'message', 'is_read'
    ];

}
