<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relationship: One category has many posts
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_cat_id');
    }
}
