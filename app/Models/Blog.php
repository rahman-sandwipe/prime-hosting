<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey = 'blogID';
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status',
        'views',
        'comments',
        'likes',
        'dislikes',
        'tags',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'authorID',
        'categoryID'
    ];
}
