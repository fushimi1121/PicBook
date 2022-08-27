@extends('layouts.app')
@section('content')
    <main>
        <div class="container mt-4" style="display: grid; justify-content: center; text-align: center">
            <img src="{{ asset('img/icon_img/'.$genre->icon_img)}}" alt="{{$genre->name}}" class="img-thumbnail">
            <h2 class="pt-5">{{ $genre->name }}</h2>
            <div>
                <p>{{ $genre->introduction }}</p>
            </div>
        </div>
        <hr>
        <div class="container mt-4">
        <h5>更に細かいテーマから探す</h5>
            <form method="POST" name="genre_search">
                @foreach($genre->small_genres as $small_genre)
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off" name="genre_toggles[]" value="{{$small_genre->id}}">
                    <label class="btn btn-outline-primary" for="btn-check-outlined">{{$small_genre->name}}</label>
                @endforeach
                <br><button type="submit" class="btn btn-success mt-5">絞り込み</button>
            </form>


        </div>
        <hr>
        <div class="container mt-4">
            <div class="row w-100">
                <div class="col-3">
                    <a href="#">
                        <img src="#" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-2">
                                title<br>
                                <label>

                                </label><br>
                                <label>
                                    name<br>
                                </label>
                            </p>
                            <button type="button" class="btn btn-outline-secondary">カテゴリ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
