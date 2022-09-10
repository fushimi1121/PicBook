<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchKeywordRequest;
use App\Models\Book;
use Illuminate\View\View;

class KeywordSearchController extends Controller
{
    /**
     * 検索結果の一覧ページ
     * @param SearchKeywordRequest $request
     * @return View
     */
    public function index(SearchKeywordRequest $request):View
    {
        #TODO: ②非同期処理によりbooksテーブルからキーワード表示する
        $keyword = $request->get('keyword');

        $query = Book::query();

        if(!empty($keyword)){
            //ex)input->"バム　ケロ"
            $spaceConvert = mb_convert_kana($keyword, 's');
            //ex)input->"バム ケロ"
            $keywordToArray = preg_split('/[\s,]+/', $spaceConvert, -1, PREG_SPLIT_NO_EMPTY);
            //ex)input->"[バム,ケロ]"
            //SQL文
            //SELECT DISTINCT * FROM books
            //WHERE (title, body) LIKE $keyword%
            foreach($keywordToArray as $value) {
                $query->orWhere('title', 'like', "%{$value}%")
                    ->orWhere('body', 'like', "%{$value}%");
            }
        }
        $books = $query->with(['authors','publisher'])
            ->select('books.*')
            ->distinct()
            ->get();


        return view('books.index', compact('keyword','books'));
    }
}
