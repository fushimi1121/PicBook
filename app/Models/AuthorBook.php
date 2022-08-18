<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    use HasFactory;
    public function author_book()
    {
        return $this->belongsToMany(Book::class)->using(AuthorBook::class);
    }
}
