@extends('layouts.app')
@section('content')
    <main>
        <div class="d-flex justify-content-center">
            <div class="item-image m-3">
                <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="{{$book->title}}" class="img-thumbnail">
                <hr>
                <h5>試し読み</h5>
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="{{$book->title}}">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

            <div class="item-info">
                <h3 class="item-title">{{$book->title}}</h3>
                <button type="button" class="btn btn-outline-secondary">思いやり</button>
                <button type="button" class="btn btn-outline-secondary">想像力</button>
                <div class="mt-3">
                    <h5>内容紹介</h5>
                    <p>{{$book->body}}</p>
                </div>
                <div class="mt-3">
                    <h5>作品概要</h5>
                    <table class="table table-borderless">
                        <tbody>
                        <tr>
                            <td>著　者：</td>
                            <td>@foreach($book->authors as $author)
                                    {{$author->name}}
                                @endforeach</td>
                        </tr>
                        <tr>
                            <td>出版社 ：</td>
                            <td>{{$book->publisher->name}}</td>
                        </tr>
                        <tr>
                            <td>発行日：</td>
                            <td>{{ $book->released_at }}</td>
                        </tr>
                        <tr>
                            <td>価　格：</td>
                            <td>¥{{ $book->price }}</td>
                        </tr>
                        <tr>
                            <td> ISBN：</td>
                            <td>{{ $book->isbn_13}}</td>
                        </tr>
                        <tr>
                            <td>対　象：</td>
                            <td>{{ $book->age }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="m-3">
                    <h5>感想をお聞かせください</h5>
                    <div>
                        <form method="POST" action="route('book.review.store', ['id'=>{{ $book->id }}]);">
                            @csrf
                            <div class="mb-3 form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="evaluation">
                                    <option selected>---</option>
                                    <option value="1">★</option>
                                    <option value="2">★★</option>
                                    <option value="3">★★★</option>
                                    <option value="4">★★★★</option>
                                    <option value="5">★★★★★</option>
                                </select>
                            </div>
                            <div class="mb-3 form-floating">
                                <input class="form-control" id="review-title" name="title">
                                <label for="review-title">レビュータイトル</label>
                                <div class="form-text"></div>
                            </div>
                            <div class="mb-3 form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="article"></textarea>
                                <label for="floatingTextarea2">レビュー本文</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input class="form-control" id="review-title" name="name">
                                <label for="review-title">ニックネーム</label>
                                <div class="form-text"></div>
                            </div>
                            <div class="mb-3 form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="age_number">
                                    <option selected>---</option>
                                    <option value="1">20代</option>
                                    <option value="2">30代</option>
                                    <option value="3">40代</option>
                                    <option value="4">50代</option>
                                    <option value="5">60代以上</option>
                                </select>
                            </div>
                            <div class="mb-3 form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="relationship_number">
                                    <option selected>---</option>
                                    <option value="1">母</option>
                                    <option value="2">父</option>
                                    <option value="3">祖父</option>
                                    <option value="4">祖母</option>
                                    <option value="5">親戚</option>
                                </select>
                                <label for="floatingSelect">お子様とのご関係</label>
                            </div>
                            <button type="submit" class="btn btn-primary">投稿</button>
                        </form>
                    </div>
                </div>
                <div>
                    @foreach($reviews as $review)
                        <div class="offset-md-5 col-md-5">
                            <p>{{$review->evaluation}}</p>
                            <p>{{$review->title}}</p>
                            <p>{{$review->article}}</p>
                            <p>{{$review->name}}</p>
                            <p>{{$review->age_number}}</p>
                            <p>{{$review->relationship_number}}</p>
                            <label>{{$review->created_at}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
