<?php

namespace Database\Seeders;

use App\Models\BookSmallEvents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSmallEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookSmallEvents::create([
            'book_id' => '1',
            'small_event_id' => '12',
        ]);

        BookSmallEvents::create([
            'book_id' => '1',
            'small_event_id' => '15',
        ]);

        BookSmallEvents::create([
            'book_id' => '1',
            'small_event_id' => '18',
        ]);
        BookSmallEvents::create([
            'book_id' => '2',
            'small_event_id' => '12',
        ]);
        BookSmallEvents::create([
            'book_id' => '2',
            'small_event_id' => '15',
        ]);
        BookSmallEvents::create([
            'book_id' => '2',
            'small_event_id' => '16',
        ]);
    }
}
