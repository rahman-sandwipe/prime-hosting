<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $primaryKey = 'attributeID';
    protected $table = 'attributes';
    protected $fillable = [
        'attribute_name',
        'attribute_slug'
    ];
}
