@extends('layouts.app')
@section('content')
    <main>
        <div class="container mt-4" style="display: grid; justify-content: center; text-align: center">
            <img src="{{ asset('img/banner/'.$topic->img)}}" alt="{{$topic->title}}" class="img-thumbnail">
            <h2 class="pt-5">{{ $topic->title }}</h2>
            <div>
                <p>{{ $topic->introduction }}</p>
            </div>
        </div>
        <hr>
        <div>
            <h6>
               <!--{{$topic->body}}-->
               <!--$topic->bodyはマイグレーション忘れでまだカラムなし-->
            </h6>
        </div>
        <hr>
        <h5>このコラムに関わりのある本はこちら</h5>
        <div class="container mt-4">
            <div class="row w-100">
                @foreach($books as $book)
                    <div class="col-3">
                        <a href="#">
                            <img src="{{ asset('img/book/'.$book->cover_img ) }}" class="img-thumbnail">
                        </a>
                        <div class="row">
                            <div class="col-12">
                                <p class="mt-2">
                                    {{ $book->title }}<br>
                                    <label>
                                    </label><br>
                                    <label>
                                        @foreach($book->authors as $author)
                                            {{ $author->name }}<br>
                                        @endforeach
                                    </label>
                                    <label>
                                        {{$book->publisher->name}}<br>
                                    </label>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
