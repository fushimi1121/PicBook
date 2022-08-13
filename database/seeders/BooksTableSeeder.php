<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'バムとケロのおかいもの',
            'publisher_id' => '1',
            'body' => '水曜日には，みんなで車に乗って，市場に買い出しにいこう！市場でみんなが買うのは，どんなもの？',
            'price' => '1650',
            'isbn_13' => '9784894232105',
            'released_at' => '1999/02/01',
            'age' => '４〜５歳',
            'cover_img' => '350_Ehon_182',
        ]);

        Book::create([
            'title' => 'バムとケロのにちようび',
            'publisher_id' => '1',
            'body' => '雨の日曜日。サッカーもすなあそびもできない。そんな日には，ちらかったへやをかたづけて，おかしを用意して，それから本を読もうと……。',
            'price' => '1650',
            'isbn_13' => '9784894230927',
            'released_at' => '1994/09/01',
            'age' => '４〜５歳',
            'cover_img' => '100_Ehon_123',
        ]);
    }
}
