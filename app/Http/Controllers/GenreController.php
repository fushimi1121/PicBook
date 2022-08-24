<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show(Genre $genre)
    {
        return view('genre.show')
    }
}
