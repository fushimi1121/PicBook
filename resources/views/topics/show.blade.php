@extends('layouts.app')
@section('content')
    <main>
        <!-- banner -->
        <section class="sb-banner sb-banner-xs sb-banner-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title">
                                <h3 class="sb-h3">{{$topic->title}}</h3>
                                <a href="{{route('topics.index')}}" class="sb-btn">
                                <span class="sb-icon">
                                    <img src="{{ asset('img/ui/icons/news_icon.png')}}" alt="news">
                                </span>
                                    <span>All Columns</span>
                                </a>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->
        <!-- publication -->
        <section class="sb-publication sb-p-90-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="sb-mb-90">
                            <div class="sb-author-panel">
                                <div class="sb-author-frame">
                                    <h4></h4>
                                </div>
                                <div class="sb-suptitle"><span>{{$topic->created_at }}</div>
                            </div>
                            <div class="sb-post-cover sb-mb-30">
                                <img src="{{ env('AWS_BUCKET').$topic->img}}" alt="{{$topic->title}}">
                            </div>
                            <p class="sb-text sb-mb-15">
                                {{$topic->introduction}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- publication end -->

        <!-- コラムに関連する絵本 -->
        <section class="sb-short-menu sb-p-0-90">
            <div class="container mt-5">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="columns">Involved Books</h2>
                        <h6 class="sb-mb-25">ーこのコラムに関連する絵本</h6>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- slider navigation -->
                        <div class="sb-slider-nav">
                            <div class="sb-prev-btn sb-blog-prev">⬅︎</div>
                            <div class="sb-next-btn sb-blog-next">➡︎</div>
                        </div>
                        <!-- slider navigation end -->
                    </div>
                </div>
                <div class="swiper-container sb-short-menu-slider-4i">
                    <div class="swiper-wrapper">
                        @foreach($books as $book)
                            <div class="swiper-slide">
                                <div class="sb-menu-item">
                                    <a href="{{ route('books.show',$book->id) }}" class="sb-cover-frame">
                                        <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="cover_img">
                                    </a>
                                    <div class="sb-card-tp">
                                        <h4 class="sb-card-title"><a href="shop-list-1.html">{{$book->title}}</a></h4>
                                        <div class="sb-price"><sub>$</sub> 14</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- popular end -->
    </main>
@endsection
