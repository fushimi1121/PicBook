<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- color of address bar in mobile browser -->
    <meta name="theme-color" content="#F5C332">
    <!-- favicon  -->
    <link rel="shortcut icon" href="{{asset('img/ui/manabook_favicon.png')}}" type="image/x-icon">
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('css/plugins/font-awesome.min.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/plugins/bootstrap.min.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" href="{{asset('css/plugins/swiper.min.css')}}">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('css/plugins/datepicker.css')}}">
    <!-- mapbox css -->
    <link href="{{asset('css/plugins/mapbox-style.css')}}" rel='stylesheet'>
    <!-- fancybox css -->
    <link rel="stylesheet" href="{{asset('css/plugins/fancybox.min.css')}}">
    <!-- Manabook css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- additional styles css -->
    <link rel="stylesheet" href="{{asset('css/add_style.css?ver=1.0.1')}}">
    <!-- page title -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Manabook</title>
</head>
<body>
<div class="sb-app">
    <div class="sb-preloader">
        <div class="sb-preloader-bg"></div>
        <div class="sb-preloader-body">
            <div class="sb-loading">
                <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
            </div>
            <div class="sb-loading-bar">
                <div class="sb-bar"></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    <!-- click effect -->
    <div class="sb-click-effect"></div>
    <!-- loader -->
    <div class="sb-load"></div>
    <div class="sb-top-bar-frame">
        <div class="sb-top-bar-bg"></div>
        <div class="container">
            <div class="sb-top-bar">
                <a href="{{route('search.index')}}" class="sb-logo-frame">
                    <!-- logo img -->
                    <img src="{{asset('img\ui\manabook_logo.png')}}" alt="ManaBook">
                </a>
                <!-- menu -->
                <div class="sb-right-side">
                    <nav id="sb-dynamic-menu" class="sb-menu-transition">
                        <ul class="sb-navigation">
                            <li class="sb-active sb-has-children">
                                <a href="#educationGenre" id="egButton">ジャンルで探す</a>
                            </li>
                            <script>
                                window.addEventListener('load', (event) => {

                                    document.getElementById('egButton').addEventListener('click', () => {

                                        // 表示位置を取得
                                        const educate = document.getElementById('educationGenre');
                                        const content_position = educate.getBoundingClientRect();

                                        // 移動
                                        window.scrollTo( 1, content_position.top);

                                    });
                                });
                            </script>
                            <li class="sb-has-children">
                                <a href="#lifeStage" id="lsButton">年齢で探す</a>
                            </li>
                            <script>
                                window.addEventListener('load', (event) => {

                                    document.getElementById('lsButton').addEventListener('click', () => {

                                        // 表示位置を取得
                                        const life = document.getElementById('lifeStage');
                                        const content_position = life.getBoundingClientRect();

                                        // 移動
                                        window.scrollTo( 1, content_position.top);

                                    });
                                });
                            </script>
                            <li class="sb-has-children">
                                <a href="#latestColumn" id="lcButton">コラムを読む</a>
                            </li>
                            <script>
                                window.addEventListener('load', (event) => {

                                    document.getElementById('lcButton').addEventListener('click', () => {

                                        // 表示位置を取得
                                        const column = document.getElementById('latestColumn');
                                        const content_position = column.getBoundingClientRect();

                                        // 移動
                                        window.scrollTo( 1, content_position.top);

                                    });
                                });
                            </script>
                            <li class="sb-has-children" style="display: flex; justify-content: center;">
                                <form method="GET" action="{{ route('keywordSearch.index') }}" class="search_container">
                                    <input type="text" size="25" placeholder="　キーワード検索" aria-label="Search" name="keyword">
                                    <input type="submit" value="&#xf002">
                                </form>
                            </li>
                        </ul>
                    </nav>
                    <div class="sb-buttons-frame">
                        <!-- button -->
                        <!-- menu btn -->
                        <div class="sb-menu-btn"><span></span></div>
                        <!-- info btn -->
                        <div class="sb-info-btn"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- info bar -->
        <div class="sb-info-bar">
            <div class="sb-infobar-content">
                <div class="sb-ib-title-frame sb-mb-30">
                    <h4>Contact</h4><i class="fas fa-arrow-down"></i>
                </div>
                <ul class="sb-list sb-mb-30">
                    <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
                    <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
                    <li><b>Phone:</b><span>+81 03(***)***</span></li>
                    <li><b>Email:</b><span>info@manabook.online</span></li>
                </ul>
                <div class="sb-ib-title-frame sb-mb-30">
                    <h4>Please Follow Our Instagram</h4>
                </div>
                <ul class="sb-instagram sb-mb-30">
                    @foreach ($instagramItems as $instagramItem)
                        <li>
                            <a href=".#">
                                <img src="{{ $instagramItem['img'] }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
                <hr>
                <div class="sb-ib-title-frame sb-mb-30">
                    <h4>Latest Columns</h4>
                </div>
                @foreach($topics as $topic)
                    <a href="{{route('topics.show',$topic->id)}}" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                        <div class="sb-cover-frame">
                            <img src="{{ env('AWS_BUCKET').$topic->img}}" alt="cover">
                        </div>
                        <div class="sb-blog-card-descr">
                            <h5 class="sb-mb-5">{{$topic->title}}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- app wrapper -->
    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">
        <!-- サービストップバナー　始まり -->
        <section class="sb-banner sb-banner-sm sb-banner-color"
                 style='background-image: url("{{ asset('img/object/topimage.jpg') }}"); background-position: 50%!important; background-size: cover!important; '>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title text-center">
                                <div class="sb-main-title-frame">
                                    <div class="sb-main-title text-center">
                                        <img src="{{'img/ui/manabook_logo3.png'}}" alt="manabook"
                                             style="width: 70%; margin-bottom: 4px">
                                        <p class="sb-text">ー最高の絵本が、きっと見つかるー</p>
                                    </div>
                                </div>
                                <a href="{{ route('about') }}" class="sb-btn">
                                    <span class="sb-icon">
                                        <img src="{{asset('img/ui/manabook_favicon.png')}}" alt="about us">
                                    </span>
                                    <span>About Us</span>
                                </a>
{{--                                <ul class="sb-breadcrumbs">--}}
{{--                                    <li><a href="{{ route('about') }}">About us</a></li>--}}
{{--                                </ul>--}}
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
                                <img
                                    src="https://image-select.mamastar.jp/interspace/wp-content/uploads/1591581870-4ecb9ebabde86f9cf1d85f1ed7dcc14d-1200x801.jpg"
                                    alt="interior" class="sb-interior" style="object-position: center">
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
                        <img src="https://thumb.ac-illust.com/c9/c991d8fe84a9c55029871cf40fbdbdb7_t.jpeg"
                             alt="Signature" class="mb-signature sb-mb-30">
                    </div>
                </div>
            </div>
            <button aria-label="次のセクションへスキップする"
                    class="btn border--none border--none bg--transparent color--primary-text hv--primary-accent font-size--l pointer"
                    data-banner-scroll="">
                <span class="icon-wrapper"><svg aria-hidden="true" focusable="false" role="presentation"
                                                class="icon icon-arrow-down" viewBox="0 0 100 100"><path
                            d="M52.575 76.81V12.586h-5V76.81L24.269 53.504l-3.38 3.381 29.186 29.187 29.186-29.187-3.38-3.38L52.575 76.81z"></path></svg></span>
            </button>
        </section>
        <!-- サービス概要　終わり -->
        <hr>
        <!-- ジャンルから選ぶ　始まり -->
        <section class="sb-p-0-60 mt-5" id="educationGenre">
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="genre">Education Genre</h2>
                        <h6 class="sb-mb-25">ー子どもに与えたい学びから探す</h6>
                        <p class="sb-text">絵本から得られる学びは多種多様。お子様に学んでもらいたいジャンルを選んで、最適な本をお求めください。</p>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- button -->
                        <a href=".#" class="sb-btn sb-m-0">
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
                                        <img src="{{ env('AWS_BUCKET').$genre->icon_img}}" alt="{{$genre->icon_img}}">
                                    </div>
                                    <div class="sb-card-descr">
                                        <h3 class="sb-mb-10">{{$genre->name_en}}</h3>
                                        <h4 class="sb-mb-10">- {{$genre->name_ja}} -</h4>
                                        <p class="sb-text">{{$genre->summary}}</p>
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
        <section class="sb-p-0-60" id="lifeStage">
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="mb-1" id="Growth">Growth Stage</h2>
                        <h6 class="sb-mb-25">ー発達ステージに合わせて探す</h6>
                        <p class="sb-text">子どもは成長に合わせて色んなことができるようになります。我が子の発達段階に応じて必要な本をお求めください。</p>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- button -->
                        <a href=".#" class="sb-btn sb-m-0">
                            <span class="sb-icon">
                                <img src="img/ui/icons/arrow.svg" alt="icon">
                            </span>
                            <span>What's Growth Stage</span>
                        </a>
                        <!-- button end -->
                    </div>
                </div>
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-lg-3">
                            <div class="sb-categorie-card sb-mb-30">
                                <div class="sb-card-body">
                                    <a class="sb-category-icon" href="{{route('events.show',$event->id)}}">
                                        <img src="{{ env('AWS_BUCKET').$event->icon_img}}.png" alt="cover">
                                    </a>
                                    <div class="sb-card-descr mt-2">
                                        <h3>{{$event->id}}. {{$event->name}}</h3>
                                        <br>
                                        <h5 class="sb-mb-10">< {{$event->supplement}} ></h5>
                                        <p class="sb-text sb-mb-15">{{$event->summary}}</p>
                                        <!-- button -->
                                        <a href="{{route('events.show',$event->id)}}" class="sb-btn sb-btn-2 sb-btn-icon sb-m-0">
                                            <span class="sb-icon">
                                                <img src="{{ asset('img/ui/icons/arrow.svg')}}" alt="arrows">
                                            </span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <hr>
        <!-- 成長に合わせた本を探す　終わり -->
        <!-- 絵本に関するコラム（直近５記事）始まり -->
        <section class="sb-popular sb-p-60-30" id="latestColumn">
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
                                        <img src="{{ env('AWS_BUCKET').$topic->img}}" alt="{{$topic->title}}">
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
    <footer>
        <div class="container">
            <div class="sb-footer-frame">
                <a href="home-1.html" class="sb-logo-frame">
                    <!-- logo img -->
                    <img src="{{asset('img/ui/manabook_logo.png')}}" alt="manabook">
                </a>
                <div class="sb-copy">&copy; late 2022 Manabook. All Rights Reserved.</div>
            </div>
        </div>
    </footer>
</div>
<!-- jquery js -->
<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
<!-- smooth scroll js -->
<script src="{{asset('js/plugins/smooth-scroll.js')}}"></script>
<!-- swup js -->
<script src="{{asset('js/plugins/swup.min.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js/plugins/swiper.min.js')}}"></script>
<!-- datepicker js -->
<script src="{{asset('js/plugins/datepicker.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('js/plugins/isotope.js')}}"></script>
<!-- sticky -->
<script src="{{asset('js/plugins/sticky.js')}}"></script>
<!-- mapbox js -->
<script src="{{asset('js/plugins/mapbox.min.js')}}"></script>
<!-- fancybox js -->
<script src="{{asset('js/plugins/fancybox.min.js')}}"></script>
<!-- bootstrap4.2 js -->
<script src="{{asset('js/plugins/bootstrap.min.js')}}"></script>
<!-- manabook js -->
<script src="{{asset('js/main.js')}}"></script>
{{--追加スクリプト--}}

</body>
</html>
