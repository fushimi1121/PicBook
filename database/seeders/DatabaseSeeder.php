<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PublishersTableSeeder::class);
        //$this->call(BooksTableSeeder::class);
        //$this->call(AuthorsTableSeeder::class);
        //$this->call(AuthorBooksTableSeeder::class);
        //$this->call(TopicsTableSeeder::class);
        //$this->call(GenresTableSeeder::class);
        //$this->call(EventsTableSeeder::class);
        //$this->call(ReviewsTableSeeder::class);
        //$this->call(Small_genresTableSeeder::class);
        //$this->call(BookSmallGenresTableSeeder::class);
        //$this->call(SmallEventsTableSeeder::class);
        $this->call(BookSmallEventsTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
