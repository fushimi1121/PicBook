@extends('layouts.app')
@section('content')
    <main>
        <div class="container mt-4" style="display: grid; justify-content: center; text-align: center">
            <img src="{{ asset('img/icon_img/'.$event->icon_img)}}" alt="{{$event->name}}" class="img-thumbnail">
            <h2 class="pt-5">{{ $event->name }}</h2>
            <div>
                <p>{{ $event->introduction }}</p>
            </div>
        </div>
        <hr>
        <div class="container mt-4">
            <h5>更に細かいテーマから探す</h5>
            <form method="GET" action="{{ route('events.show',$event->id) }}">
                @foreach($event->small_events as $small_event)
                    <input type="checkbox" class="btn-check" id="small-event-btn-{{ $small_event->id }}" name="smallEventIds[]" value="{{ $small_event->id }}">
                    <label class="btn btn-outline-primary" for="small-event-btn-{{ $small_event->id }}">{{ $small_event->name }}</label>
                @endforeach
                <br>
                <button type="submit" class="btn btn-success mt-5">絞り込み</button>
            </form>
        </div>
        <hr>
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
