<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::Create([
           'book_id' => 1,
            'title' => '子供が絵本を好きになった',
            'evaluation' => 5,
            'article' => 'なかなか一冊の本を集中して読むことができない我が子でしたが、この本はシリーズを通して本当によく読んでくれます。この本のおかげで、夜寝る前の本を読む習慣が定着した気がします。',
            'name' => 'Miki',
            'age_number' => 2,
            'relationship_number' => 1,
        ]);

        Review::Create([
            'book_id' => 2,
            'title' => '初めて自ら読みたがる絵本に',
            'evaluation' => 5,
            'article' => 'なかなか一冊の本を集中して読むことができない我が子でしたが、この本はシリーズを通して本当によく読んでくれます。この本のおかげで、夜寝る前の本を読む習慣が定着した気がします。',
            'name' => 'Taeko',
            'age_number' => 3,
            'relationship_number' => 1,
        ]);
    }
}
