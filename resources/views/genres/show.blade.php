@extends('layouts.app')
@section('content')
    <main>
        <section class="sb-banner sb-banner-xs sb-banner-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title">
                                <h1 class="sb-h2">{{ $genre->name }}</h1>
                                <div style="
                                <img src="{{asset('img/genre_icon/'.$genre->icon_img)}}">
                                <p class="mt-3">{{ $genre->introduction }}</p>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="sb-banner sb-banner-xs sb-banner-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title">
                                <h3 class="sb-h3">更に細かいテーマから探す</h3>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>

        <form method="GET" action="{{ route('genres.show',$genre->id) }}">
            @foreach($genre->small_genres as $small_genre)
                <input type="checkbox" class="btn-check sb-keywords" id="small-genre-btn-{{ $small_genre->id }}" name="smallGenreIds[]" value="{{ $small_genre->id }}">
                <label class="btn btn-outline-primary" for="small-genre-btn-{{ $small_genre->id }}">{{ $small_genre->name }}</label>
            @endforeach
            <br>
                <button type="submit" class="btn btn-success mt-5">絞り込み</button>
        </form>
        <hr>
        <!-- banner -->
        <!-- banner end -->
        <!-- menu section 1 -->
        <section class="sb-menu-section sb-p-90-60">
            <div class="sb-bg-1">
                <div></div>
            </div>
            <div class="container">
                <div class="sb-mb-60">
                    <h2 class="sb-cate-title sb-mb-15">絵本一覧</h2>
                </div>
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-lg-3">
                            <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                                <div class="sb-cover-frame">
                                    <img src="{{ asset('img/book/'.$book->cover_img ) }}" alt="product">
                                </div>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">{{$book->title}}</h4>
                                    <div class="sb-price">▲</div>
                                </div>
                                <div class="sb-description">
                                    <label class="sb-text sb-mb-15">
                                        著：@foreach($book->authors as $author)
                                            {{ $author->name }} /
                                        @endforeach
                                    </label>
                                    <label class="sb-text sb-mb-15">
                                        出版社：{{$book->publisher->name}}<br>
                                    </label>
                                    <ul class="sb-stars">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!-- menu section 1 end -->
@endsection
