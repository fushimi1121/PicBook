<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Publisher;
use App\Models\AuthorBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AuthorBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorBook::create([
            'author_id' => '1',
            'book_id' => '1'
        ]);

        AuthorBook::create([
            'author_id' => '1',
            'book_id' => '2'
        ]);
    }
}
