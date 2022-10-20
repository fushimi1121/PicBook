{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <div class="container-fluid">--}}
{{--        <a class="navbar-brand" href="{{ route('search.index')}} ">PicBook</a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="{{ route('search.index')}}#learn-theme">学びのテーマから探す</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('search.index')}}#life-event">成長段階に合った絵本から探す</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="{{ route('search.index')}}#hot-news" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        話題のニューステーマから探す--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link dropdown-toggle" href={{ route('search.index')}}"column" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        コラムを読む--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <form class="d-flex" action="{{ route('keywordSearch.index') }}" method="GET">--}}
{{--                <input class="form-control me-2" type="text" placeholder="キーワードを入力" aria-label="Search" name="keyword">--}}
{{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
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
                    <!-- button -->
{{--                    <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">--}}
{{--                <span class="sb-icon">--}}
{{--                  <img src="img/ui/icons/cart.svg" alt="icon">--}}
{{--                </span>--}}
{{--                        <i class="sb-cart-number">5</i>--}}
{{--                    </div>--}}
                    <!-- button end -->
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
                <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
                <li><b>Email:</b><span>starbelly@mail.com</span></li>
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
                <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
            </div>
            <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                <div class="sb-cover-frame">
                    <img src="img/blog/1.jpg" alt="cover">
                </div>
                <div class="sb-blog-card-descr">
                    <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
                    <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                </div>
            </a>
            <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                <div class="sb-cover-frame">
                    <img src="img/blog/2.jpg" alt="cover">
                </div>
                <div class="sb-blog-card-descr">
                    <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
                    <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                </div>
            </a>
            <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
                <div class="sb-cover-frame">
                    <img src="img/blog/3.jpg" alt="cover">
                </div>
                <div class="sb-blog-card-descr">
                    <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
                    <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
                </div>
            </a>
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
    <!-- info bar end -->
{{--    <!-- minicart -->--}}
{{--    <div class="sb-minicart">--}}
{{--        <div class="sb-minicart-content">--}}
{{--            <div class="sb-ib-title-frame sb-mb-30">--}}
{{--                <h4>Your order.</h4><i class="fas fa-arrow-down"></i>--}}
{{--            </div>--}}
{{--            <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">--}}
{{--                <div class="sb-cover-frame">--}}
{{--                    <img src="img/menu/4.jpg" alt="product">--}}
{{--                </div>--}}
{{--                <div class="sb-card-tp">--}}
{{--                    <h4 class="sb-card-title">Saumon Gravlax</h4>--}}
{{--                    <div class="sb-price"><sub>$</sub> 9</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">--}}
{{--                <div class="sb-cover-frame">--}}
{{--                    <img src="img/menu/1.jpg" alt="product">--}}
{{--                </div>--}}
{{--                <div class="sb-card-tp">--}}
{{--                    <h4 class="sb-card-title">Chevrefrit au miel</h4>--}}
{{--                    <div class="sb-price"><sub>$</sub> 14</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">--}}
{{--                <div class="sb-cover-frame">--}}
{{--                    <img src="img/menu/2.jpg" alt="product">--}}
{{--                </div>--}}
{{--                <div class="sb-card-tp">--}}
{{--                    <h4 class="sb-card-title">Croustillant de poisson</h4>--}}
{{--                    <div class="sb-price"><sub>$</sub> 4</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">--}}
{{--                <div class="sb-cover-frame">--}}
{{--                    <img src="img/menu/3.jpg" alt="product">--}}
{{--                </div>--}}
{{--                <div class="sb-card-tp">--}}
{{--                    <h4 class="sb-card-title">Stracciatella</h4>--}}
{{--                    <div class="sb-price"><sub>$</sub> 11</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">--}}
{{--                <div class="sb-cover-frame">--}}
{{--                    <img src="img/menu/5.jpg" alt="product">--}}
{{--                </div>--}}
{{--                <div class="sb-card-tp">--}}
{{--                    <h4 class="sb-card-title">Carpaccio de daurade</h4>--}}
{{--                    <div class="sb-price"><sub>$</sub> 19</div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <div class="sb-minicart-footer">--}}
{{--            <!-- button -->--}}
{{--            <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">--}}
{{--                <span>View order</span>--}}
{{--            </a>--}}
{{--            <!-- button end -->--}}
{{--            <!-- button -->--}}
{{--            <a href="checkout.html" class="sb-btn sb-btn-text">--}}
{{--                <span>Checkout</span>--}}
{{--            </a>--}}
{{--            <!-- button end -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- minicart end -->--}}
</div>
<!-- top bar end -->
