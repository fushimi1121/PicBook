<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'asc')->take(5)->get();
        return view('top.index',compact('topics'));
    }
}
