<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function keys()
    {
        return $this->hasMany(Key::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
