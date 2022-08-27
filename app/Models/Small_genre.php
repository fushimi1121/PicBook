<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Small_genre extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function bookSmallGenres()
    {
        return $this->hasMany(BookSmallGenres::class);
    }
}
