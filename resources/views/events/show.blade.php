@extends('layouts.app')
@section('content')
    <section class="sb-about-text sb-p-90-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="sb-illustration-2 sb-mb-90">
                        <div class="sb-interior-frame">
                            <img src="{{ env('AWS_BUCKET').$event->img}}" alt="cover_img">
                        </div>
                        <div class="sb-cirkle-1"></div>
                        <div class="sb-cirkle-2"></div>
                        <div class="sb-cirkle-3"></div>
                        <div class="sb-cirkle-4"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center sb-mb-60">
                    <h2 class="sb-mb-60">{{$event->name}}<span class="h4"> ［ {{$event->supplement}} ］</span> </h2>
                    <h4 class="sb-mb-25">{{$event->summary}}</h4>
                    <p class="sb-text sb-mb-30">
                        {{$event->introduction}}
                    </p>
                    <a href="#book-list" class="sb-btn sb-btn-2">
                                    <span class="sb-icon">
                                        <img src="{{ asset('img/ui/icons/book_icon.png')}}" alt="book">
                                    </span>
                        <span>▼ Let's find your best book ▼</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <hr>
    {{--↓↓さらに細かいテーマで探す↓↓--}}
    <section>
        <div class="container mt-4">
            <div class="sb-mb-60">
                <h2 class="sb-cate-title sb-mb-15">さらに細かいタグで絞る</h2>
            </div>
            <form method="GET" action="{{ route('events.show',$event->id) }}" style="display:flex; flex-wrap: wrap;">
                @foreach($event->small_events as $small_event)
                    <div class="btn-group-toggle mt-2 mr-1" data-toggle="buttons">
                        <label class="btn btn-warning" for="small-event-btn-{{ $small_event->id }}">
                            <input type="checkbox" autocomplete="off" id="small-event-btn-{{ $small_event->id }}" name="smallEventIds[]" value="{{ $small_event->id }}">
                            {{ $small_event->name }}
                        </label>
                    </div>
                @endforeach
                    <br>
                <button type="submit" class="btn btn-danger mt-5" style="display:flex; flex-direction: row;">絞り込み</button>
            </form>
        </div>
    </section>
    {{--↑↑さらに細かいテーマで探す↑↑--}}
    <hr>
    <section class="sb-menu-section sb-p-90-60">
        <div class="container">
            <div class="sb-mb-60">
                <h2 class="sb-cate-title sb-mb-15">絵本一覧</h2>
            </div>
            <div class="row">
                @foreach($books as $book)
                    <div class="col-lg-3">
                        <a data-fancybox="menu" href="{{route('books.show',$book->id)}}" class="sb-menu-item sb-mb-30">
                            <div class="sb-cover-frame">
                                <img src="{{ env('AWS_BUCKET')}}books/cover/{{$book->cover_img}}.png" alt="cover_img">
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
                                <p class="star-rate">{{ $book->starRate }}<span>（レビュー平均：{{ $book->reviewAvg }}点）</span></p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                <ul class="sb-pagination">
                    <li class="sb-active"><a href="#.">1</a></li>
                    <li><a href="#.">2</a></li>
                    <li><a href="#.">3</a></li>
                    <li><a href="#.">4</a></li>
                    <li><a href="#.">...</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
