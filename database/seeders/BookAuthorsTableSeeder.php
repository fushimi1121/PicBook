<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Publisher;
use App\Models\BookAuthor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BookAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookAuthor::create([
            'book_id' => '1',
            'author_id' => '1'
        ]);

        BookAuthor::create([
            'book_id' => '2',
            'author_id' => '1'
        ]);
    }
}
