@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-2" id="learn-theme">
            <h2>与えたい学びのテーマから探す</h2>
            <div class="container" style="width: 100%">
                <div class="row g-2">
                    @foreach($genres as $genre)
                        <div class="col-6">
                            <div class="p-3 border bg-light">
                                    <img src="{{ asset('img/icon_img/'.$genre->icon_img) }}">
                                    <h6 class>{{$genre->name}}</h6>
                                <a href="{{route('genres.show', ['genre' => $genre->id])}}">
                                    <button class="btn btn-outline-secondary">絵本を探す</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="row w-100" id="life-event">
            <h2>成長に応じた絵本を探す</h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    @foreach($events as $event)
                        <h5 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne-{{ $event->id }}" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                {{$event->name}}
                            </button>
                        </h5>
                        <div id="panelsStayOpen-collapseOne-{{ $event->id }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <img src="{{ asset('img/icon_img/'.$event->icon_img )}}">
                                <p>{{$event->summary}}</p>
                                <a href="{{route('events.show', ['event' => $event->id])}}">
                                    <button class="btn btn-outline-secondary">絵本を探す</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="row w-100" id="hot-news">
            <h2>話題のニュースから探す</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 50%; text-align: center;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                        <div style="width: auto; height: auto; background-color: #a0aec0;">
                            <a style="background-color: aquamarine">記事</a>
                            <ul>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="width: auto; height: auto; background-color: #a0aec0;">
                            <a style="background-color: aquamarine">記事</a>
                            <ul>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="width: auto; height: auto; background-color: #a0aec0;">
                            <a style="background-color: aquamarine">記事</a>
                            <ul>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                                <li>XXX</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="row w-100"　id="column">
            <h2>絵本に関するコラムを読む</h2>
            <p>//＠foreachで記事をスライドショー予定</p>
            <div style="align-items: center;">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 40%; text-align: center;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach($topics as $topic)
                            <div class="carousel-item active">
                                <img src="{{ asset('img/banner/'.$topic->img) }}" class="d-block w-100" alt="{{$topic->title}}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{$topic->title}}</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
