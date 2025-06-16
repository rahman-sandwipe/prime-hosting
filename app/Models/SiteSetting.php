<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'site_settings';

    protected $fillable = [
        'site_name',
        'site_tagline',
        'default_language',
        'default_timezone',
        'light_logo',
        'dark_logo',
        'favicon',
    ];

    public $timestamps = false;
}
