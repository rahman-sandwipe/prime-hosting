<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeymentGeteway extends Model
{
    protected $table = 'peyment_geteways';

    protected $fillable = [
        'name',            // Name of the payment gateway (e.g., 'paypal', 'stripe')
        'api_key',         // API Key for the payment gateway
        'api_secret',      // API Secret for the payment gateway
        'currency_code',   // Default currency code (e.g., 'USD')
        'currency_symbol', // Default currency symbol (e.g., '$')
        'logo',            // Logo URL or path for the payment gateway
        'status',          // Status of the payment gateway (1 for active, 0 for inactive)
    ];

    public $timestamps = false;
}
