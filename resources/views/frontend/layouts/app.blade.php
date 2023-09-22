<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    {!! SEO::generate() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('default/default.png') }}" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/bootstrap.min.css') }}">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/70b22ffbec.js" crossorigin="anonymous"></script>
    <!-- line-awesome icons  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/line-awesome.css') }}">
    <!-- themify icons  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/themify-icons.css') }}">
    <!-- ionicons icons  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/ionicons.css') }}">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/animate.css') }}">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/jquery.fancybox.css') }}">
    <!-- lity popup  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/lity.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/all.min.css') }}">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/swiper8.min.css') }}">
    <!-- cursor  -->
    <!-- <link rel="stylesheet" href="../common/assets/css/lib/cursor.css"> -->

    <!-- common style -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/common_style.css') }}">

    <!-- home style -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/home_1_style.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/inner_pages.css') }}">
    @yield('style')
</head>

<body>
    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                {{-- <span>S</span>
                <span>Y</span>
                <span>N</span>
                <span>E</span>
                <span>X</span>
                <span>S</span> --}}
                <span>SYNEX</span>
                <span>DIGITAL</span>
            </div>
        </div>
    </div>
    @include('frontend.layouts.sidenav')
    <div class="smooth-scroll-content" id="scrollsmoother-container">
        <!--Contents-->
        <main>
            @include('frontend.layouts.header')
            @yield('content')
        </main>
        @include('frontend.layouts.footer')
    </div>
    <a href="#" class="to_top show">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
    @include('frontend.layouts.script')
    @yield('script')
</body>

</html>
