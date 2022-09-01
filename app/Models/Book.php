<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function authors()
    {
        return $this->belongsToMany(Author::class,'author_books');
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function  reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function booksmallGenres()
    {
        return $this->belongsToMany(Small_genre::class, 'book_small_genres', 'book_id', 'small_genre_id');
    }

}
