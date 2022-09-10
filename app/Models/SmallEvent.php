<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmallEvent extends Model
{
    protected $table = 'small_events';
    use HasFactory;
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function bookSmallEvents()
    {
        return $this->hasMany(BookSmallEvents::class);
    }
}
