<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    /**
     * @return BelongsToMany
     */
    public function authors():BelongsToMany
    {
        return $this->belongsToMany(Author::class,'author_books');
    }

    /**
     * @return BelongsTo
     */
    public function publisher():BelongsTo

    {
        return $this->belongsTo(Publisher::class);
    }

    /**
     * @return HasMany
     */
    public function reviews():HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return BelongsToMany
     */
    public function smallGenres():BelongsToMany
    {
        return $this->belongsToMany(Small_genre::class, 'book_small_genres', 'book_id', 'small_genre_id');
    }

    /**
     * @return BelongsToMany
     */
    public function smallEvents():BelongsToMany
    {
        return $this->belongsToMany(SmallEvent::class, 'book_small_events', 'book_id', 'small_event_id');
    }

    /**
     * @return BelongsToMany
     */
    public function topics():BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'topic', 'book_id', 'book_topic_id');
    }
}
