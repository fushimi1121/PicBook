<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Book;
use App\Http\Requests\CreateReviewRequest;

class ReviewController extends Controller
{

    public function create(CreateReviewRequest $request)
    {
        $book = Book::find($request->post('id'));
        $evaluation = $request->post('evaluation');

        if (is_null($book)) {
            abort(404);
        }

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
