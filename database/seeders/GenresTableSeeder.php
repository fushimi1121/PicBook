<?php

namespace Database\Seeders;

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
            'name_en' => 'SCIENCE',
            'name_ja' => '科学と探究',
            'summary' => 'どうなってるの？ワクワクが目を覚ます。',
            'introduction' => 'インターネットが高度に発達した現代社会において、大抵のことは検索すればすぐに答えがわかります。そんな世の中だからこそ、あらゆる世界の不思議を覗き見ながら、子供たちの興味と好奇心を刺激することが大切です。そこにどんなメカニズムが働くのか、子どもたちが理解を深めその過程を楽しむことができれば、探究することの楽しさに気付いてもらえるはずです。',
            'icon_img' => 'genre/icon_img/1.png',
            'image'  => 'genre/image/1.jpeg'
        ]);
        Genre::Create([
            'name_en' => 'CULTURE',
            'name_ja' => '歴史と文化',
            'summary' => '違いを知ると、きっと世界が広がる。',
            'introduction' => 'グローバルな社会では、日本人としてのアイデンティティーをしっかり持った上で、文化の異なる人々と交流することが必要とされています。アイデンティティーとは生まれ育った国の歴史文化に触れたり、異国文化との出逢いによる柔らかなカルチャーショックによって育まれます。自国の文化の素晴らしさを再認識するとともに、その文化を大切にする心や自国への誇りを持つことを目指します。',
            'icon_img' => 'genre/icon_img/2.png',
            'image'  => 'genre/image/2.jpeg'
        ]);
        Genre::Create([
            'name_en' => 'CREATIVITY',
            'name_ja' => '想像と創造',
            'summary' => 'ユーモア溢れる表現が、子どもの個性をグッと伸ばす。',
            'introduction' => '私たちが生きる上でぶつかる課題には、必ずしも正しい答えがある訳ではありません。答えが一つではない状況においても解決策を生み出し、実現していかなければならない場面もあるでしょう。IT技術が急速に発達する昨今では今まで以上に複雑で価値観が多様化した世界になることが予想され、そのような社会ではこれまでの常識や既存の成功法則は通用しなくなっていきます。創造力はそんな世界に向き合い新たな価値を生み出すのに欠かせないのです。',
            'icon_img' => 'genre/icon_img/3.png',
            'image'  => 'genre/image/3.jpeg'
        ]);
        Genre::Create([
            'name_en' => 'COMMUNICATE',
            'name_ja' => '人と人',
            'summary' => '力を合わせると、いつもよりもっと頑張れる。',
            'introduction' => '人と人とのつながりにおいて必要不可欠となる「コミュニケーション」。現代社会においては、他者とのコミュニケーションを取る機会が格段に減っている傾向にあるようです。少子化や核家族化という社会背景に加え、個を大事にする考え方が強まっているからかもしれません。しかし社会に出ればさまざまなシーンでコミュニケーションを取る力が重要視されていきます。だからこそ、子どもの頃から人との関わり方を学ぶことが大切です。',
            'icon_img' => 'genre/icon_img/4.png',
            'image'  => 'genre/image/4.jpeg'
        ]);
        Genre::Create([
            'name_en' => 'ECONOMY',
            'name_ja' => '金融と経済',
            'summary' => 'お金を学べば、扱い方が今日から変わる。',
            'introduction' => '日本では近年まで、子供へのお金の教育はタブー視されてきました。しかし、現代社会ではお金と関わらずに生活することはできません。 生きるスキルとしてお金に対する正しい知識や判断力（金融リテラシー）が必要です。お金の管理や経済の流れについて学ぶことは、賢く強く生きる術として確かな財産になるでしょう。',
            'icon_img' => 'genre/icon_img/5.png',
            'image'  => 'genre/image/5.jpeg'
        ]);
        Genre::Create([
            'name_en' => 'SUSTAINABLE',
            'name_ja' => '持続と発展',
            'summary' => '美しい世界を守るヒーローに、きっとなれる。',
            'introduction' => '今、世界を上げてSDGsの動きが取り組まれています。SDGsは「持続可能な開発目標」のことで、簡単に言うと「世界中にある環境問題・差別・貧困・人権問題といった課題を、世界のみんなで2030年までに解決していこう」という働きかけのこと。これからの世の中は、限りある資源・美しい自然環境を守り、かつ誰一人取り残されることなく未来に向けてどう発展するかが課題となるでしょう。',
            'icon_img' => 'genre/icon_img/6.png',
            'image'  => 'genre/image/6.jpeg'
    ]);
    }
}
