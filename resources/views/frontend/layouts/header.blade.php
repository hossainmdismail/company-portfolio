<div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
    <!--  start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light style1">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('default/default.png') }}" alt="" class="lt_item" style="max-width: 50%">

            </a>
            <div class="logo-text fsz-14">
                Build | Create | Prolong
            </div>
            <span class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="border-color: transparent">
                <i class="fa-solid fa-bars-staggered" id="navbtn" style="font-size: 1.7rem; color: #3f3f3f"></i>
            </span>
            <div class="navbar-collapse mt-3 mt-lg-0 collapse" id="navbarSupportedContent" style="">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="font-size: 1.3rem; padding-inline-end: 20px">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>


                    <li class="nav-item" style="font-size: 1.3rem; padding-inline-end: 20px">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <li class="nav-item" style="font-size: 1.3rem; padding-inline-end: 20px">
                        <a class="nav-link" href="{{ route('portfolio.grid') }}">Portfolio</a>
                    </li>

                </ul>
                <div class="button_su">
                    <span class="su_button_circle desplode-circle bg-dark"></span>
                    <a href="{{ route('talk') }}" class="butn text-capitalize button_su_inner bg-black py-3 px-4">
                        <span class="button_text_container fsz-14 text-white"> Start Project</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="side_menu style-1" id="side_menu">
    <a href="#0" class="side_menu_cls">
        <i class="la la-times fs-3"></i>
    </a>
    <div class="content">
        <div class="logo">
            <a href="#" class="w-100">
                <img src="" alt="" class="lt_item">
                <img src="" alt="" class="dr_item">
            </a>
        </div>
        <div class="pages_links">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">about</a></li>
                <li><a href="{{ route('privacy') }}">Privacy & Policy</a></li>
            </ul>
        </div>
        <div class="side_foot">
            <h5> get in touch </h5>
            <div class="row">
                <div class="col-lg-6">
                    <a href="#"> <i class="la la-phone-alt me-2"></i> 01757647319 </a>
                </div>
                <div class="col-lg-6">
                    <a href="#"> <i class="la la-envelope me-2 mt-4 mt-lg-0"></i> contact@synexdigital.com </a>
                </div>
            </div>
        </div>
    </div>
</div>
