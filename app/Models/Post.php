<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use App\User;

class Post extends Eloquent
{
    protected $table = 'posts';
    protected $fillable = ['title', 'body', 'userId'];
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
