<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;


class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function post() {
        return $this->belongsTo(Post::class); //dont need to identify the post id since the name of the method is post
                                                //laravel detects this
    }
}
