<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeymentGeteway extends Model
{
    protected $table = 'peyment_geteways';

    protected $fillable = [
        'name',            // Name of the payment gateway (e.g., 'paypal', 'stripe')
        'logo',            // Logo URL or path for the payment gateway
    ];

    public $timestamps = false;
}
