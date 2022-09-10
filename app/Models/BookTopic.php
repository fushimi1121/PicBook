<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookTopic extends Pivot
{
    use HasFactory;

    protected $table = 'book_topics';
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
