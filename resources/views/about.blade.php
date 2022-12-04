@extends('layouts.app')
@section('content')
    <section class="sb-banner sb-banner-sm sb-banner-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- main title -->
                    <div class="sb-main-title-frame">
                        <div class="sb-main-title text-center">
                            <span class="sb-suptitle sb-mb-30">About us</span>
                            <h1 class="sb-mb-30">We are MANABOOK<br>What is...?</h1>
                            <p class="sb-text sb-text-lg sb-mb-30">All we need is some of love and<br>optimum education for our children</p>
                        </div>
                    </div>
                    <!-- main title end -->
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- About text -->
    <section class="sb-p-90-0">
        <div class="sb-bg-2" style="margin-top: 90px">
            <div></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="sb-illustration-2 sb-mb-90">
                        <div class="sb-interior-frame">
                            <img src="{{ env('AWS_BUCKET')}}about/about_1.jpeg" alt="interior" class="sb-interior" style="object-position: center">
                        </div>
                        <div class="sb-square"></div>
                        <div class="sb-cirkle-1"></div>
                        <div class="sb-cirkle-2"></div>
                        <div class="sb-cirkle-3"></div>
                        <div class="sb-cirkle-4"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center sb-mb-60">
                    <h2 class="sb-mb-60">Our Vision <span class="sb-h3">　〜目指すべき世界〜</span><br><span class="sb-h4">未来を生き抜く強い力を持った人間を育てる</span></h2>
                    <p class="sb-text sb-mb-30">親世代のわたしたちが子どもだった20～30年前と比べると、世の中の様子は大きく変わりました。テレビからYoutubeへ、授業はオンライン講座に。通勤からリモートワークへ。<br>
                        こうした生活の変化は、この先さらに大きくなり、そのスピードも加速します。これからの時代は、今ある生活も、環境も、社会も、確かな見通しのつかない｢変化｣と隣り合わせなのです。<br>
                        答えのある問いだけに囚われず、様々な課題に柔軟に対応することが求められる社会。 今後は「付加価値の高い人材」＝「探究力」をもつ人材が求められるでしょう。<br>
                        <b>MANABOOKは、お子様の幼少期の発育に最適な絵本をお届けし、強い力で未来を生き抜く人間の成長を後押し</b>します。</p>
                    <img src="img/ui/signature.png" alt="Signature" class="sb-signature sb-mb-30">
                </div>
            </div>
        </div>
    </section>
    <!-- About text end -->
    <section class="sb-team sb-p-0-60">
        <div class="sb-bg-2">
            <div></div>
        </div>
        <div class="container">
            <div class="sb-group-title sb-mb-30">
                <div class="sb-left sb-mb-30">
                    <h2 class="sb-mb-30">We promise <span>to you</span><br>five Values.<br>
                        <span class="sb-h3">ーマナブックが提供する５つの価値</span>
                    </h2>
                    <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
                </div>
                <div class="sb-right sb-mb-30">
                    <img src="{{ asset('img/ui/mvv.png') }}" alt="mvv" style="width: 100%">
                </div>
            </div>
        </div>
    </section>
    <!-- features -->
    <section class="sb-p-0-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="sb-features-item sb-mb-60">
                        <div class="sb-number">01</div>
                        <div class="sb-feature-text">
                            <h3 class="sb-mb-15">児童書に特化した圧倒的蔵書</h3>
                            <p class="sb-text">マナブックは児童書に特化した書籍斡旋サービス。２千冊以上豊富な本棚から、お子様に最適な本に出逢えます。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sb-features-item sb-mb-60">
                        <div class="sb-number">02</div>
                        <div class="sb-feature-text">
                            <h3 class="sb-mb-15">教育ジャンルからの逆引き</h3>
                            <p class="sb-text">マナブックは教育を独自の視点で６つのカテゴリーに分類し、蔵書を振り分け。今与えたい学びから探すことができます。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sb-features-item sb-mb-60">
                        <div class="sb-number">03</div>
                        <div class="sb-feature-text">
                            <h3 class="sb-mb-15">成長段階に合わせた検索</h3>
                            <p class="sb-text">マナブックは子供の成長段階を大きく４つに振り分け。お子様の発達要素ごとに、役立つ本を探すことができます。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sb-features-item sb-mb-60">
                        <div class="sb-number">04</div>
                        <div class="sb-feature-text">
                            <h3 class="sb-mb-15">最新コラムで流行を先取り</h3>
                            <p class="sb-text">マナブックは最新の教育テーマにも常にアンテナを張り、その時代で最も求められるテーマごとに絵本を紹介いたします。</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sb-features-item sb-mb-60">
                        <div class="sb-number">05</div>
                        <div class="sb-feature-text">
                            <h3 class="sb-mb-15">直感的操作性と滑らかな動作</h3>
                            <p class="sb-text">マナブックはスマホでの閲覧をファーストに、滑らかで使いやすい機能を追求。絵本を買うまで、親御さんに余計な負担は与えません。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->
@endsection
