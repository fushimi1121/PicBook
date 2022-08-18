<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create([
            'title' => '東大３兄弟の”教育ママ”直伝　我が子が自ら学ぶ５歳からの絵本のススメ',
            'introduction' => 'XXX',
            'img' => 'banner_001',
        ]);
        Topic::create([
            'title' => 'モンテッソーリ公認幼稚園で読み聞かせされる教育絵本とは',
            'introduction' => 'YYY',
            'img' => 'banner_002',
        ]);
        Topic::create([
            'title' => 'デザイン思考は幼児教育から？',
            'introduction' => 'XXX',
            'img' => 'banner_003',
        ]);
        Topic::create([
            'title' => '視覚だけじゃない、音・手触り・匂い？！五感で魅了する絵本の世界',
            'introduction' => 'YYY',
            'img' => 'banner_004',
        ]);
        Topic::create([
            'title' => '読書の習慣はまず絵本から。この春読みたい楽しい作品シリーズ',
            'introduction' => 'XXX',
            'img' => 'banner_005',
        ]);
        Topic::create([
            'title' => '今話題のプログラミング思考。幼児から入れる絵本の入り口',
            'introduction' => 'YYY',
            'img' => 'banner_006',
        ]);
    }
}
