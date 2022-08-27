<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookSmallGenres extends Pivot
{
    use HasFactory;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'book_small_genres';

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function smallGenre()
    {
        return $this->belongsTo(Small_genre::class);
    }
}
