<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $guarded = [];

    // A comment belongs to a post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // A comment belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A comment can have replies (self-referencing)
    public function replies()
    {
        return $this->hasMany(PostComment::class, 'parent_id');
    }

    // A comment may belong to a parent comment
    public function parent()
    {
        return $this->belongsTo(PostComment::class, 'parent_id');
    }
}
