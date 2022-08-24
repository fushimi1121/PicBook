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
            'name' => '探究と科学',
            'introduction' => '物事の仕組みや成り立ちに好奇心を抱き、解明しようとする探究心を育みます。',
            'icon_img' => 'dummy1.png'
        ]);
        Genre::Create([
            'name' => '歴史と文化',
            'introduction' => '過去から現在にかけての過程と、生み出された習慣への関心を育みます。',
            'icon_img' => 'dummy2.png'
        ]);
        Genre::Create([
            'name' => '表現と創造',
            'introduction' => '五感を使っていろんなものを感じ、また自在に表現する喜びを育みます。',
            'icon_img' => 'dummy3.png'
        ]);
        Genre::Create([
            'name' => '関係と社会',
            'introduction' => '社会生活を歩む上で生じる人と人との関わりや、人間社会の成り立ちを学びます。',
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
