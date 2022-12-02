@extends('layouts.app')
@section('content')
    <!-- menu section 1 -->
    <section class="sb-menu-section sb-p-90-60 mt-5">
        <div class="sb-bg-1">
            <div></div>
        </div>
        <div class="container">
            <div class="text-center sb-mb-60">
                <h2 >Columns</h2>
                <h6 class="mt-2">ー全記事ー</h6>
                <p class="mt-3">絵本や教育に関する記事をご用意。</p>
            </div>
            <hr>
            <div class="row ">
                @foreach($topics as $topic)
                    <div class="col-lg-4">
                        <a data-fancybox="menu" data-no-swup href="img/menu/1.jpg" class="sb-menu-item sb-mb-30">
                            <div class="swiper-slide">
                                <a href="{{route('events.show',$topic->id)}}" class="sb-blog-card sb-mb-30">
                                    <div class="sb-cover-frame sb-mb-30">
                                        <img src="{{ env('AWS_BUCKET').$topic->img}}" alt="{{$topic->title}}">
                                    </div>
                                    <div class="sb-blog-card-descr">
                                        <h3 class="sb-mb-10">{{$topic->title}}</h3>
                                        <div class="sb-suptitle sb-mb-15">
                                            <span>{{$topic->created_at}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
