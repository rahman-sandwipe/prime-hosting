<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_infos';
    protected $fillable = [
        'contact_email',
        'support_email',
        'contact_phone',
        'whatsapp_number',
        'address',
        'map_iframe',
    ];
    public $timestamps = false;
}
