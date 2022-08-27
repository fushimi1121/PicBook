<?php

namespace Database\Seeders;

use App\Models\BookSmallGenres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSmallGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookSmallGenres::create([
            'book_id' => '1',
            'small_genre_id' => '1',
        ]);

        BookSmallGenres::create([
            'book_id' => '1',
            'small_genre_id' => '4',
        ]);
        BookSmallGenres::create([
            'book_id' => '2',
            'small_genre_id' => '1',
        ]);
        BookSmallGenres::create([
            'book_id' => '2',
            'small_genre_id' => '8',
        ]);
    }
}
