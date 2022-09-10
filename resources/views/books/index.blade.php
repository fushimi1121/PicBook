@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div>
            <h3>検索キーワード：{{$keyword}}</h3>
            <h6>検索件数：{{$books->count()}}件</h6>
        </div>
        <hr>
        <div class="row w-100">
            @foreach($books as $book)
                <div class="col-3">
                    <a href="{{ route('books.show',$book->id) }}"><!--絵本詳細ページへのリンク-->
                        <img src="{{ asset('img/book/'.$book->cover_img)}}" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-2">
                                {{$book->title}}<br>
                                <label>
                                    @foreach($book->authors as $author)
                                        {{$author->name}}
                                    @endforeach
                                </label><br>
                                <label>
                                        {{$book->publisher->name}}<br>
                                </label>
                            </p>
                            <button type="button" class="btn btn-outline-secondary">カテゴリ</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
