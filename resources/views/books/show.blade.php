@extends('layouts.app')
@section('content')
    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">
        <!-- banner -->
        <section class="sb-banner sb-banner-xs sb-banner-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title">
                                <h1 class="sb-h2">Detail / 絵本プロフィール</h1>
                                <ul class="sb-breadcrumbs">
                                    <li><a href="home-1.html">Home</a></li>
                                    <li><a href="shop-1.html">Shop</a></li>
                                    <li><a href="#.">Product</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- product -->
        <section class="sb-p-90-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                            <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="cover_img">
                            <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                            <!-- button -->
                            <a data-fancybox="menu" data-no-swup href="{{ asset('img/book/'.$book->cover_img)}}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                            <span class="sb-icon">
                                <img src="https://nureyon.com/sample/13/magnifying_glass-11-p2.svg?1604368128" alt="icon">
                            </span>
                            </a>
                            <!-- button end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sb-product-description sb-mb-90">
                            <div class="sb-price-frame sb-mb-30">
                                <h3>{{$book->title}}</h3>
                                <div class="sb-price"><sub>{{ $book->age }}</sub></div>
                            </div>
                            <p class="star-rate">{{ $starRate }}（レビュー平均：{{ $reviewAvg }}点）</p>
                            <p class="sb-text sb-mb-30">{{ $book->body }}</p>
                            <h4 class="sb-mb-10">この絵本に関係するタグ一覧</h4>
                            <ul class="sb-keywords">
                                <!-- ここに各本に付されたsmall_genreタグを掲載する※現状はダミー-->
                                @foreach($book->smallGenres as $smallGenre)
                                    <li><a href="#.">{{$smallGenre->name}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="sb-keywords sb-mb-25">
                                <li><a href="#.">おはなし</a></li>
                                <li><a href="#.">なかよく</a></li>
                                <li><a href="#.">お料理</a></li>
                                <li><a href="#.">おさんぽ</a></li>
                            </ul>
                            <hr>
                            <div class="row">
                                <div class="col-5">
                                    <a href="product.html" class="sb-btn sb-ppc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg">
                                    </span>
                                        <span>購入する</span>
                                    </a>
                                </div>
                                <div class="col-5">
                                    <a href="product.html" class="sb-btn sb-ppc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg">
                                    </span>
                                        <span>借りる</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter -->
{{--                <div class="sb-filter">--}}
{{--                    <a href="#." data-filter=".sb-ingredients-tab" class="sb-filter-link sb-active">基本情報</a>--}}
{{--                    <a href="#." data-filter=".sb-details-tab" class="sb-filter-link">内容紹介</a>--}}
{{--                    <a href="#." data-filter=".sb-reviews-tab" class="sb-filter-link">レビュー</a>--}}
{{--                </div>--}}
                <!-- filter end -->
                <hr>
                <div class="sb-group-title">
                    <div class="sb-left">
                        <h3 class="sb-mb-30">絵本の概要</h3>
                    </div>
                </div>
                <div class="">
                    <div class="sb-grid-sizer"></div>
                    <div class="">
                        <div class="sb-tab">
                            <ul class="sb-list">
                                <li><b>作品名：</b><span>{{ $book->title }}</span></li>
                                <li><b>著者：</b><span>@foreach($book->authors as $author){{$author->name}} @endforeach</span></li>
                                <li><b>出版社：</b><span>{{ $book->publisher->name }}</span></li>
                                <li><b>ISBN：</b><span>{{ $book->isbn_13 }}</span></li>
                                <li><b>価格（税込）：</b><span>￥ {{ $book->price }}-</span></li>
                                <li><b>発行日：</b><span>{{ $book->released_at }}</span></li>
                                <li><b>対象：</b><span>{{ $book->age }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="sb-group-title">
                        <div class="sb-left">
                            <h3 class="sb-mb-30">内容紹介</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="align-items-center">
                            <div class="col-lg-8">
                            <h4 class="mb-3">出版社による紹介</h4>
                            <p class="sb-text sb-mb-15">{{ $book->body }}</p>
                        </div>
                            <div class="col-lg-8">
                                <h4 class="mb-3">内容サンプル</h4>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="sb-mb-90">
                                            <div class="sb-author-panel">
                                                <div class="sb-suptitle"><span>『{{ $book->title }}』より抜粋</span></div>
                                            </div>
                                            <div class="sb-post-cover sb-mb-30"><img src="{{ asset('img/ui/inner_dummy.jpeg')}}" alt="Cover"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section class="sb-short-menu sb-p-0-90 sb-mb-30">
            <div class="container">
                <div class="sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h3 class="sb-mb-30">この絵本のレビューについて</h3>
                    </div>
                </div>
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h4 class="mb-3">レビューをチェックする</h4>
                    </div>
                    <div class="sb-right">
                        <!-- slider navigation -->
                        <div class="sb-slider-nav">
                            <div class="sb-prev-btn sb-reviews-prev"><i class="fas fa-arrow-left"></i></div>
                            <div class="sb-next-btn sb-reviews-next"><i class="fas fa-arrow-right"></i></div>
                        </div>
                        <!-- slider navigation end -->
                    </div>
                </div>
                <div class="swiper-container sb-reviews-slider sb-mb-30">
                    <div class="swiper-wrapper">
                        @foreach($book->reviews as $review)
                            <div class="swiper-slide">
                                <div class="sb-review-card">
                                    <div class="sb-review-header sb-mb-15">
                                        <h4 class="sb-mb-15">{{ $review->title }}</h4>
                                        <p>
                                        </p>
                                    </div>
                                    <p class="sb-text sb-mb-15">{{ $review->article }}</p>
                                    <div class="sb-author-frame">
                                        <div class="sb-avatar-frame">
                                            <img src="{{ asset('img/ui/icons/mam_icon.png')}}" alt="relation">
                                        </div>
                                        <h4>{{ $review->name }} ({{$review->age_number}}・{{$review->relationship_number}})</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne headingThree">
                            <h5 class="mb-0">
                                <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="sb-left">
                                        <h3>レビューを投稿する　▼</h3>
                                    </div>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="sb-answer sb-text">
                                    <form method="POST" action="{{route('book.reviews.create')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="reviewer">ニックネーム</label>
                                                <input type="text" class="form-control" id="reviewer" name="name" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="age">年代</label>
                                                    <select class="sb-bar form-control" id="age" name="age_number" placeholder="First name">
                                                        <span class="sb-bar"></span>
                                                        @foreach (Config::get('review.age') as $key => $val)
                                                            <option value="{{ $key }}">{{ $val }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="relationship">お子様とのご関係</label>
                                                    <select class="sb-bar form-control" id="relationship" name="relationship_number">
                                                        <span class="sb-bar"></span>
                                                        @foreach (Config::get('review.relationship') as $key => $val)
                                                            <option value="{{ $key }}">{{ $val }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="prefecture">お住まい</label>
                                                    <select class="sb-bar form-control" id="prefecture">
                                                        <span class="sb-bar"></span>
                                                        @foreach (Config::get('review.prefecture') as $key => $val)
                                                            <option value="{{ $key }}">{{ $val }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label for="evaluation">★５点満点で評価★</label>
                                                    <select class="sb-bar form-control" id="evaluation" name="evaluation">
                                                        <span class="sb-bar"></span>
                                                        @foreach (Config::get('review.evaluation') as $key => $val)
                                                            <option value="{{ $key }}">{{ $val }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-10">
                                                <label for="review-title">タイトル</label>
                                                <input type="text" class="form-control" id="review-title" placeholder="レビューの題名（３０文字まで）" name="title" required>
                                            </div>
                                            <div class="col-lg-12 mt-3">
                                                <label for="article">レビュー本文</label>
                                                <textarea class="form-control" id="article" placeholder="内容（300文字以内）" name="article" required></textarea>
                                            </div>
                                        </div>
                                        <!-- button -->
                                        <input type="hidden" value="{{ $book->id }}" name="id">
                                        <button type="submit" class="sb-btn mt-3">
                                            <span class="sb-icon">
                                                <img src="{{ asset('img/ui/icons/pencil_24.png')}}" alt="">
                                            </span>
                                            <span>投稿</span>
                                        </button>
                                        <!-- button end -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <!-- product end -->
        <!-- short menu -->
        <section class="sb-short-menu sb-p-0-90">
            <div class="container mt-5">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h3 class="sb-mb-30">同じ作者の作品を見る</h3>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- slider navigation -->
                        <div class="sb-slider-nav">
                            <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-arrow-left"></i></div>
                            <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-arrow-right"></i></div>
                        </div>
                        <!-- slider navigation end -->
                    </div>
                </div>
                <div class="swiper-container sb-short-menu-slider-4i">
                    <div class="swiper-wrapper">
                        @foreach($book->authors as $author)
                            @foreach($author->books as $book)
                                <div class="swiper-slide">
                                    <div class="sb-menu-item">
                                        <a href="shop-list-1.html" class="sb-cover-frame">
                                            <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="cover_img">
                                        </a>
                                        <div class="sb-card-tp">
                                            <h4 class="sb-card-title"><a href="shop-list-1.html">{{$book->title}}</a></h4>
                                            <div class="sb-price"><sub>$</sub> 14</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
