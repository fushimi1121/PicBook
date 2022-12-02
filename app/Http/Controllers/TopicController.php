<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Topic;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class TopicController extends Controller
{
    /**
     *
     * @return Application|Factory|View
     */
    public function index():Application|Factory|View
    {
        $topics = Topic::query()
            ->orderBy('created_at','asc')
            ->get();
        return view('topics.index', compact('topics'));
    }
    /**
     * Topページから各コラムを開く＆関連する書籍一覧を開く
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(int $id):Application|Factory|View
    {
        $topic = Topic::find($id);
        abort_if(is_null($topic), 404);

//SQL
//SELECT books.* FROM books
//JOIN book_topic
//ON topic.id = books_topic.book_id
//JOIN topic
//ON  book_topic.topic_id = topic.id

        $books = Book::query()
            ->with(['authors','publisher'])
            ->join('book_topics', 'books.id', '=', 'book_topics.book_id')
            ->join('topics', 'book_topics.topic_id', '=', 'topics.id')
            ->where('topic_id','=',$topic->id)
            ->select('books.*')
            ->get();



        return view('topics.show',compact('topic','books'));

    }


}
