<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchSmallEventRequest;
use App\Models\Book;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(int $id, SearchSmallEventRequest $request)
    {
        $event = Event::with(['small_events'])->find($id);
        abort_if(is_null($event), 404);

        $smallEventIds = $request->get('smallEventIds');
        if (is_null($smallEventIds)){
            $smallEventIds = $event->small_events->pluck('id')->toArray();
        }

        $books = Book::query()
            ->with(['authors','publisher'])
            ->join('book_small_events', 'books.id', '=', 'book_small_events.book_id')
            ->join('small_events', 'book_small_events.small_event_id', '=', 'small_events.id')
            ->whereIn('small_event_id', $smallEventIds)
            ->select('books.*')
            ->distinct()
            ->get();

        return view('events.show', compact('event', 'books'));
    }
}
