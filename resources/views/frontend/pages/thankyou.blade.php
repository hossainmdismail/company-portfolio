@extends('frontend.layouts.app')

@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center">
                <div class=" col-10 col-md-4 text-center">
                    <div class="box mb-5">
                        <img src="{{ asset('default/icons8-box.gif') }}" alt="synex gif">
                    </div>
                    <h1 class="mb-4">
                        Thank You For <br><span class="fst-italic color-999 fw-500 fm-playfair"> Getting in Touch </span>
                        <div class="button_su mt-90">
                            <span class="su_button_circle bg-black desplode-circle"
                                style="left: 247.672px; top: 20.6262px;"></span>
                            <a href="#" class="butn text-capitalize button_su_inner hover-white">
                                <span class="button_text_container"> See more work <i
                                        class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </h1>
                    <p class="color-999 fw-500 fm-playfair mb-2">Thank you for reaching out to us! Your satisfaction
                        is our top priority, and we're here to help. <br>
                        We'll be sure to get back to you soon!</p>
                    <div class="button_su mt-30">
                        <span class="su_button_circle bg-black desplode-circle"
                            style="left: 247.672px; top: 20.6262px;"></span>
                        <a href="{{ route('home') }}" class="butn text-capitalize button_su_inner hover-white">
                            <span class="button_text_container"> Home <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
