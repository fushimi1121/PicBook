<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['authors', 'publisher'])->get();
        //n+1を防ぐ
        return view('books.index', compact('books'));
    }

    public function show(int $id)
    {
        $book = Book::with(['smallGenres', 'reviews', 'authors'])->find($id);
        if (is_null($book)) {
            abort(404);
        }


        $reviewAvg = round(Review::query()
            ->avg('evaluation'), 1);

        $starRate = $this->starRate($reviewAvg);

        return view('books.show', compact('book', 'reviewAvg','starRate'));
    }

    private function starRate($reviewAvg)
    {
        if ($reviewAvg <= 1.5) {
            return '★☆☆☆☆';
        }
        if($reviewAvg > 1.5 && $reviewAvg <= 2.5) {
            return '★★☆☆☆';
        }
        if($reviewAvg > 2.5 && $reviewAvg <= 3.5) {
            return '★★★☆☆';
        }
        if($reviewAvg > 3.5 && $reviewAvg <= 4.5) {
            return '★★★★☆';
        }
        return '★★★★★';
    }

}
