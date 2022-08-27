<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show(int $id)
    {
        $genre = Genre::with(['small_genres'])->find($id);
        //TODO: JOIN句で検索をを条件書く

        return view('genres.show', compact('genre'));
    }
}
