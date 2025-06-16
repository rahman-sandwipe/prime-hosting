<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'image',
        'register_api',
        'transfer_api',
        'description'
    ];

    public $timestamps = false;
}
