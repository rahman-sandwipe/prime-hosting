<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HostingPackage extends Model
{
    use HasFactory;
    protected $table = 'hosting_packages';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_monthly',
        'price_yearly',
        'disk_space',
        'bandwidth',
        'addon_domains',
        'email_accounts',
        'support_type',
        'attribute_id',
        'status',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
