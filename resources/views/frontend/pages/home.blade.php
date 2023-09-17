@extends('frontend.layouts.app')

@section('content')
    <header class="tc-header-style1 pb-70" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
        <div class="container" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-10">
                    <h1 class=""> Design. Development. <span class="fst-italic color-999 fw-500 fm-playfair"> Mastership </span> </h1>
                    <p class="fsz-22 mt-60"> We design and develop exceptional digital products and services, <br> eCommerce, and brand communication solutions. </p>
                    <div class="tags mt-90">
                        <a href="#" class="butn main-hover-black fsz-24 me-3 mt-4 mt-lg-0"> <span> <i class="la la-crown me-2"></i> Branding </span> </a>
                        <a href="#" class="butn main-hover-black fsz-24 me-3 mt-4 mt-lg-0"> <span> <i class="la la-bezier-curve me-2"></i> Interaction </span> </a>
                        <a href="#" class="butn main-hover-black fsz-24 me-3 mt-4 mt-lg-0"> <span> <i class="la la-bullseye me-2"></i> Marketing </span> </a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="rotate-box" data-speed="1" data-lag="0.7" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); will-change: transform;">
                        <a href="#" class="rotate-circle fsz-30 rotate-text d-inline-block text-uppercase">
                            <svg class="textcircle" viewBox="0 0 500 500">
                                <defs>
                                    <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                    </path>
                                </defs>
                                <text>
                                    <textPath xlink:href="#textcircle" textLength="900"> . read more about us . Swak agency </textPath>
                                </text>
                            </svg>
                        </a>
                        <i class="ti-arrow-top-right icon fsz-45"></i>
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
                    @forelse ($projects as $key => $project)
                        <div class="col-lg-{{ $key == 2?'12':'6' }}">
                            <a href="../inner_pages/page_single_project.html" class="portfolio-card md-card">
                                <div class="img img-cover">
                                    <img src="{{ asset('uploads/project/'.$project->thumbnail)}}" alt="">
                                    <img src="{{ asset('uploads/project/'.$project->thumbnail)}}" alt="">
                                    <span class="icon"> <i class="fa-solid fa-arrow-right"></i> </span>
                                </div>
                                <div class="info pt-40">
                                    <h3 class="fsz-30 mb-10">{{ $project->title }}</h3>
                                    {{-- <p class="fsz-14 color-999"> Branding, Web Design, Photography  </p> --}}
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
                    <span class="su_button_circle bg-black desplode-circle" style="left: -31.0526px; top: -12.7551px;"></span>
                    <a href="#" class="butn text-capitalize button_su_inner hover-white">
                        <span class="button_text_container"> See more work <i class="ti-arrow-top-right ms-2"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Service --}}
    <div class="tc-services-style1 main-box-style1 bg-white radius-9 mx-4 my-3">
        <div class="container">
            <div class="tc-section-title-style1 mb-40">
                <h2> Our Main <span> Services </span> </h2>
            </div>
            <div class="content">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <a href="../inner_pages/page_services.html" class="service-card wow fadeInUp">
                            <div class="icon mb-50">
                                <img src="assets/img/services/branding.svg" alt="">
                            </div>
                            <div class="info">
                                <h5 class="fsz-20 mb-30 fw-bolder"> Brand Identity </h5>
                                <p class="fsz-14 color-999 mb-20"> We bringing the history of your brand to the forefront gives an emotional dimension to your visual identity, </p>
                                <ul>
                                    <li> Brand Strategy </li>
                                    <li> Brand Consulting </li>
                                    <li> Photography </li>
                                    <li> 3D Design &amp; Illustration </li>
                                </ul>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="../inner_pages/page_services.html" class="service-card wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon mb-50">
                                <img src="assets/img/services/interaction.svg" alt="">
                            </div>
                            <div class="info">
                                <h5 class="fsz-20 mb-30 fw-bolder"> Interaction </h5>
                                <p class="fsz-14 color-999 mb-20"> We design and development digital products to help increase highest conversion rate for your business </p>
                                <ul>
                                    <li> Website &amp; Mobile App Design </li>
                                    <li> UX &amp; Product Design </li>
                                    <li> Product Development </li>
                                    <li> CRM &amp; System Management </li>
                                    <li> TVC &amp; Motion Design </li>
                                </ul>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="../inner_pages/page_services.html" class="service-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon mb-50">
                                <img src="assets/img/services/marketing.svg" alt="">
                            </div>
                            <div class="info">
                                <h5 class="fsz-20 mb-30 fw-bolder"> SEO &amp; Marketing </h5>
                                <p class="fsz-14 color-999 mb-20"> Help increase the traffic into your business via marketing online &amp; offline. Improve the rank of your business on the world </p>
                                <ul>
                                    <li> Marketing Strategy &amp; Consulting </li>
                                    <li> SEO / PPC </li>
                                    <li> Social Media Marketing </li>
                                </ul>
                                <span class="arrow"> <i class="ti-arrow-top-right"></i> </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Partner --}}
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3">
        <!--  start partners  -->
        <section class="tc-partners-style1">
            <div class="container">
                <div class="tc-section-title-style1 mb-90">
                    <h2> Partned with <span> 120+ Brands </span> </h2>
                </div>
                <div class="content">
                    <div class="row gx-3">
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp">
                                <div class="logo">
                                    <img src="assets/img/patrners/1.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/1_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Okgo </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.1s">
                                <div class="logo">
                                    <img src="assets/img/patrners/2.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/2_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> noxes </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.2s">
                                <div class="logo">
                                    <img src="assets/img/patrners/3.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/3_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Jamx </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.3s">
                                <div class="logo">
                                    <img src="assets/img/patrners/4.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/4_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Stripe </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp">
                                <div class="logo">
                                    <img src="assets/img/patrners/5.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/5_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> OAK </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.1s">
                                <div class="logo">
                                    <img src="assets/img/patrners/6.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/6_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Tek React JS </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.2s">
                                <div class="logo">
                                    <img src="assets/img/patrners/7.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/7_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Javast </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="#" class="partner-card wow fadeInUp" data-wow-delay="0.3s">
                                <div class="logo">
                                    <img src="assets/img/patrners/8.png" alt="" class="main-img lt_item">
                                    <img src="assets/img/patrners/8_lt.png" alt="" class="main-img dr_item">
                                </div>
                                <div class="foot-inf">
                                    <p> Snyk </p>
                                    <span class="icon"> <i class="la la-plus"></i> </span>
                                </div>
                                <div class="info">
                                    <p> Noxes is Norways largest financial services group. We help developed numerous digital product and promote websites for the company </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="numbs wow fadeInUp">
                        <div class="numb-card">
                            <h2> <span class="counter"> 10 </span> + </h2>
                            <p> Years of <br> Experience </p>
                        </div>
    
                        <div class="numb-card">
                            <h2> <span class="counter"> 60 </span> </h2>
                            <p> awards winning <br> accquired </p>
                        </div>
    
                        <div class="numb-card">
                            <h2> <span class="counter"> 45 </span> + </h2>
                            <p> multidisciplinary <br> designers and managers </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  end partners  -->
    
        <!--  start testimonials  -->
        <section class="tc-testimonials-style1">
            <div class="container">
                <div class="tc-section-title-style1 mb-90">
                    <h2> Client’s <span> Testimonials </span> </h2>
                </div>
                <div class="tc-testimonials-slider1 overflow-hidden wow fadeInUp swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-8be962241101103a8a" aria-live="off" style="transform: translate3d(-1995px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-label="1 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="testi-card">
                                <div class="text">
                                    “Swak - A studio with passionate, professional and full creativity. Much more than what i’m expect. Great services, high quality product and affordable price. I’m extremly satisfied!.”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/4.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="2 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="testi-card">
                                <div class="text">
                                    “Thank you very much for the support of the Swak team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. We are so lucky to have yous. Swak will always be our #1 choice!”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/2.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" role="group" aria-label="1 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="testi-card">
                                <div class="text">
                                    “Swak - A studio with passionate, professional and full creativity. Much more than what i’m expect. Great services, high quality product and affordable price. I’m extremly satisfied!.”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/4.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="testi-card">
                                <div class="text">
                                    “Thank you very much for the support of the Swak team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. We are so lucky to have yous. Swak will always be our #1 choice!”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/2.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" role="group" aria-label="1 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="0">
                            <div class="testi-card">
                                <div class="text">
                                    “Swak - A studio with passionate, professional and full creativity. Much more than what i’m expect. Great services, high quality product and affordable price. I’m extremly satisfied!.”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/4.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="2 / 2" style="width: 635px; margin-right: 30px;" data-swiper-slide-index="1">
                            <div class="testi-card">
                                <div class="text">
                                    “Thank you very much for the support of the Swak team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. We are so lucky to have yous. Swak will always be our #1 choice!”
                                </div>
                                <div class="btm-info">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="client-card d-flex align-items-center">
                                                <div class="img icon-45 rounded-circle overflow-hidden img-cover me-3">
                                                    <img src="assets/img/users/2.png" alt="">
                                                </div>
                                                <div class="inf">
                                                    <h6 class="fsz-16 fw-bold mb-1"> Bradley Gordon </h6>
                                                    <p class="fsz-14 color-666"> CEO of <a href="#" class="text-primary"> Zumar </a> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                                            <a href="#" class="butn main-hover-black fsz-14 px-4 py-3"> <span> Play Video <i class="la la-play ms-1 fsz-18"></i> </span> </a>
                                        </div> -->
                                    </div>
                                </div>
                                
                            </div>
                        </div></div>
                    <div class="text-center">
                        <div class="slider-controls">
                            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8be962241101103a8a"></div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span></div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8be962241101103a8a"></div>
                        </div>
                    </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </section>
        <!--  end testimonials  -->
    </div>
    {{-- Our Team --}}
    <div class="tc-team-style1 main-box-style1 bg-dark1 radius-9 mx-4 my-3">
        <div class="container">
            <div class="tc-section-title-style1 mb-60 text-start">
                <h2 class="text-white"> Meet Our <span class="text-white"> Amazing Team </span> </h2>
            </div>
            <div class="content">
                <div class="row">
                    @forelse ($teams as $key => $team)
                        <div class="col-lg-{{ $key == 1?'2':'2' }} {{ $key == 4?'ord-last':'' }}">
                            <a href="#" class="team-img-card img-cover  wow zoomIn" data-wow-delay="0.2s">
                                <img src="{{ asset('uploads/team/'.$team->profile) }}" alt="">
                                <div class="info">
                                    <h6> {{$team->name}} </h6>
                                </div>
                            </a>

                        </div>
                    @empty
                        
                    @endforelse
                    
                    {{-- <div class="col-lg-4">
                        <a href="#" class="team-img-card img-cover lg-card wow zoomIn">
                            <img src="assets/img/users/3.png" alt="">
                            <div class="info">
                                <h6> John Deo </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="team-img-card img-cover wow zoomIn" data-wow-delay="0.2s">
                            <img src="assets/img/users/4.png" alt="">
                            <div class="info">
                                <h6> John Deo </h6>
                            </div>
                        </a>
                        <a href="#" class="team-img-card img-cover wow zoomIn" data-wow-delay="0.2s">
                            <img src="assets/img/users/5.png" alt="">
                            <div class="info">
                                <h6> John Deo </h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 ord-last">
                        <a href="#" class="team-img-card img-cover wow zoomIn" data-wow-delay="0.4s">
                            <img src="assets/img/users/6.png" alt="">
                            <div class="info">
                                <h6> John Deo </h6>
                            </div>
                        </a>
                        <div class="button_su wow zoomIn" data-wow-delay="0.4s">
                            <span class="su_button_circle bg-blue3 desplode-circle" style="left: 99px; top: 313px;"></span>
                            <a href="#" class="butn button_su_inner bg-transparent">
                                <span class="button_text_container fsz-16 fw-400 lh-5 text-uppercase text-white">
                                    See All <br> Members <br> <i class="ti-arrow-top-right mt-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <a href="#" class="team-img-card img-cover wow zoomIn" data-wow-delay="0.6s">
                            <img src="assets/img/users/7.png" alt="">
                            <div class="info">
                                <h6> John Deo </h6>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- Slider --}}
    <div class="slider-content float_box_container overflow-hidden pt-100 pb-100">
        <div class="tc-awards-slider1 swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-fe55dd622d2ce487" aria-live="off" style="transition-duration: 10000ms; transform: translate3d(-9266.39px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="margin-right: 80px;">
                    <div class="service-card">
                        <h2> <a href="#">Get Free Quote</a> </h2>
                    </div>
                </div></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        <div class="float_box" style="left: 1436px; top: 11.4408px;">
            <p> <i class="ti-arrow-top-right fsz-70"></i> </p>
        </div>
    </div>
@endsection