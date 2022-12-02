<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['authors', 'publisher'])->get();

        return view('books.index', compact('books'));
    }

    public function show(int $id)
    {
        $book = Book::with(['smallGenres', 'reviews', 'authors'])->find($id);
        if (is_null($book)) {
            abort(404);
        }
        $authors = $book->authors;
        $bookList = collect();
        foreach ($authors as $author) {
            $bookList = $bookList->merge($author->books);
        }
        $bookList = $bookList->unique('id')->filter(function ($value) use ($id) {
            return $value->id !== $id;
        });

        $reviewAvg = round(Review::query()
            ->avg('evaluation'), 1);

        $starRate = $this->starRate($reviewAvg);

//        $genre = Genre::query
//            ->join('small_genres', 'genre.id', '=', 'small_genres.genre_id')
//            ->join('book_small_genres', 'book_small_genres.small_genre_id', '=', 'small_genres.id')
//            ->join('books', 'book.id', '=', 'book_small_genres.book_id')
//
        return view('books.show', compact('book', 'reviewAvg', 'starRate', 'bookList'));
    }

    private function starRate($reviewAvg)
    {
        if ($reviewAvg <= 1.5) {
            return '★☆☆☆☆';
        }
        if ($reviewAvg > 1.5 && $reviewAvg <= 2.5) {
            return '★★☆☆☆';
        }
        if ($reviewAvg > 2.5 && $reviewAvg <= 3.5) {
            return '★★★☆☆';
        }
        if ($reviewAvg > 3.5 && $reviewAvg <= 4.5) {
            return '★★★★☆';
        }
        return '★★★★★';
    }

}
