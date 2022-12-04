{{--<div class="sb-preloader">--}}
{{--    <div class="sb-preloader-bg"></div>--}}
{{--    <div class="sb-preloader-body">--}}
{{--        <div class="sb-loading">--}}
{{--            <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>--}}
{{--        </div>--}}
{{--        <div class="sb-loading-bar">--}}
{{--            <div class="sb-bar"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- preloader end -->
<!-- click effect -->
{{--<div class="sb-click-effect"></div>--}}
<!-- loader -->
{{--<div class="sb-load"></div>--}}
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
                            <a href="{{ route('search.index')}} #genre">ジャンルで探す</a>
                        </li>
                        <li class="sb-has-children">
                            <a href="{{ route('search.index')}} #Growth">年齢で探す</a>
                        </li>
                        <li class="sb-has-children">
                            <a href="{{ route('search.index')}} #columns">コラムを読む</a>
                        </li>
                        <li class="sb-has-children" style="display: flex; justify-content: center;">
                            <form method="GET" action="{{ route('keywordSearch.index') }}" class="search_container">
                                <input type="text" size="25" placeholder="　キーワード検索" aria-label="Search" name="keyword">
                                <input type="submit" value="&#xf002">
                            </form>
                        </li>
                    </ul>
                </nav>
                <div class="sb-buttons-frame">
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
                <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
            </div>
            <ul class="sb-instagram sb-mb-30">
                <li><a href="#."><img src="img/instagram/1.jpg" alt="instagram"></a></li>
                <li><a href="#."><img src="img/instagram/2.jpg" alt="instagram"></a></li>
                <li><a href="#."><img src="img/instagram/3.jpg" alt="instagram"></a></li>
                <li><a href="#."><img src="img/instagram/4.jpg" alt="instagram"></a></li>
                <li><a href="#."><img src="img/instagram/5.jpg" alt="instagram"></a></li>
                <li><a href="#."><img src="img/instagram/6.jpg" alt="instagram"></a></li>
            </ul>
            <hr>
            <div class="sb-ib-title-frame sb-mb-30">
                <h4>Latest Columns</h4><i class="fas fa-arrow-down"></i>
            </div>
            <p>coming soon...</p>
{{--            ↓最新のコラムを計上↓--}}
{{--            @foreach($topics as $topic)--}}
{{--                <a href="{{route('topics.show', $topic->id)}}" class="sb-blog-card sb-blog-card-sm sb-mb-30">--}}
{{--                    <div class="sb-cover-frame">--}}
{{--                        <img src="{{ env('AWS_BUCKET').$topic->img}}" alt="{{$topic->title}}">--}}
{{--                    </div>--}}
{{--                    <div class="sb-blog-card-descr">--}}
{{--                        <h5 class="sb-mb-5">{{$topic->title}}</h5>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            @endforeach--}}
{{--            ↑最新のコラムを計上↑--}}
        </div>
        <div class="sb-info-bar-footer">
            <ul class="sb-social">
                <li><a href="#."><i class="far fa-circle"></i></a></li>
                <li><a href="#."><i class="far fa-circle"></i></a></li>
                <li><a href="#."><i class="far fa-circle"></i></a></li>
                <li><a href="#."><i class="far fa-circle"></i></a></li>
            </ul>
        </div>
    </div>
</div>
