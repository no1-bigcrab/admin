<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'author_id',
        'category_id',
        'title',			
        'seo_title',			
        'excerpt',		
        'body',		
        'image',		
        'slug',		
        'meta_description',			
        'meta_keywords',		
        'status',		
        'featured'
    ];
}