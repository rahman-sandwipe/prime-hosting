<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFrom extends Model
{
    protected $primaryKey = 'authID';
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
