<?php

namespace App\Models;

use App\Models\User;
use App\Models\HostingPackage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'package_id',
        'domain_name',
        'status',
        'total_price',
        'start_date',
        'end_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hostingPackage(){
        return $this->belongsTo(HostingPackage::class);
    }
}
