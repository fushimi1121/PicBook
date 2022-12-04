<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Book;
use App\Http\Requests\SearchSmallGenreRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class GenreController extends Controller
{
    /**
     * Topページから各教育テーマに応じた絵本一覧を開く
     * @param int $id
     * @param SearchSmallGenreRequest $request
     * @return Application|Factory|View
     */
      function show(int $id, SearchSmallGenreRequest $request):Application|Factory|View
    {
        $genre = Genre::with(['small_genres'])->find($id);
        abort_if(is_null($genre), 404);

        $smallGenreIds = $request->get('smallGenreIds');
        if (is_null($smallGenreIds)){
            $smallGenreIds = $genre->small_genres->pluck('id')->toArray();
        }

//        取得したい内容をまず日本語で整理する
//        特定のsmall_genresが付与されている書籍をダブりなく全て取得
//        条件　JOINで連結して取得したsmall_genreのidカラムがviewのcheckboxで入力したidと一致する本を取得する

        $books = Book::query()
            ->with(['authors','publisher'])
            ->join('book_small_genres', 'books.id', '=', 'book_small_genres.book_id')
            ->join('small_genres', 'book_small_genres.small_genre_id', '=', 'small_genres.id')
            ->whereIN('small_genre_id', $smallGenreIds)
            ->select('books.*')
            ->distinct()
            ->paginate(10);

        return view('genres.show', compact('genre', 'books'));
    }
}
