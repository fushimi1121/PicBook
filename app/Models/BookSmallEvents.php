<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookSmallEvents extends Pivot
{
    use HasFactory;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'book_small_events';

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function smallEvent()
    {
        return $this->belongsTo(SmallEvent::class);
    }
}
