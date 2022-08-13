<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => '島田ゆか',
            'introduction' => '東京デザイン専門学校グラフィックデザイン科卒業。 パッケージデザインなどを経て、フリーに。 絵本に『バムとケロのにちようび』、 『バムとケロのそらのたび』、 『バムとケロのさむいあさ』、 『バムとケロのおかいもの』、 『バムとケロのもりのこや』、 『かばんうりのガラゴ』、 『うちにかえったガラゴ』（以下文溪堂）、 『かぞえておぼえるかずのえほん』（すずき出版）、 『ぶーちゃんとおにいちゃん』（白泉社）がある。 カナダ在住。',
            'img' => 'Author_155_113517',
        ]);
    }
}
