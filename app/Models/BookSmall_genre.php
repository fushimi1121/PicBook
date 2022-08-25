<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookSmall_genre extends Model
{
    use HasFactory;
    public function book_small_genre()
    {
        return $this->belongsToMany(Book::class)->using(BookSmall_genre::class);
    }
}
