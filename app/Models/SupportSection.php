<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportSection extends Model
{
    protected $table = 'support_sections';
    protected $fillable = [
        'title',
        'description',
        'phone',
        'email',
        'live_chat_api',
        'contact_form_api',
        'image',
    ];
    public $timestamps = false;
}
