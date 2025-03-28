<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'categoryID';
    protected $table = 'categories';
    protected $fillable = ['category_name', 'category_slug', 'attributeID'];
}
