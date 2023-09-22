@extends('frontend.layouts.app')

@section('style')
    <style>
        .tc-single-project-style1 {
            padding: 120px 0;
            color: #1b1b1e;
        }
        .main-info {
            padding: 50px 0;
            border-bottom: 1px solid rgba(12, 86, 237, 0.2666666667);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .item {
            -webkit-margin-end: 60px;
            margin-inline-end: 60px;
        }
        .tc-inner-footer-style1 {
            background-color: #1b1b1e;
            color: #fff;
        }
        .mind{
            font-size: 2rem;
            font-family: monospace;
        }
        @media screen and (max-width: 991px){
            .main-info {
                display: block;
            }
        }
        .mind{
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('content')
<div class="tc-inner-header-style1" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
    <!--  start header  -->
    <div class="header-content text-center">
        <div class="container" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <p class="fsz-14 text-uppercase color-blue1 mb-10"> Welcome to Synex Digital </p>
            <h2 class="fsz-80 text-capitalize"> {{ $project->title }} </h2>
        </div>
    </div>
    {{-- <img src="" alt="" class="symbol1">
    <img src="" alt="" class="symbol2"> --}}
</div>

<section class="tc-single-project-style1">
    <div class="container">
        <div class="main-img img-cover">
            <img src="{{ asset('uploads/project/'.$project->thumbnail) }}" alt="">
        </div>
        <div class="main-info">
            <div class="item">
                <p class="fsz-14 text-uppercase color-666 mb-10"> Author </p>
                <h5 class="fsz-24 fw-bold mb-0"> {{ $project->client }} </h5>
            </div>
            <div class="item">
                <p class="fsz-14 text-uppercase color-666 mb-10"> date </p>
                <h5 class="fsz-24 fw-bold mb-0"> {{ $project->created_at->format('Y-m-d') }} </h5>
            </div>
            <div class="item">
                <p class="fsz-14 text-uppercase color-666 mb-10"> budget </p>
                <h5 class="fsz-24 fw-bold mb-0"> & {{ $project->budget }} </h5>
            </div>
            <div class="item">
                <p class="fsz-14 text-uppercase color-666 mb-10"> services </p>
                <h5 class="fsz-24 fw-bold mb-0"> aaaa </h5>
            </div>
            <a href="#0" class="icon"> <i class="fal fa-long-arrow-right"></i> </a>
        </div>
        <div class="sub-title mt-60 mb-40">
            <h3 class="fsz-40"> Project Overview </h3>
        </div>
        <div class="text fsz-16 color-777 mt-30">
            {!! $project->content !!}
        </div>
    </div>
</section>
<section class="tc-inner-footer-style1">
    <div class="foot-content">
        <div class="info text-center">
            <p><div class="mind"> got a project in mind? </div></p>
            <h2 ><div ><a href="">  let’s talk! </a> </div></h2>

        </div>
    </div>
</section>
@endsection