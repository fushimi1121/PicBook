<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['authors','publisher'])->get();
        //n+1を防ぐ
        return view('books.index',compact('books'));
    }

    public function show(int $id)
    {
        $book = Book::find($id);
        if(is_null($book)){
            abort(404);
        }
        $reviews = $book->reviews()->get();

        return view('books.show', compact('book', 'reviews'));
    }
}
