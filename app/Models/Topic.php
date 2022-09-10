<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    public function books()
    {
        return $this->belongsToMany(book::class,'author_books');
    }

    public function bookTopics()
    {
        return$this->hasMany(BookTopic::class);
    }
}
