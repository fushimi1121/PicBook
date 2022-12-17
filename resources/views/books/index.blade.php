@extends('layouts.app')
@section('content')
    <section class="sb-about-text sb-p-90-0">
        <div class="container mt-5">
            <div>
                <h3>検索キーワード：{{$keyword}}</h3>
                <h6 class="mt-2">検索件数：{{$books->count()}}件</h6>
            </div>
        </div>
    </section>
    <hr>
    <section class="sb-menu-section sb-p-90-60">
        <div class="sb-bg-1">
            <div></div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($books as $book)
                    <div class="col-lg-3">
                        <div class="sb-menu-item sb-mb-30">
                            <a href="{{route('books.show',$book->id)}}" class="sb-cover-frame">
                                <img src="{{ env('AWS_BUCKET')}}books/cover/{{$book->cover_img}}.png" alt="{{$book->title}}">
                            </a>
                            <div class="sb-card-tp">
                                <h4 class="sb-card-title"><a href="product.html">{{$book->title}}</a></h4>
                                <div class="sb-price">
                                    <img src="{{ env('AWS_BUCKET')}}books/ageIcon/{{Config::get('age.ageIcon')[$book->age]}}.png" alt="{{$book->age}}" style=" height: 100%;">
                                </div>
                            </div>
                            <div class="sb-description">
                                <p class="sb-text sb-mb-15">
                                    著者：
                                    <span>
                                        @foreach($book->authors as $author)
                                            {{$author->name}}
                                        @endforeach
                                    </span>
                                    <br>
                                    出版社：
                                    <span>
                                        {{$book->publisher->name}}
                                    </span>
                                </p>
                            </div>
                            <div class="sb-card-buttons-frame">
                                <!-- button -->
                                <a href="product.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                <span class="sb-icon">
                                    <img src="img/ui/icons/arrow.svg" alt="icon">
                                </span>
                                </a>
                                <!-- button end -->
                                <!-- button -->
                                <a href="https://www.amazon.co.jp/gp/search?ie=UTF8&tag=manabook0a-22&linkCode=ur2&linkId=55ed00a5c9fbfd9eeb82a6a4918bd593&camp=247&creative=1211&index=books&keywords={{$book->title}}" target="_blanc" data-no-swup class="sb-btn sb-atc">
                                <span class="sb-icon">
                                    <img src="img/ui/icons/cart.svg" alt="icon">
                                </span>
                                    <span class="sb-add-to-cart-text">Go Shopping</span>
                                    <span class="sb-added-text">Added</span>
                                </a>
                                <!-- button end -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $books->links() }}
        </div>
    </section>
@endsection
