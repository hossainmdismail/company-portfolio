<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest">
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Synex Digital</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fav2.png" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/bootstrap.min.css') }}">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

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
    <!-- swiper slider  -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/lib/swiper8.min.css') }}">
    <!-- cursor  -->
    <!-- <link rel="stylesheet" href="../common/assets/css/lib/cursor.css"> -->

    <!-- common style -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/common_style.css') }}">

    <!-- home style -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/css/home_1_style.css') }}">
</head>
    @yield('style')
<body>
    <div class="smooth-scroll-content" id="scrollsmoother-container">
        <!--Contents-->
        <main>
        @include('frontend.layouts.header')
        <div class="container">
            @yield('content')
        </div>
        </main>
        @include('frontend.layouts.footer')
    </div>
    @include('frontend.layouts.script')
    @yield('script')
</body>
</html>