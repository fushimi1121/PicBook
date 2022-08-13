@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row w-100">
            @foreach($books as $book)
                <div class="col-3">
                    <a href="#"><!--絵本詳細ページへのリンク-->
                        <img src="{{ asset('img/noimage.png')}}" class="img-thumbnail">
                    </a>
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-2">
                                {{$book->title}}<br>
                                <label>{{ $book->author->name }}</label>
                                <label>{{ $book->publisher->name }}</label>
                            </p>
                            <button type="button" class="btn btn-outline-secondary">カテゴリ</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
