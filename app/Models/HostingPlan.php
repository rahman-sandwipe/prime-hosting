<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HostingPlan extends Model
{
    protected $primaryKey = 'plan_id';
    protected $fillable = [ 'plan_id', 'plan_name', 'description', 'price', 'disk_space', 'bandwidth', 'domains_allowed', 'subdomains_allowed', 'email_accounts', 'ftp_accounts', 'database_limit'];
}
