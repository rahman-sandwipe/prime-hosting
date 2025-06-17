<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailSetting extends Model
{
    protected $table = 'mail_settings';

    protected $fillable = [
        'mailer', 'host', 'port', 'username', 'password',
        'from_address', 'from_name', 'encryption'
    ];

    public $timestamps = false;
}
