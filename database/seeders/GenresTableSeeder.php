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
            'name' => 'SCIENCE-科学の入口-',
            'introduction' => '世界の不思議に首を傾げ、物事の仕組みや成り立ちにワクワクしよう。',
            'icon_img' => 'dummy1.png'
        ]);
        Genre::Create([
            'name' => 'CULTURE-異文化との出会い-',
            'introduction' => '世界各地で、これまで人々が歩んだ歴史と培われた文化の違いを楽しもう。',
            'icon_img' => 'dummy2.png'
        ]);
        Genre::Create([
            'name' => 'CREATIVITY-表現する喜び-',
            'introduction' => '個性豊かなキャラクターや絵本ならではの表現力に',
            'icon_img' => 'dummy3.png'
        ]);
        Genre::Create([
            'name' => 'SOCIAL-人との関わり-',
            'introduction' => '人と人との助け合いが',
            'icon_img' => 'dummy4.png'
        ]);
        Genre::Create([
            'name' => '政治と経済',
            'introduction' => '社会を動かす政治への参加意識やお金・経済への関心を育みます。',
            'icon_img' => 'dummy5.png'
        ]);
        Genre::Create([
            'name' => '性と死生',
            'introduction' => 'ジェンダー・セクシャリティにまつわる関心と生き方について考えるきっかけを与えます。',
            'icon_img' => 'dummy6.png'
    ]);
    }
}
