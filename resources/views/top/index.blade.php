@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-cols-2">
            <h2>与えたい学びのテーマから探す</h2>
            <div class="container" style="width: 100%">
                <div class="row g-2">
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 border bg-light">Custom column padding</div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-4">
        <div class="row w-100">
            <h2>新着記事一覧</h2>
            <p>//＠foreachで記事をスライドショー予定</p>
            <div style="align-items: center;">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 40%;">
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
