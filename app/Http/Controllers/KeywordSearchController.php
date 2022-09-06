<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchKeywordRequest;
use App\Models\Book;

class KeywordSearchController extends Controller
{
    public function index(SearchKeywordRequest $request)
    {
        $keyword = $request->input('keyword');

        $query = Book::query();

        if(!empty($keyword)){
            //ex)input->"バム　ケロ"
            //$spaceConvert = mb_convert_kana($keyword, 's');
            //ex)input->"バム ケロ"
            //$keywordToArray = preg_split('/[\s,]+/', $spaceConvert, -1, PREG_SPLIT_NO_EMPTY);
            //ex)input->"[バム,ケロ]"
            //SQL文
            //SELECT DISTINCT * FROM books
            //WHERE (title, body) LIKE $keyword%
            foreach($keyword as $value) {
                $query->where('title', 'like', "%{$value}%")
                    ->orWhere('body', 'like', "%{$value}%");
            }
        }
        $books = $query->with(['authors','publisher'])
            ->select('books.*')
            ->distinct()
            ->get();

        return view('books.index', compact('books','keyword'));
    }
}
