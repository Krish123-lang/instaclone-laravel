<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'caption',
        'image_path',
        'image_url',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
