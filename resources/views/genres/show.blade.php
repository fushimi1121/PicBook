@extends('layouts.app')
@section('content')
    <section class="sb-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- main title -->
                    <div class="sb-main-title-frame">
                        <div class="sb-main-title">
                            <h2 class="sb-mb-30">{{$genre->name_en}}</h2>
                            {{--                                {{ $genre->name_en }}--}}
                            <h3 class="sb-mb-30">〜{{$genre->name_ja}}〜</h3>
                            {{--                                {{ $genre->name_ja }}--}}
                            <p class="sb-text sb-text-lg sb-mb-30">{{$genre->introduction}}</p>
                            <!-- button -->
                            <a href="#book-list" class="sb-btn sb-btn-2">
                                    <span class="sb-icon">
                                        <img src="{{ asset('img/ui/icons/book_icon.png')}}" alt="book">
                                    </span>
                                <span>▼ Let's find your best book ▼</span>
                            </a>
                            <!-- button end -->
                        </div>
                    </div>
                    <!-- main title end -->
                </div>
                <div class="col-lg-6">
                    <div class="sb-illustration-1-404">

                        <img src="{{ env('AWS_BUCKET').$genre->image}}" alt="{{$genre->name_en}}" class="sb-man">
                        <div class="sb-cirkle-1"></div>
                        <div class="sb-cirkle-2"></div>
                        <div class="sb-cirkle-3"></div>
                        <div class="sb-cirkle-4"></div>
                        <div class="sb-cirkle-5"></div>
                        <img src="{{ asset('img/illustrations/3.svg')}}" alt="phones" class="sb-pik-1">
                        <img src="{{ asset('img/illustrations/1.svg')}}" alt="phones" class="sb-pik-2">
                        <img src="{{ asset('img/illustrations/2.svg')}}" alt="phones" class="sb-pik-3">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--試作部分↑--}}
    <hr>
    <section>
        <div class="container mt-4">
            <div class="sb-mb-60">
                <h2 class="sb-cate-title sb-mb-15">さらに細かいタグで絞る</h2>
            </div>
            <form method="GET" action="{{route('genres.show',$genre->id)}}" style="display:flex; flex-wrap: wrap;">
                @foreach($genre->small_genres as $small_genre)
                    <div class="btn-group-toggle mt-2 mr-1" data-toggle="buttons">
                        <label class="btn btn-warning" for="small-event-btn-{{$small_genre->id}}">
                            <input type="checkbox" autocomplete="off" id="small-event-btn-{{$small_genre->id}}"
                                   name="smallGenreIds[]" value="{{$small_genre->id}}">{{$small_genre->name}}
                        </label>
                    </div>
                @endforeach
                <br>
                <div>
                    <button type="submit" class="btn btn-danger mt-5" style="display:flex; flex-direction: row;">絞り込み</button>
                </div>
            </form>
        </div>
    </section>
    <hr>

    <section class="sb-menu-section sb-p-90-60">
        <div class="container">
            <div class="sb-mb-60">
                <h2 class="sb-cate-title sb-mb-15">絵本一覧</h2>
            </div>
            <div class="row">
                @foreach($books as $book)
                    <div class="col-lg-3">
                        <a href="{{route('books.show',$book->id)}}" class="sb-menu-item sb-mb-30">
                            <div class="sb-cover-frame">
                                <img src="{{ env('AWS_BUCKET')}}books/cover/{{$book->cover_img}}.png" alt="{{$book->title}}">
                            </div>
                            <div class="sb-card-tp">
                                <h4 class="sb-card-title">{{$book->title}}</h4>
                                <div class="sb-price">
                                    <img src="{{ env('AWS_BUCKET')}}books/ageIcon/{{Config::get('age.ageIcon')[$book->age]}}.png" alt="{{$book->age}}" style=" height: 100%;">
                                </div>
                            </div>
                            <div class="sb-description">
                                <label class="sb-text sb-mb-15">
                                    著：@foreach($book->authors as $author)
                                        {{ $author->name }}
                                    @endforeach
                                </label>
                                <label class="sb-text sb-mb-15">
                                    出版社：{{$book->publisher->name}}<br>
                                </label>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $books->links() }}
            </div>
        </div>
    </section>
    <!-- menu section 1 end -->
@endsection
