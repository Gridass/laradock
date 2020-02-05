<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =
        ['title', 'slug', 'description_short','description', 'reviews', 'image', 'image_show', 'published', 'created_by', 'modified_by'];
}
