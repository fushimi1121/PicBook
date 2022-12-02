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
            'prefecture_number' => 2
        ]);
        Review::Create([
            'book_id' => 1,
            'title' => '毎晩のように子供が読みたがります♡',
            'evaluation' => 5,
            'article' => 'およそ３ヶ月前に第一作を購入しましたが、毎晩読んでいるのに子供も全然飽きず、とうとう全巻買ってしまいました。親も一緒に楽しく読むことができるので大好きです。',
            'name' => 'Yuko',
            'age_number' => 3,
            'relationship_number' => 1,
            'prefecture_number' => 24
        ]);
        Review::Create([
            'book_id' => 1,
            'title' => '読むたびに新しい発見が面白い',
            'evaluation' => 4,
            'article' => 'もう何度読んだかわかりませんが、今でも読むたびに発見があり驚きます。ストーリーも面白いですが、カラフルなイラストの隅々にまで色んな仕掛けがあって面白い。',
            'name' => 'Jaw',
            'age_number' => 4,
            'relationship_number' => 2,
            'prefecture_number' => 32
        ]);
        Review::Create([
            'book_id' => 1,
            'title' => 'プレゼントに最適な一冊',
            'evaluation' => 5,
            'article' => '数年前に友人に子供がうまれたのでお祝いも兼ねてプレゼントしました。どうやら気に入ってくれているみたいで、とても嬉しいです♡',
            'name' => 'Marina',
            'age_number' => 2,
            'relationship_number' => 6,
            'prefecture_number' => 7
        ]);

        Review::Create([
            'book_id' => 2,
            'title' => '初めて自ら読みたがる絵本に',
            'evaluation' => 5,
            'article' => 'なかなか一冊の本を集中して読むことができない我が子でしたが、この本はシリーズを通して本当によく読んでくれます。この本のおかげで、夜寝る前の本を読む習慣が定着した気がします。',
            'name' => 'Taeko',
            'age_number' => 3,
            'relationship_number' => 1,
            'prefecture_number' => 0
        ]);

        Review::Create([
            'book_id' => 2,
            'title' => '大好きな同シリーズ中でも一番お気に入り',
            'evaluation' => 5,
            'article' => 'シリーズファンである甥っ子。その中でもダントツでこの本をよく読まされます笑。本を好きになるきっかけをくれたこの本に感謝＾＾',
            'name' => 'Yuki',
            'age_number' => 3,
            'relationship_number' => 3,
            'prefecture_number' => 22
        ]);
    }
}
