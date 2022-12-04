<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Topic;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $topics = Topic::orderBy('created_at', 'asc')->take(5)->get();
        $events = Event::all();

//        ↓インスタAPIに関する記述↓
        $instagramItems = [];
        // インスタAPIを使用するためのIDとトークンを設定
        $instagramBusinessId = config('services.instagram.business_id');
        $instagramAccessToken = config('services.instagram.access_token');
        // 取得条件や項目などを指定
        $userName = 'manabook.online';
        $query = "business_discovery.username({$userName}){id,followers_count,media_count,media{id,caption,media_url,timestamp,permalink}}";

        try {
            // インスタ投稿を取得する
            $target_url = "https://graph.facebook.com/v12.0/{$instagramBusinessId}?fields={$query}&access_token={$instagramAccessToken}";
            $json = file_get_contents($target_url);
            $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
            $result = json_decode($json, true);

            foreach ($result['business_discovery']['media']['data'] as $item) {
                $instagramItems[] = !empty($item['thumbnail_url']) ? [
                    'img' => $item['thumbnail_url'],
//                    'caption' => $item['caption'],
                    'link' => $item['permalink'],
                ] : [
                    'img' => $item['media_url'],
//                    'caption' => $item['caption'],
                    'link' => $item['permalink'],
                ];
            }
        } catch (\Exception $exception) {
            // ビジネスアカウント・クリエイターアカウントでない場合は取得できない
            Log::error($exception->getMessage());
        }

        return view('top.index',compact('genres','topics','events','instagramItems'));
    }

}
