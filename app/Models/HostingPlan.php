<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostingPlan extends Model
{
    protected $primaryKey = 'planID';
    protected $table = 'hosting_plans';
    protected $fillable = [
        'planID',
        'plan_name',
        'plan_slug',
        'description',
        'price',
        'disk_space',
        'bandwidth',
        'domains_allowed',
        'subdomains_allowed',
        'email_accounts',
        'ftp_accounts',
        'database_limit',
        'btnLink',
        'categoryID',
        'created_at',
        'attributes',
    ];
}
