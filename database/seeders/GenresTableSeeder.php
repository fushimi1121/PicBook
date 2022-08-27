<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::Create([
            'name' => 'SCIENCE-科学の世界を探究する-',
            'introduction' => '世界の不思議に驚き、その仕組みや成り立ちにワクワクしよう。',
            'icon_img' => 'dummy001.png'
        ]);
        Genre::Create([
            'name' => 'CULTURE-異文化との出逢い',
            'introduction' => '違う言語、違う服、違うご飯。いろんな違いを発見して楽しもう。',
            'icon_img' => 'dummy002.png'
        ]);
        Genre::Create([
            'name' => 'CREATIVITY-想像力がグングン伸びる-',
            'introduction' => '個性豊かなキャラクターや絵本ならではの表現力を存分に楽しもう',
            'icon_img' => 'dummy003.png'
        ]);
        Genre::Create([
            'name' => 'COMMUNICATE-心と心の触れ合い',
            'introduction' => '協力すると、いつもよりたのしいのってなんでだろう。',
            'icon_img' => 'dummy004.png'
        ]);
        Genre::Create([
            'name' => 'ECONOMY-お金の流れを考える-',
            'introduction' => 'お金ってなんだろう、経済ってなんだろう、お金の不思議を探究しよう。',
            'icon_img' => 'dummy005.png'
        ]);
        Genre::Create([
            'name' => 'SUSTAINABLE-持続可能な社会を築く-',
            'introduction' => 'この美しい世界を、未来まで残すためにどんなことができるだろう',
            'icon_img' => 'dummy006.png'
    ]);
    }
}
