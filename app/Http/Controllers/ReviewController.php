<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use Illuminate\Http\Request;

use function PHPUnit\Framework\directoryExists;

class ReviewController extends Controller
{

     public function store(Request $request, int $id)
    {
        $book = Book::find($id);

        $review = new Review();
        $review->book_id = $book->id;
        $review->evaluation = $request->input('evaluation');
        $review->title = $request->input('title');
        $review->article = $request->input('article');
        $review->name = $request->input('name');
        $review->age_number = $request->input('age_number');
        $review->relationship_number = $request->input('relationship_number');
        $review->save();

        return redirect()->route('books.show', $book);

    }
}
