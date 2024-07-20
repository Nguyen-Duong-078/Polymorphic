<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->morphMany(comments::class, 'commentable');
    }

    public function ratings()
    {
        return $this->morphMany(ratings::class, 'rateable');
    }


}
