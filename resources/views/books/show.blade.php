@extends('layouts.app')
@section('content')
    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">



        <!-- banner -->
        <section class="sb-banner sb-banner-xs sb-banner-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- main title -->
                        <div class="sb-main-title-frame">
                            <div class="sb-main-title">
                                <h1 class="sb-h2">Online shop</h1>
                                <ul class="sb-breadcrumbs">
                                    <li><a href="home-1.html">Home</a></li>
                                    <li><a href="shop-1.html">Shop</a></li>
                                    <li><a href="#.">Product</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- main title end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- product -->
        <section class="sb-p-90-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                            <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="cover_img">
                            <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                            <!-- button -->
                            <a data-fancybox="menu" data-no-swup href="{{ asset('img/book/'.$book->cover_img)}}" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                            <span class="sb-icon">
                                <img src="https://nureyon.com/sample/13/magnifying_glass-11-p2.svg?1604368128" alt="icon">
                            </span>
                            </a>
                            <!-- button end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sb-product-description sb-mb-90">
                            <div class="sb-price-frame sb-mb-30">
                                <h3>{{$book->title}}</h3>
                                <div class="sb-price"><sub>$</sub> 19</div>
                            </div>
                            <ul class="sb-stars sb-mb-25">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><span>(4 ratings)</span></li>
                            </ul>
                            <p class="sb-text sb-mb-30">{{ $book->body }}</p>
                            <h4 class="sb-mb-10">この絵本に関係するタグ一覧</h4>
                            <ul class="sb-keywords">
                                <!-- ここに各本に付されたsmall_genreタグを掲載する※現状はダミー-->
                                @foreach($book->smallGenres as $smallGenre)
                                    <li><a href="#.">{{$smallGenre->name}}</a></li>
                                @endforeach
                            </ul>
                            <ul class="sb-keywords sb-mb-25">
                                <li><a href="#.">おはなし</a></li>
                                <li><a href="#.">なかよく</a></li>
                                <li><a href="#.">お料理</a></li>
                                <li><a href="#.">おさんぽ</a></li>
                            </ul>
                            <hr>
                            <div class="row">
                                <div class="col-5">
                                    <a href="product.html" class="sb-btn sb-ppc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg">
                                    </span>
                                        <span>購入する</span>
                                    </a>
                                </div>
                                <div class="col-5">
                                    <a href="product.html" class="sb-btn sb-ppc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg">
                                    </span>
                                        <span>借りる</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filter -->
                <div class="sb-filter">
                    <a href="#." data-filter=".sb-ingredients-tab" class="sb-filter-link sb-active">基本情報</a>
                    <a href="#." data-filter=".sb-details-tab" class="sb-filter-link">内容紹介</a>
                    <a href="#." data-filter=".sb-reviews-tab" class="sb-filter-link">レビュー</a>
                </div>
                <!-- filter end -->
                <div class="sb-masonry-grid sb-tabs">
                    <div class="sb-grid-sizer"></div>
                    <div class="sb-grid-item sb-ingredients-tab">
                        <div class="sb-tab">
                            <ul class="sb-list">
                                <li><b>作品名：</b><span>{{ $book->title }}</span></li>
                                <li><b>著者：</b><span>@foreach($book->authors as $author){{$author->name}}@endforeach</span></li>
                                <li><b>共同著者：</b><span></span></li>
                                <li><b>出版社：</b><span>{{ $book->publisher->name }}</span></li>
                                <li><b>ISBN：</b><span>{{ $book->isbn_13 }}</span></li>
                                <li><b>価格（税込）：</b><span>￥ {{ $book->price }}-</span></li>
                                <li><b>発行日：</b><span>{{ $book->released_at }}</span></li>
                                <li><b>対象：</b><span>{{ $book->age }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sb-grid-item sb-details-tab" style="position: absolute">
                        <div class="sb-tab">
                            <h4 class="mb-3">出版社による紹介</h4>
                            <p class="sb-text sb-mb-15">{{ $book->body }}</p>
                            <h4 class="mb-3">内容サンプル</h4>
                            <div class="col-lg-6">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://dummyimage.com/16:9x1080/" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://dummyimage.com/16:9x1080/" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://dummyimage.com/16:9x1080/" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>ß
                    </div>
                    <div class="sb-grid-item sb-reviews-tab" style="position: absolute">

                        <div class="container" data-sticky-container>
                            <div class="row">
                                <di class="col-lg-12">
                                    <form class="sb-checkout-form">
                                        <div class="sb-mb-30">
                                            <h3>レビュワー情報</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="sb-group-input">
                                                    <input type="text" required>
                                                    <span class="sb-bar"></span>
                                                    <label>ニックネーム</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sb-group-input">
                                                    <input type="text" required>
                                                    <span class="sb-bar"></span>
                                                    <label>年代</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sb-group-input">
                                                    <input type="text" required>
                                                    <span class="sb-bar"></span>
                                                    <label>お子様との関係</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sb-group-input">
                                                    <input type="text" required>
                                                    <span class="sb-bar"></span>
                                                    <label>居住地</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sb-mb-30">
                                            <h3>レビュー内容</h3>
                                        </div>
                                        <div class="sb-group-input">
                                            <input type="text" required>
                                            <span class="sb-bar"></span>
                                            <label>レビュータイトル</label>
                                        </div>
                                        <div class="sb-group-input">
                                            <textarea name="name" required></textarea>
                                            <span class="sb-bar"></span>
                                            <label>レビュー本文</label>
                                        </div>

                                        <div class="sb-mb-30">
                                            <h3 class="sb-mb-30">Payment method</h3>
                                            <ul>
                                                <li class="sb-radio">
                                                    <input type="radio" id="option-1" name="selector" checked>
                                                    <label for="option-1">Direct bank transfer</label>
                                                    <div class="sb-check"></div>
                                                </li>
                                                <li class="sb-radio">
                                                    <input type="radio" id="option-2" name="selector">
                                                    <label for="option-2">Check payments</label>
                                                    <div class="sb-check"></div>
                                                </li>
                                                <li class="sb-radio">
                                                    <input type="radio" id="option-3" name="selector">
                                                    <label for="option-3">Cash on delivery</label>
                                                    <div class="sb-check"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- button -->
                                        <button type="submit" class="sb-btn sb-m-0">
                                            <span class="sb-icon">
                                                <img src="img/ui/icons/arrow.svg" alt="icon">
                                            </span>
                                            <span>Place order</span>
                                        </button>
                                        <!-- button end -->
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- revievs -->
                        <div class="sb-reviews sb-p-0-90">
                            <div class="container">
                                <div class="sb-group-title sb-mb-30">
                                    <div class="sb-left sb-mb-30">
                                        <h2 class="sb-mb-30">Reviews <span>about</span> us</h2>
                                        <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                                    </div>
                                    <div class="sb-right sb-mb-30">
                                        <!-- slider navigation -->
                                        <div class="sb-slider-nav">
                                            <div class="sb-prev-btn sb-reviews-prev"><i class="fas fa-arrow-left"></i></div>
                                            <div class="sb-next-btn sb-reviews-next"><i class="fas fa-arrow-right"></i></div>
                                        </div>
                                        <!-- slider navigation end -->
                                        <!-- button -->
                                        <a href="reviews.html" class="sb-btn">
                                        <span class="sb-icon">
                                            <img src="img/ui/icons/dialog.svg" alt="icon">
                                        </span>
                                            <span>All revievs</span>
                                        </a>
                                        <!-- button end -->
                                    </div>
                                </div>
                                <div class="swiper-container sb-reviews-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="sb-review-card">
                                                <div class="sb-review-header sb-mb-15">
                                                    <h4 class="sb-mb-15">Very tasty</h4>
                                                    <ul class="sb-stars">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                                <div class="sb-author-frame">
                                                    <div class="sb-avatar-frame">
                                                        <img src="img/faces/1.jpg" alt="Guest">
                                                    </div>
                                                    <h4>Emma Newman</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sb-review-card">
                                                <div class="sb-review-header sb-mb-15">
                                                    <h4 class="sb-mb-15">I have lunch here every day</h4>
                                                    <ul class="sb-stars">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                                <div class="sb-author-frame">
                                                    <div class="sb-avatar-frame">
                                                        <img src="img/faces/2.jpg" alt="Guest">
                                                    </div>
                                                    <h4>Paul Trueman</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sb-review-card">
                                                <div class="sb-review-header sb-mb-15">
                                                    <h4 class="sb-mb-15">Great service</h4>
                                                    <ul class="sb-stars">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li class="sb-empty"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                                <div class="sb-author-frame">
                                                    <div class="sb-avatar-frame">
                                                        <img src="img/faces/3.jpg" alt="Guest">
                                                    </div>
                                                    <h4>Viktoria Freeman</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="sb-review-card">
                                                <div class="sb-review-header sb-mb-15">
                                                    <h4 class="sb-mb-15">Starbelly is amazing!</h4>
                                                    <ul class="sb-stars">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                                <p class="sb-text sb-mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugiat totam nobis quas unde excepturi inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                                                    tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                                                <div class="sb-author-frame">
                                                    <div class="sb-avatar-frame">
                                                        <img src="img/faces/4.jpg" alt="Guest">
                                                    </div>
                                                    <h4>Audrey Oldman</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- review end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- product end -->
        <!-- short menu -->
        <section class="sb-short-menu sb-p-0-90">
            <div class="sb-bg-2">
                <div></div>
            </div>
            <div class="container">
                <div class="sb-group-title sb-mb-30">
                    <div class="sb-left sb-mb-30">
                        <h2 class="sb-cate-title sb-mb-30">It is usually bought together with this product</h2>
                        <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                    </div>
                    <div class="sb-right sb-mb-30">
                        <!-- slider navigation -->
                        <div class="sb-slider-nav">
                            <div class="sb-prev-btn sb-short-menu-prev"><i class="fas fa-arrow-left"></i></div>
                            <div class="sb-next-btn sb-short-menu-next"><i class="fas fa-arrow-right"></i></div>
                        </div>
                        <!-- slider navigation end -->
                    </div>
                </div>
                <div class="swiper-container sb-short-menu-slider-4i">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/1.jpg" alt="product">
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title"><a href="shop-list-1.html">Chevrefrit au miel</a></h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/2.jpg" alt="product">
                                    <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title"><a href="shop-list-1.html">Saumon Gravlax</a></h4>
                                    <div class="sb-price"><sub>$</sub> 9</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/3.jpg" alt="product">
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title"><a href="shop-list-1.html">Stracciatella</a></h4>
                                    <div class="sb-price"><sub>$</sub> 9</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/4.jpg" alt="product">
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title"><a href="shop-list-1.html">Croustillant de poisson</a></h4>
                                    <div class="sb-price"><sub>$</sub> 4</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/5.jpg" alt="product">
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title">
                                        <a href="shop-list-1.html">Carpaccio de daurade</a>
                                    </h4>
                                    <div class="sb-price">
                                        <sub>$</sub>
                                        6
                                    </div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sb-menu-item">
                                <a href="shop-list-1.html" class="sb-cover-frame">
                                    <img src="img/menu/6.jpg" alt="product">
                                </a>
                                <div class="sb-card-tp">
                                    <h4 class="sb-card-title"><a href="shop-list-1.html">Chevrefrit au miel</a></h4>
                                    <div class="sb-price"><sub>$</sub> 14</div>
                                </div>
                                <div class="sb-description">
                                    <p class="sb-text sb-mb-15"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                                </div>
                                <div class="sb-card-buttons-frame">
                                    <!-- button -->
                                    <a href="shop-list-1.html" class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/arrow.svg" alt="icon">
                                    </span>
                                    </a>
                                    <!-- button end -->
                                    <!-- button -->
                                    <a href="#." class="sb-btn sb-atc">
                                    <span class="sb-icon">
                                        <img src="img/ui/icons/cart.svg" alt="icon">
                                    </span>
                                        <span class="sb-add-to-cart-text">Add to cart</span>
                                        <span class="sb-added-text">Added</span>
                                    </a>
                                    <!-- button end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- short menu end -->

        <!-- call to action -->
    </div>
    <!--元々のコード-->
{{--    <main>--}}
{{--        <div class="d-flex justify-content-center">--}}
{{--            <div class="item-image m-3">--}}
{{--                <img src="{{ asset('img/book/'.$book->cover_img)}}" alt="{{$book->title}}" class="img-thumbnail">--}}
{{--                <hr>--}}
{{--                <h5>試し読み</h5>--}}
{{--            </div>--}}

{{--            <div class="item-info">--}}
{{--                <h3 class="item-title">{{$book->title}}</h3>--}}
{{--                <button type="button" class="btn btn-outline-secondary">思いやり</button>--}}
{{--                <button type="button" class="btn btn-outline-secondary">想像力</button>--}}
{{--                <div class="mt-3">--}}
{{--                    <h5>内容紹介</h5>--}}
{{--                    <p>{{$book->body}}</p>--}}
{{--                    <h5>試し読み</h5>--}}
{{--                </div>--}}
{{--                <div class="mt-3">--}}
{{--                    <h5>作品概要</h5>--}}
{{--                    <table class="table table-borderless">--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td>著　者：</td>--}}
{{--                            <td>@foreach($book->authors as $author)--}}
{{--                                    {{$author->name}}--}}
{{--                                @endforeach</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>出版社 ：</td>--}}
{{--                            <td>{{$book->publisher->name}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>発行日：</td>--}}
{{--                            <td>{{ $book->released_at }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>価　格：</td>--}}
{{--                            <td>¥{{ $book->price }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td> ISBN：</td>--}}
{{--                            <td>{{ $book->isbn_13}}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>対　象：</td>--}}
{{--                            <td>{{ $book->age }}</td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="m-3">--}}
{{--                    <h5>感想をお聞かせください</h5>--}}
{{--                    <div>--}}
{{--                        <form method="POST" action="{{route('book.reviews.create')}}">--}}
{{--                            @csrf--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <select class="form-select" id="floatingSelect" name="evaluation" required>--}}
{{--                                    <option selected>---</option>--}}
{{--                                    <option value="1">★</option>--}}
{{--                                    <option value="2">★★</option>--}}
{{--                                    <option value="3">★★★</option>--}}
{{--                                    <option value="4">★★★★</option>--}}
{{--                                    <option value="5">★★★★★</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <input class="form-control" id="review-title" name="title">--}}
{{--                                <label for="review-title">レビュータイトル</label>--}}
{{--                                <div class="form-text"></div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="article"></textarea>--}}
{{--                                <label for="floatingTextarea2">レビュー本文</label>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <input class="form-control" id="review-title" name="name">--}}
{{--                                <label for="review-title">ニックネーム</label>--}}
{{--                                <div class="form-text"></div>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="age_number">--}}
{{--                                    <option selected>---</option>--}}
{{--                                    <option value="1">20代</option>--}}
{{--                                    <option value="2">30代</option>--}}
{{--                                    <option value="3">40代</option>--}}
{{--                                    <option value="4">50代</option>--}}
{{--                                    <option value="5">60代以上</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-floating">--}}
{{--                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="relationship_number">--}}
{{--                                    <option selected>---</option>--}}
{{--                                    <option value="1">母</option>--}}
{{--                                    <option value="2">父</option>--}}
{{--                                    <option value="3">祖父</option>--}}
{{--                                    <option value="4">祖母</option>--}}
{{--                                    <option value="5">親戚</option>--}}
{{--                                </select>--}}
{{--                                <label for="floatingSelect">お子様とのご関係</label>--}}
{{--                            </div>--}}
{{--                            <input type="hidden" value="{{ $book->id }}" name="id">--}}
{{--                            <button type="submit" class="btn btn-primary">投稿</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--$book->reviews as $reviewに変更する--}}
{{--                    @foreach($reviews as $review)--}}
{{--                        <div class="offset-md-5 col-md-5">--}}
{{--                            <p>{{$review->evaluation}}</p>--}}
{{--                            <p>{{$review->title}}</p>--}}
{{--                            <p>{{$review->article}}</p>--}}
{{--                            <p>{{$review->name}}</p>--}}
{{--                            <p>{{$review->age_number}}</p>--}}
{{--                            <p>{{$review->relationship_number}}</p>--}}
{{--                            <label>{{$review->created_at}}</label>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}
@endsection
