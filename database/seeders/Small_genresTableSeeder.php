<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Small_genre;

class Small_genresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Small_genre::Create([
            'genre_id' => 1,
            'name' => '好奇心'
        ]);
        Small_genre::Create([
            'genre_id' => 1,
            'name' => '計算力'
        ]);
        Small_genre::Create([
            'genre_id' => 1,
            'name' => '挑戦心'
        ]);
        Small_genre::Create([
            'genre_id' => 2,
            'name' => '宗教観'
        ]);
        Small_genre::Create([
            'genre_id' => 2,
            'name' => '偉人'
        ]);
        Small_genre::Create([
            'genre_id' => 2,
            'name' => '異文化'
        ]);
        Small_genre::Create([
            'genre_id' => 3,
            'name' => '色彩感'
        ]);
        Small_genre::Create([
            'genre_id' => 3,
            'name' => '創作意欲'
        ]);
        Small_genre::Create([
            'genre_id' => 3,
            'name' => '想像力'
        ]);
        Small_genre::Create([
            'genre_id' => 4,
            'name' => 'コミュ力'
        ]);
        Small_genre::Create([
            'genre_id' => 4,
            'name' => 'リーダーシップ'
        ]);
        Small_genre::Create([
            'genre_id' => 4,
            'name' => '聞く力'
        ]);
        Small_genre::Create([
            'genre_id' => 5,
            'name' => '投資'
        ]);
        Small_genre::Create([
            'genre_id' => 5,
            'name' => 'お金の流れ'
        ]);
        Small_genre::Create([
            'genre_id' => 5,
            'name' => '税'
        ]);
        Small_genre::Create([
            'genre_id' => 6,
            'name' => '生物多様性'
        ]);
        Small_genre::Create([
            'genre_id' => 6,
            'name' => '生き物の不思議'
        ]);
        Small_genre::Create([
            'genre_id' => 6,
            'name' => '海の世界'
        ]);
    }
}
