<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $table = 'about_sections';
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image1',
        'image2',
        'register_users',
        'current_hosted',
    ];

    public $timestamps = false;
}
