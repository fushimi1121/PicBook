@extends('layouts.app')
@section('content')
    <main>
        <div class="container mt-4" style="display: grid; justify-content: center; text-align: center">
            <img src="{{ asset('img/banner/'.$topic->img)}}" alt="{{$topic->title}}" class="img-thumbnail">
            <h3 class="pt-5">{{ $topic->title }}</h3>
            <div>
                <p>{{ $topic->introduction }}</p>
            </div>
        </div>
        <hr>
        <!-- コラムに関連する絵本一覧 -->
        <section class="sb-menu-section sb-p-90-60">
            <div class="sb-bg-1">
                <div></div>
            </div>
            <div class="container">
                <div class="sb-mb-60">
                    <h2 class="sb-cate-title sb-mb-15">コラムに関連する絵本</h2>
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
@endsection
