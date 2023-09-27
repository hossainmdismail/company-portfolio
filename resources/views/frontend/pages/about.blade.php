@extends('frontend.layouts.app')

@section('style')
    <style>
        .f1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: #999999;
        }

        p.f3 {
            font-size: 1rem;
            padding: 1rem;
        }

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

        .mind {
            font-size: 2rem;
            font-family: monospace;
        }

        @media screen and (max-width: 991px) {
            .main-info {
                display: block;
            }
        }

        .mind {
            font-size: 1.2rem;
        }

        section.tc-inner-footer-style1 {
            margin: 0 24px 0 24px;
            border-radius: 2rem;
        }
    </style>
@endsection
@section('content')
    <div class="tc-team-style1 main-box-style1 bg-white radius-9 mx-4 my-3">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 8rem">
                <div class="col-12 col-md-6 text-center text-md-end" style="font-size: 3rem; font-weight: 800;">
                    <span style="color: #737373;">WHO</span><br> WE <br> ARE
                </div>
                <div class="col-12 col-md-6" style="border-left: solid #737373 3px;">
                    <p style="text-align: left;font-size: 16px">
                        Synex Digital is a premier provider of web development and testing services. Having talented web
                        engineers on board, we craft compelling web, desktop, and mobile applications for our clients.
                        Since our inception, we have partnered with numerous companies and delivered operational gains to
                        startup, emerging, and established organizations in the United States and Canada.
                    </p>
                </div>
            </div>

            <div class="row">
                <h3 style="margin-bottom: 4rem">BENEFITS OF WORKING WITH SYNEX DIGITAL</h3>

                <div class="col-12 col-md-6 p-4">
                    <i class="fa-solid fa-rocket f1"></i>
                    <h4 class="f2">Quick Start</h4>
                    <p class="f3">
                        Our teams can be ramped up quickly and managed autonomously to implement and execute agreed plans.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <i class="fa-solid fa-person-walking-arrow-loop-left f1"></i>
                    <h4 class="f2">Top Quality Engineers</h4>
                    <p class="f3">
                        Our hiring process is constantly active to ensure your access to the best IT professionals in the
                        market.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <i class="fa-solid fa-road-circle-check f1"></i>
                    <h4 class="f2">End to End Management</h4>
                    <p class="f3">
                        We are responsible for your project completion and team management from start to end, guaranteeing
                        quality product output.
                    </p>
                </div>
                <div class="col-12 col-md-6 p-4">
                    <i class="fa-solid fa-sliders f1"></i>
                    <h4 class="f2">Operational Efficiency</h4>
                    <p class="f3">
                        Our cost effective services help reduce your costs to remain competitive without compromising
                        quality.
                    </p>
                </div>

            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-6">

                </div>
                <div class="col-12 col-md-6"></div>
            </div>

        </div>
    </div>


    <section class="tc-inner-footer-style1">
        <div class="foot-content">
            <div class="info text-center">
                <p>
                <div class="mind"> got a project in mind? </div>
                </p>
                <h2>
                    <div><a href="{{ route('talk') }}"> let’s talk! </a> </div>
                </h2>

            </div>
        </div>
    </section>
@endsection
