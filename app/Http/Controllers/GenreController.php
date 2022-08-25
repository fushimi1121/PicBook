<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show(int $id)
    {
        $genre = Genre::with(['small_genres'])->find($id);
        return view('genres.show',compact('genre'));
    }
}
