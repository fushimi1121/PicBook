<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Topic;
use App\Models\Event;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        $topics = Topic::orderBy('created_at', 'asc')->take(5)->get();
        $events = Event::all();

        return view('top.index',compact('genres','topics','events'));
    }

}
