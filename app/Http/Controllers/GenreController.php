<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Http\Requests\SearchSmallGenreRequest;

class GenreController extends Controller
{
    public function show(int $id, SearchSmallGenreRequest $request)
    {
        $genre = Genre::with(['small_genres'])->find($id);
        // $idのGenreが存在しない場合は404
        abort_if(is_null($genre), 404);

        // small_genresの検索条件を取得
        $smallGenreIds = $request->get('smallGenreIds');

        // 検索条件が未設定の場合はgenreに属するsmall_genresのidをすべて取得
        if (is_null($smallGenreIds)) {
            $smallGenreIds = $genre->small_genres->pluck('id')->toArray();
        }

        // 表示する書籍を取得
        // 検索条件の指定がない場合はwhereInの第二引数がNullになるため、ジャンルに属する書籍がすべて取得される
        // 以下、発行されるクエリ
        // SELECT DISTINCT books.* From books
        // JOIN book_small_genres ON books.id = book_small_genres.book_id
        // JOIN small_genres ON book_small_genres.small_genre_id = small_genres.id
        // WHERE small_genre_id IN (検索条件のidをカンマ区切りで指定);
        $books = Book::query()
            ->with(['authors'])
            ->join('book_small_genres', 'books.id', '=', 'book_small_genres.book_id')
            ->join('small_genres', 'book_small_genres.small_genre_id', '=', 'small_genres.id')
            ->whereIn('small_genre_id', $smallGenreIds)
            ->select('books.*')
            ->distinct()
            ->get();

        return view('genres.show', compact('genre', 'books'));
    }
}
