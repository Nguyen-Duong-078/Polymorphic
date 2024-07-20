<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url'];

    public function comments()
    {
        return $this->morphMany(comments::class, 'commentable');
    }

    public function ratings()
    {
        return $this->morphMany(ratings::class, 'rateable');
    }
}
