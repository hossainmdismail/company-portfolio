@extends('frontend.layouts.app')

@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <header class="tc-header-style1 pb-70"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
            <div class="container"
                style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-10">
                        <h1 class=""> Synex Digital <br> <span class="fst-italic color-999 fw-500 fm-playfair">
                                Mastership
                            </span> </h1>
                        <p class="fsz-22 mt-60">Elevate your digital presence with Synex Digital – your partner <br>In web
                            development, app creation, SEO, and more! </p>
                        <div class="tags mt-90">
                            <a href="{{ route('talk') }}" class="butn main-hover-black fsz-24 me-3 mt-4 mt-lg-0"> <span>
                                    Schedule a Call
                                </span> </a>

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="rotate-box" data-speed="1" data-lag="0.7"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); will-change: transform;">
                            <a href="{{ route('about') }}"
                                class="rotate-circle fsz-30 rotate-text d-inline-block text-uppercase">
                                <svg class="textcircle" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                        </path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle" textLength="900"> . read more about us . Synex
                                            Digital</textPath>
                                    </text>
                                </svg>
                            </a>
                            <img src="{{ asset('default/default.png') }}" class="icon fsz-45" width="40"
                                alt="Synex Digital">
                        </div>
                    </div>
                </div>

            </div>
        </header>
        {{-- Portfolio  --}}
        <section class="tc-portfolio-style1">
            <div class="container">
                <div class="tc-section-title-style1 mb-15">
                    <h2> Featured <span> Works </span> </h2>
                </div>
                <div class="content">
                    <div class="row">
                        @forelse ($projects->take(5) as $key => $project)
                            <div class="col-lg-{{ $key > 1 ? '4' : '6' }}">
                                <a href="{{ route('portfolio', $project->slugs) }}" class="portfolio-card md-card">
                                    <div class="img img-cover">
                                        <img src="{{ asset('uploads/project/' . $project->thumbnail) }}" alt="">
                                        <img src="{{ asset('uploads/project/' . $project->thumbnail) }}" alt="">
                                        <span class="icon"> <i class="fa-solid fa-arrow-right"></i> </span>
                                    </div>
                                    <div class="info pt-40">
                                        <h3 class="fsz-30 mb-10">{{ $project->title }}</h3>
                                    </div>
                                </a>
                            </div>
                        @empty
                            No data Found
                        @endforelse
                    </div>
                </div>
                <div class="text-center">
                    <div class="button_su mt-90">
                        <span class="su_button_circle bg-black desplode-circle"
                            style="left: -31.0526px; top: -12.7551px;"></span>
                        <a href="#" class="butn text-capitalize button_su_inner hover-white">
                            <span class="button_text_container"> See more work <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        {{-- Service --}}
        <section class="tc-partners-style1">
            <div class="container">
                <div class="tc-section-title-style1 mb-90">
                    <h2> Our Main <span> Services </span> </h2>
                </div>
                <div class="content">
                    <div class="row gx-3">
                        @forelse ($services as $service)
                            <div class="col-lg-3">
                                <a href="{{ route('our.service', $service->slugs) }}" class="partner-card wow fadeInUp"
                                    data-wow-delay="0.1s">
                                    <div class="logo">
                                        <img src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt=""
                                            class="main-img lt_item">
                                        <img src="" alt="" class="main-img dr_item">
                                    </div>
                                    <div class="foot-inf">
                                        <p> {{ $service->title }} </p>
                                        <span class="icon"> <i class="fa-solid fa-plus"></i> </span>
                                    </div>
                                    <div class="info">
                                        <p> {{ $service->description }} </p>
                                    </div>
                                </a>
                            </div>
                        @empty
                        @endforelse


                    </div>
                    <div class="numbs wow fadeInUp">
                        <div class="numb-card">
                            <h2> <span class="counter"> 4 </span> + </h2>
                            <p> Years of <br> Experience </p>
                        </div>

                        <div class="numb-card">
                            <h2> <span class="counter"> 40 </span> + </h2>
                            <p> Projects </p>
                        </div>

                        <div class="numb-card">
                            <h2> <span class="counter"> 10 </span> + </h2>
                            <p> Designers <br> and Developers </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Partner --}}
        <!--  start testimonials  -->
        <section class="tc-testimonials-style1">
            <div class="container">
                <div class="tc-section-title-style1 mb-90">
                    <h2> Client’s <span> Testimonials </span> </h2>
                </div>
                <div
                    class="tc-testimonials-slider1 overflow-hidden wow fadeInUp swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-8be962241101103a8a" aria-live="off"
                        style="transform: translate3d(-1995px, 0px, 0px); transition-duration: 0ms;">

                        @forelse ($testimonials as $testimonial)
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2"
                                style="width: 635px; margin-right: 30px;" data-swiper-slide-index="0">
                                <div class="testi-card">
                                    <div class="text">
                                        “{{ $testimonial->comment }}”
                                    </div>
                                    <div class="btm-info">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="client-card d-flex align-items-center">
                                                    <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                        <img src="{{ asset('uploads/testimonial/' . $testimonial->profile) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="inf">
                                                        <h6 class="fsz-16 fw-bold mb-1"> {{ $testimonial->name }} </h6>
                                                        <p class="fsz-14 color-666"> CEO of <a href="#"
                                                                class="text-primary"> {{ $testimonial->field }} </a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span>
                                                    Play
                                                    Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>

                    <div class="text-center">
                        <div class="slider-controls">
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                                aria-controls="swiper-wrapper-8be962241101103a8a"></div>
                            <div
                                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 1"></span><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                    role="button" aria-label="Go to slide 2" aria-current="true"></span>
                            </div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-8be962241101103a8a"></div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
    </div>

    {{-- Our Team --}}
    <div class="tc-team-style1 main-box-style1 bg-dark1 radius-9 mx-4 my-3">
        <div class="container">
            <div class="tc-section-title-style1 mb-60 text-start">
                <h2 class="text-white"> Meet Our <span class="text-white"> Amazing Team </span> </h2>
            </div>
            <div class="content">
                <div class="row">
                    @forelse ($teams->take(5) as $key => $team)
                        <div class="col-lg-{{ $key == 1 ? '4' : '2' }} {{ $key == 4 ? 'ord-last' : '' }}">
                            <a href="#" class="team-img-card img-cover {{ $key == 1 ? 'lg-card' : '' }} wow zoomIn"
                                data-wow-delay="0.2s">
                                <img src="{{ asset('uploads/team/' . $team->profile) }}" alt="">
                                <div class="info">
                                    <h6> {{ $team->name }} </h6>
                                </div>
                            </a>

                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    {{-- Slider --}}
    <div class="slider-content float_box_container overflow-hidden pt-100 pb-100">
        <div class="tc-awards-slider1 swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-fe55dd622d2ce487" aria-live="off"
                style="transition-duration: 10000ms; transform: translate3d(-9266.39px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                    aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                    aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                    aria-label="3 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                    aria-label="4 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="4"
                    role="group" aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group"
                    aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group"
                    aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 5"
                    style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 5"
                    style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="4" role="group"
                    aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                    role="group" aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1"
                    role="group" aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group"
                    aria-label="3 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group"
                    aria-label="4 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="4"
                    role="group" aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
@endsection
