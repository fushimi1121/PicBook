<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::Create([
            'name' => '０歳〜',
            'summary' => 'コミュニケーションのはじまりです',
            'introduction' => '赤ちゃんは絵本が大好き！ 0歳でねんねの頃から読んだって、早すぎるっていうことはありません。でも、当然ながら言葉を理解しているわけではありません。反応だって、まだまだ少ないはず。だからこそ、体中の色々な感覚を使って楽しんでいます。心地の良いリズムの言葉や、変化のある色や形で描かれた絵本を、ママやパパが語りかけるように繰り返し読んであげてくださいね。',
            'icon_img' => 'dummy001.png'
        ]);
        Event::Create([
            'name' => '１歳〜',
            'summary' => '何もかもが新鮮、好奇心のかたまり！',
            'introduction' => '1歳の赤ちゃん絵本オススメ人気セレクト＆ランキング何もかもが新鮮、好奇心のかたまり！歩くようになったり、ごはんが食べられるようになったり、表情が豊かになったり。出来ることがぐんと増える１歳の頃。世界が大きく広がっていき、好奇心も止まりません。言葉はまだちゃんと喋れなくても、本人の意思は伝わってきます。でも、ママやパパが一番目を離せない時期でもありますよね。こんな時こそ活躍してくれるのが絵本です。絵本で遊んだり、真似してみたり、色んな楽しみ方を体験させてあげてくださいね。',
            'icon_img' => 'dummy002.png'
        ]);
        Event::Create([
            'name' => '２歳〜',
            'summary' => 'コミュニケーションのはじまりです',
            'introduction' => '赤ちゃんは絵本が大好き！ 0歳でねんねの頃から読んだって、早すぎるっていうことはありません。でも、当然ながら言葉を理解しているわけではありません。反応だって、まだまだ少ないはず。だからこそ、体中の色々な感覚を使って楽しんでいます。心地の良いリズムの言葉や、変化のある色や形で描かれた絵本を、ママやパパが語りかけるように繰り返し読んであげてくださいね。',
            'icon_img' => 'dummy003.png'
        ]);
        Event::Create([
            'name' => '３歳〜',
            'summary' => 'コミュニケーションのはじまりです',
            'introduction' => '赤ちゃんは絵本が大好き！ 0歳でねんねの頃から読んだって、早すぎるっていうことはありません。でも、当然ながら言葉を理解しているわけではありません。反応だって、まだまだ少ないはず。だからこそ、体中の色々な感覚を使って楽しんでいます。心地の良いリズムの言葉や、変化のある色や形で描かれた絵本を、ママやパパが語りかけるように繰り返し読んであげてくださいね。',
            'icon_img' => 'dummy004.png'
        ]);
        Event::Create([
            'name' => '４歳〜',
            'summary' => '絵本の中での出会いも大切な経験です！',
            'introduction' => '身体も心も急成長する4歳の頃。急に大人っぽい発言をしたかと思えば、急にぐずりだしたり。それはそうですよね、まだまだ成長の途中なのですから。本人が、一番とまどっている時期なのかもしれません。だからこそ、この時期に読む絵本の存在は大きいのです。とにかく自分の中に芽生える色々な気持ちに対応してあげられるよう、様々なジャンル、内容の絵本を読んであげてくださいね。',
            'icon_img' => 'dummy005.png'
        ]);
        Event::Create([
            'name' => '５歳〜',
            'summary' => '絵本の世界を、より深く味わえるように',
            'introduction' => '年長さんになって周りがきちんと見えてくる5歳の頃。お友だちや大人の事もよく見ています。感情を伝えるための言葉も使えるようになってきます。物語や絵に込められたメッセージや楽しみ方を、大人が思うよりもずっと深く受け取っていることもあるでしょう。だからこそ、その子の絵本の選び方や読み方を尊重してあげてくださいね。',
            'icon_img' => 'dummy006.png'
        ]);
        Event::Create([
            'name' => '６歳〜',
            'summary' => '絵本から読み物への橋渡しが大きなテーマに',
            'introduction' => '園の年長さんと小学1年生をまたぐ6歳。小学校入学という一大イベントは、子どもたちにとっても親御さんにとっても、大きな節目ですね。しっかりとした長い絵本のお話が聞けるようになってきたら、次は読み物へのチャレンジです。「絵本から読み物への橋渡し」のスタートは、親御さんの温かい声で読んでもらい、頭の中で想像を広げる体験を重ねていくところから。小学生になってもまだまだ、たくさん読んであげて下さいね。',
            'icon_img' => 'dummy007.png'
        ]);

    }
}
