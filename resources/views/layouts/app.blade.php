<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/js/app.js'])
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
    <!-- preloader -->
{{--    <div class="sb-preloader">--}}
{{--        <div class="sb-preloader-bg"></div>--}}
{{--        <div class="sb-preloader-body">--}}
{{--            <div class="sb-loading">--}}
{{--                <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>--}}
{{--            </div>--}}
{{--            <div class="sb-loading-bar">--}}
{{--                <div class="sb-bar"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @component('components.header')
    @endcomponent

    <main class="py-4" id="app">
        @yield('content')
    </main>

    @component('components.footer')
    @endcomponent
</div>
<!-- jquery js -->
<script src="{{asset('js/plugins/jquery.min.js')}}"></script>
<!-- smooth scroll js -->
<script src="{{asset('js/plugins/smooth-scroll.js')}}"></script>
<!-- swup js -->
{{--<script src="{{asset('js/plugins/swup.min.js')}}"></script>--}}
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
</body>
</html>

