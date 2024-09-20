<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_cat_id');
    }

    // Relationship: A post belongs to one user
    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    // Self-relationship: Get related posts from the same category
    public function relatedPosts()
    {
        return $this->hasMany(Post::class, 'post_cat_id', 'post_cat_id')->where('id', '!=', $this->id);
    }
}
