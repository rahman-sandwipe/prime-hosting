<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailConfig extends Model
{
    protected $table = 'mail_configs';

    protected $fillable = [
        'mail_driver',
        'mail_host',
        'mail_port',
        'mail_username',
        'mail_password',
        'mail_from_name',
        'mail_from_email',
    ];

    public $timestamps = false;
}
