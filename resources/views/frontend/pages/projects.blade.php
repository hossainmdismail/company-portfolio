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

        .mind {
            font-size: 2rem;
            font-family: monospace;
        }

        h2.text-capitalize {
            font-size: 3rem;
        }

        @media screen and (max-width: 991px) {
            .main-info {
                display: block;
            }

        }

        @media screen and (max-width: 720px) {
            h2.text-capitalize {
                font-size: 2rem;
            }
        }

        .mind {
            font-size: 1.2rem;
        }
    </style>
@endsection

@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <div class="container text-center"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);padding-top: 6rem">
            <p class="fsz-14 text-uppercase color-blue1 mb-10"> Welcome to Synex Digital </p>
            <h2 class="text-capitalize"> Portfolio Grid </h2>
        </div>
        <section class="tc-portfolio-grid-style1 pt-120 pb-120">
            <div class="container">
                <div class="row gx-5">
                    @forelse ($projects as $project)
                        <div class="col-lg-4">
                            <div class="portfolio-card mb-80 wow fadeInUp slow">
                                <div class="img th-400 overflow-hidden img-cover">
                                    <img src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                        alt="{{ $project->title }}">
                                </div>
                                <div class="info pt-30">
                                    <p class="fsz-14 text-uppercase color-999 mb-10"> design, ux </p>
                                    <h5> <a href="{{ route('portfolio', $project->slugs) }}"
                                            class="fsz-24 fw-bold hover-blue1">
                                            {{ $project->title }} </a> </h5>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                {{-- <div class="text-center">
                <div class="button_su border-0 rounded-0">
                    <span class="su_button_circle bg-light1 desplode-circle"></span>
                    <a href="#"
                        class="butn text-uppercase border-1 border_light border button_su_inner bg-transparent py-4 px-5 rounded-0">
                        <span class="button_text_container fsz-14 color-blue1"> more works <i class="fal fa-plus ms-2"></i>
                        </span>
                    </a>
                </div>
            </div> --}}
            </div>
        </section>
    </div>
    <section class="tc-inner-footer-style1">
        <div class="foot-content">
            <div class="info text-center">
                <p>
                <div class="mind"> got a project in mind? </div>
                </p>
                <h2>
                    <div><a href=""> let’s talk! </a> </div>
                </h2>

            </div>
        </div>
    </section>
@endsection
