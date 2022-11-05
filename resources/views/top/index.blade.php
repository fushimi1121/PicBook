@extends('layouts.app')
@section('content')
    <!-- app wrapper -->
    <!-- preloader -->

    <!-- preloader end -->
    <!-- click effect -->

    <!-- loader -->

    <!-- top bar -->

    <!-- top bar end -->

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">
        <!-- サービストップバナー　始まり -->
        <section class="sb-banner sb-banner-sm sb-banner-color" style='background-image: url("{{ asset('img/object/topimage.jpg') }}"); background-position: 50%!important; background-size: cover!important; '>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title text-center">
                                <div class="sb-main-title-frame">
                                    <div class="sb-main-title text-center">
                                        <img src="{{'img/ui/manabook_logo3.png'}}" alt="manabook" style="width: 70%; margin-bottom: 4px">
                                        <p class="sb-text">ー最高の絵本が、きっと見つかるー</p>
                                    </div>
                                </div>
                                <ul class="sb-breadcrumbs">
                                    <li><a href="home-1.html">Home</a></li>
                                    <li><a href="#">About us</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- サービストップバナー　終わり -->
        <!-- サービス概要　始まり -->
        <section class="sb-p-90-0">
            <div class="sb-bg-2" style="margin-top: 90px">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="sb-illustration-2 sb-mb-90">
                            <div class="sb-interior-frame">
                                <img src="https://image-select.mamastar.jp/interspace/wp-content/uploads/1591581870-4ecb9ebabde86f9cf1d85f1ed7dcc14d-1200x801.jpg" alt="interior" class="sb-interior" style="object-position: center">
                            </div>
                            <div class="sb-square"></div>
                            <div class="sb-cirkle-1"></div>
                            <div class="sb-cirkle-2"></div>
                            <div class="sb-cirkle-3"></div>
                            <div class="sb-cirkle-4"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-center sb-mb-60">
                        <h3 class="sb-mb-30">我が子の成長を後押しする、</h3>
                        <h3 class="sb-mb-60">最高の一冊を探すお手伝いをします</h3>
                        <p class="sb-text sb-mb-30">
                            皆さんがまだ幼い頃に読んだ絵本のことを覚えていますか。<br>
                            <br>
                            ある人は動物たちの冒険に好奇心を躍らせたでしょうし、またある人はとある猫が本当の愛に気づくストーリーに胸を打たれたかもしれません。ある人は食いしん坊な青虫の歌を口ずさんだかもしれないし、またある人は、宝探しに没頭したかもしれません。<br>
                            <br>
                            絵本とは、まだものごごろの付かない私たちの人生に寄り添い、手を引き、色んなことを教えてくれます。<br>
                            <br>
                            そこに見える景色や広がる世界の奥行きに、パパやママとの楽しい時間をくれる魔法の本なのです。<br>
                            <br>
                            お子様の未来を拓く、お子様に、今、読んでほしい絵本を探しませんか。<br>
                        </p>
                        <img src="https://thumb.ac-illust.com/c9/c991d8fe84a9c55029871cf40fbdbdb7_t.jpeg" alt="Signature" class="mb-signature sb-mb-30">
                    </div>
                </div>
            </div>
            <button aria-label="次のセクションへスキップする" class="btn border--none border--none bg--transparent color--primary-text hv--primary-accent font-size--l pointer" data-banner-scroll="">
                <span class="icon-wrapper"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-down" viewBox="0 0 100 100"><path d="M52.575 76.81V12.586h-5V76.81L24.269 53.504l-3.38 3.381 29.186 29.187 29.186-29.187-3.38-3.38L52.575 76.81z"></path></svg></span>
            </button>
        </section>
        <!-- サービス概要　終わり -->
        <hr>
        <!-- ジャンルから選ぶ　始まり -->
        <section class="sb-p-0-60 mt-5">
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="genre">Education Genre</h2>
                        <h6 class="sb-mb-25">ー子どもに与えたい学びから探す</h6>
                        <p class="sb-text">絵本から得られる学びは多種多様。お子様に学んでもらいたいジャンルを選んで、最適な本をお求めください。</p>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- button -->
                        <a href="shop-1.html" class="sb-btn sb-m-0">
                    <span class="sb-icon">
                      <img src="img/ui/icons/arrow.svg" alt="icon">
                    </span>
                            <span>What's Education Genre</span>
                        </a>
                        <!-- button end -->
                    </div>
                </div>
                <div class="row">
                    @foreach($genres as $genre)
                    <div class="col-lg-6">
                        <a href="{{route('genres.show',$genre->id)}}" class="sb-categorie-card sb-categorie-card-2 sb-mb-30">
                            <div class="sb-card-body">
                                <div class="sb-category-icon">
                                    <img src="{{ asset('img/genre_icon/'.$genre->icon_img) }}">
                                </div>
                                <div class="sb-card-descr">
                                    <h3 class="sb-mb-10">{{$genre->name}}</h3>
                                    <p class="sb-text">{{ $genre->introduction }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ジャンルから選ぶ　終わり -->
        <!-- 成長に合わせた本を探す 始まり -->
        <section class="sb-p-0-60">
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="Growth">Growth Stage</h2>
                        <h6 class="sb-mb-25">ー発達ステージに合わせて探す</h6>
                        <p class="sb-text">子どもは成長に合わせて色んなことができるようになります。我が子の年齢や発達状況に応じて必要な本をお求めください。</p>
                    </div>
                </div>
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-lg-6">
                            <ul class="sb-faq">
                                <li>
                                    <div class="sb-question">
                                        <h4>{{$event->name}}</h4>
                                        <span class="sb-plus-minus-toggle sb-collapsed"></span>
                                    </div>
                                    <div href="{{route('events.show',$event->id)}}" class="sb-answer sb-text">
                                        <a href="{{route('events.show',$event->id)}}">
                                            <img src="{{ asset('img/icon_img/'.$event->icon_img )}}">
                                        </a>
                                        {{$event->summary}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <hr>
        <!-- 成長に合わせた本を探す　終わり -->
        <!-- 絵本に関するコラム（直近５記事）始まり -->
        <section class="sb-popular sb-p-60-30">
            <div class="sb-bg-3">
            </div>
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="columns">Latest Columns</h2>
                        <h6 class="sb-mb-25">ー絵本に関する最新のコラムを読む</h6>
                        <p class="sb-text">今話題の絵本や旬な作家をトピック形式でご紹介。最新の教育をチェックしたい親御さんは是非ご確認ください。</p>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- slider navigation -->
                        <div class="sb-slider-nav">
                            <div class="sb-prev-btn sb-blog-prev">⬅︎</div>
                            <div class="sb-next-btn sb-blog-next">➡︎</div>
                        </div>
                        <a href="{{route('topics.index')}}" class="sb-btn">
                                <span class="sb-icon">
                                    <img src="{{ asset('img/ui/icons/news_icon.png')}}" alt="news">
                                </span>
                            <span>All Columns</span>
                        </a>
                        <!-- slider navigation end -->
                    </div>
                </div>
                <div class="swiper-container sb-blog-slider-3i">
                    <div class="swiper-wrapper">
                        @foreach($topics as $topic)
                            <div class="swiper-slide">
                                <a href="{{route('topics.show',$topic->id)}}" class="sb-blog-card sb-mb-30">
                                    <div class="sb-cover-frame sb-mb-30">
                                        <img src="{{ asset('img/banner/'.$topic->img )}}" alt="{{$topic->name}}">
                                        <div class="sb-badge">Hot</div>
                                    </div>
                                    <div class="sb-blog-card-descr">
                                        <h3 class="sb-mb-10">{{$topic->title}}</h3>
                                        <div class="sb-suptitle sb-mb-15">
                                            <span>{{$topic->created_at}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
{{--    <div class="container mt-4">--}}
{{--        <div class="row w-100"　id="column">--}}
{{--            <h2>絵本に関するコラムを読む</h2>--}}
{{--            <p>//＠foreachで記事をスライドショー予定</p>--}}
{{--            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
{{--                <div class="carousel-inner">--}}
{{--                    @foreach($topics as $topic)--}}
{{--                    <div class="carousel-item @if($loop->first) active @endif">--}}
{{--                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">Fide</text></svg>--}}{{----}}{{--<img src="{{ asset('img/banner/'.$topic->img) }}" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" alt="{{$topic->title}}" width="800" height="400" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><title>{{$topic->title}}</title>><text x="50%" y="50%" fill="#555" dy=".3em">{{$topic->title}}</text>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Previous</span>--}}
{{--                </a>--}}
{{--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only">Next</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            カルーセル表示--}}
{{--            <div style="align-items: center;">--}}
{{--                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 40%; text-align: center;">--}}
{{--                    <div class="carousel-indicators">--}}
{{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                    </div>--}}
{{--                    <div class="carousel-inner">--}}
{{--                        @foreach($topics as $topic)--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <img src="{{ asset('img/banner/'.$topic->img) }}" class="d-block w-100" alt="{{$topic->title}}">--}}
{{--                                <div class="carousel-caption d-none d-md-block">--}}
{{--                                    <h5>{{$topic->title}}</h5>--}}
{{--                                    <a href="{{ route('topics.show',$topic->id) }}">--}}
{{--                                        <p>コラムを読む</p>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
{{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Previous</span>--}}
{{--                    </button>--}}
{{--                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
{{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                        <span class="visually-hidden">Next</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--    </div>--}}
@endsection
