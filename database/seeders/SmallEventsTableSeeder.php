<?php

namespace Database\Seeders;

use App\Models\SmallEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SmallEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SmallEvent::Create([
            'event_id' => 1,
            'name' => 'おと'
        ]);
        SmallEvent::Create([
            'event_id' => 1,
            'name' => 'いろ・かたち'
        ]);
        SmallEvent::Create([
            'event_id' => 1,
            'name' => 'ねんね'
        ]);
        SmallEvent::Create([
            'event_id' => 1,
            'name' => '歩きはじめ'
        ]);
        SmallEvent::Create([
            'event_id' => 1,
            'name' => 'からだをうごかす'
        ]);
        SmallEvent::Create([
            'event_id' => 2,
            'name' => 'おしゃべり'
        ]);
        SmallEvent::Create([
            'event_id' => 2,
            'name' => 'ものの認識'
        ]);
        SmallEvent::Create([
            'event_id' => 2,
            'name' => 'いやいや'
        ]);
        SmallEvent::Create([
            'event_id' => 2,
            'name' => 'じゅんばんこ'
        ]);
        SmallEvent::Create([
            'event_id' => 3,
            'name' => 'おともだち'
        ]);
        SmallEvent::Create([
            'event_id' => 3,
            'name' => '好き嫌い'
        ]);
        SmallEvent::Create([
            'event_id' => 3,
            'name' => '物語を楽しむ'
        ]);
        SmallEvent::Create([
            'event_id' => 3,
            'name' => 'お兄ちゃん'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => 'がまん'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => 'やってみよう'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => '思いやり'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => 'ことば遊び'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => 'お世話'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => '学校へ行こう'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => 'ともだちづくり'
        ]);
        SmallEvent::Create([
            'event_id' => 4,
            'name' => '文字をよもう'
        ]);
    }
}
