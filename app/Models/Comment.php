<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function key()
    {
        return $this->belongsTo(Key::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
