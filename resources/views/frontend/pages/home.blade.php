@extends('frontend.layouts.app')
@section('style')
    <style>
        .img.img-cover {
            border: 1px solid #4b4b4b1f;
            box-shadow: 5px 3px 9px -11px;
        }
    </style>
@endsection


@php
    $service_slider = ['Web Customization', 'PHP-Laravel', 'SEO', 'Social Media Marketing', 'Google Ads', 'API'];
@endphp

@section('headerTab')
    <div class="w-full lg:w-4/5 space-y-5">
        <h1 class="text-white text-2xl md:text-3xl lg:text-6xl font-bold leading-10">
            Unlock your <br>
            <span class="text-[#C2E812]"> business's potential</span>
            <br>
            with our assistance.
        </h1>
        <p class="text-sm font-normal text-gray-200 lg:text-base  leading-6">Synex
            Digital is a
            Professional Software Agency Platform. Here we will
            provide you only interesting content, which you will
            like very much. We're dedicated to providing you the
            best of Software Agency , with a focus on dependability
            and IT Service.</p>
        <div class="flex gap-6 pt-5 text-center flex-col md:flex-row">
            <a href="{{ route('portfolio.grid') }}"
                class="py-2.5 px-5 me-2 mb-2 text-base font-semibold text-gray-900 focus:outline-none bg-button-primary rounded-full duration-150 ease-in-out hover:bg-[#b8ec3ff0] ">Explore
                Our Portfolio</a>
            <a href="{{ route('about') }}"
                class="py-2.5 px-5 me-2 mb-2 text-base text-button-primary font-semibold focus:outline-none border border-button-primary bg-transparent rounded-full duration-150 ease-in-out hover:bg-[#b8ec3ff0] hover:text-black ">About
                us</a>
        </div>
        <div class="gap-6 py-8 flex items-center">
            <a href="#" class="flex -space-x-2">
                @forelse ($teams->take(5) as $key => $team)
                    <img class="inline-block h-14 w-14 rounded-full ring-2
       ring-[#0A4246] hover:ring-button-primary"
                        src="{{ asset('uploads/team/' . $team->profile) }}" alt="">
                @empty
                @endforelse

            </a>
            <p class="text-white font-semibold text-xl">We Have <br>
                Awesome Team</p>
        </div>
    </div>
    <div class="w-8/12 flex relative hidden lg:flex">
        <div
            class="flex rounded-3xl absolute bottom-3 overflow-hidden z-10 mt-20 w-80 ml-20 mb-0 -skew-x-12 p-4 border-l-4 border-b-4  border-primary-bg">
            <img class=" rounded-2xl mr-10 z-10" src="{{ asset('asset/Frontend/Rectangle 3.png') }}" alt>
        </div>
        <div
            class="flex rounded-3xl overflow-hidden absolute ml-56 w-80 top-10 right-0 -mr-10  mb-0 -skew-x-12 p-4 border-t-4 border-r-4 border-b-4  border-primary-bg border-t-opacity-50">
            <img class="w-min h-full rounded-2xl" src="{{ asset('asset/Frontend/Rectangle 3.png') }}" alt>
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <div class="mt-5 mb-10 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <!-- service part start  -->
            <div class="py-5 lg:py-10 flex flex-col gap-5">
                <p class="font-medium lg:font-semibold text-lg lg:text-2xl text-center text-[#6F840A]">Our
                    Service</p>
                <h2
                    class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9 font-figtree">
                    Going
                    further than just a cowering space,<br> Synex Digital offers
                    more.
                </h2>
            </div>
            <!-- service card start  -->
            <div class="py-0 md:py-4 lg:py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $key => $service)
                    <div class="card bg-cover bg-[{{ $key == 1 ? '#124346' : '#FFFFFF' }}] border-2 duration-200 ease-in-out hover:border-[#124346] hover:shadow-2xl hover:bg-[#124346] {{ $key == 1 ? 'text-white' : 'text-black' }} hover:text-white"
                        style="background-image: url({{ asset('asset/Frontend/Service_Card.png') }});">
                        <figure class="px-10 pt-10">
                            <img src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                                class="w-24 h-24 rounded-full p-2 bg-[#C2E812]" />
                        </figure>
                        <div class="card-body items-center text-center pt-14">
                            <h2 class="card-title font-semibold text-lg lg:text-2xl">{{ $service->title }}</h2>
                            <p class="font-medium text-sm leading-6">{{ $service->description }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <!-- service caard end -->
        <!-- about part start  -->
        <div class="py-10 flex flex-col-reverse md:flex-row lg:flex-row items-center gap-10">
            <div class="flex-1">
                <img class="rounded-lg h-full" src="{{ asset('asset/Frontend/Rectangle 3.png') }}" alt>
            </div>
            <div class="flex-1">
                <div class="flex flex-col gap-3 lg:gap-5">
                    <h3 class="font-medium lg:font-semibold text-center lg:text-left lg:text-2xl  text-[#6F840A]">
                        About
                        Us</h3>

                    <h2
                        class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center lg:text-left leading-6 lg:leading-9">
                        Going
                        further than just a cowering space,<br> Synex
                        Digital offers more.
                    </h2>
                    <p class="text-text-primary text-xs lg:text-lg font-semibold lg:font-medium text-left">Synex
                        Digital is a Professional Software Agency Platform.
                        Here we will provide you only interesting content,
                        which you will like very much. We're dedicated to
                        providing you the best of Software Agency, with a
                        focus on dependability and IT Service. We're working
                        to turn our passion for Software Agency into a
                        booming online website.</p>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6 py-0 lg:py-5">
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">4+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">YEARS OF <br>
                                EXPERIENCE</p>
                        </div>
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">44+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">Project
                                Complete</p>
                        </div>
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">10+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">DESIGNERS
                                AND DEVELOPERS</p>
                        </div>
                    </div>
                    <a href=""
                        class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">Learn
                        More</a>
                </div>
            </div>
        </div>
        <!-- about part end -->

        <!-- portfolio part start  -->
        <div class="py-10">
            <!-- Header Title and descripiton -->
            <div class="flex flex-col gap-3">
                <p class="font-semibold text-2xl text-center text-[#6F840A]">Our
                    Portfolio</p>
                <h2
                    class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                    Our
                    inventive productions
                </h2>
            </div>

            <!-- All tab with Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 py-11" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <!-- Card -->
                @foreach ($projects->take(4) as $project)
                    <a href="{{ route('portfolio', $project->slugs) }}"
                        class="border border-[#DBDBDB] group rounded-lg p-4 space-b-1 duration-150 hover:shadow-xl shadow-slate-300 border-none ring-1 ring-gray-300 hover:ring-2 hover:ring-[#124346]">
                        <div class="flex flex-col items-center rounded-lg mb-4">
                            <img class="rounded-lg" src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                alt="">
                        </div>
                        <h3 class="text-xl font-bold text-left text-[#111]">{{ $project->title }}</h3>
                        <p class="text-base font-medium">{{ $project->seo_description }}</p>
                    </a>
                @endforeach
            </div>

            <!-- Learn more Button -->
            <div class="text-center">
                <a href="{{ route('portfolio.grid') }}"
                    class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">View
                    More</a>
            </div>
        </div>
    </div>
    <!-- Testimonial -->
    <div class="py-10 mt-10" style="background-image: url('{{ asset('asset/Frontend/testimonial.png') }}')">
        <!-- Header Title and descripiton -->
        <div class="flex flex-col gap-3">
            <p class="font-semibold text-2xl text-center text-[#6F840A]">Testimonial</p>
            <h2 class="text-white text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Our
                inventive productions
            </h2>
        </div>

        <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <div class="owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="w-full mx-auto rounded-lg border border-gray-200 p-5 text-white font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="{{ asset('uploads/testimonial/' . $testimonial->profile) }}" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-white">{{ $testimonial->name }}</h6>
                                    <div>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>{{ $testimonial->comment }}<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End-->
    <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <!-- blog part start  -->
        <div class="pt-10">
            <div class="flex flex-col gap-5">
                <p class="font-semibold text-2xl text-center text-[#6F840A]">Our Blog</p>
                <h2
                    class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                    Latest Blog and Articles
                </h2>
            </div>
        </div>
        <div class="py-10">
            <div class="flex flex-col lg:flex-row gap-6">
                <div class="flex-1 block">
                    <div class="hero h-[500px;] lg:h-full relative rounded-xl"
                        style="background-image: url({{ asset('uploads/blog/' . $singleBlog->thumbnail) }});">
                        <div class="hero-overlay bg-gradient-to-tr from-black rounded-xl"></div>
                        <div class="flex flex-col gap-3 absolute left-6 bottom-8 text-white text-left">
                            <div class="flex gap-4">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M17.982 18.7252C17.2833 17.8001 16.3793 17.0498 15.3412 16.5336C14.3031 16.0173 13.1594 15.7491 12 15.7502C10.8407 15.7491 9.6969 16.0173 8.65883 16.5336C7.62077 17.0498 6.71675 17.8001 6.01801 18.7252M17.982 18.7252C19.3455 17.5124 20.3071 15.9137 20.7412 14.1413C21.1753 12.3688 21.0603 10.5063 20.4115 8.80067C19.7627 7.09506 18.6107 5.62697 17.1084 4.59109C15.6061 3.55521 13.8244 3.00049 11.9995 3.00049C10.1747 3.00049 8.39295 3.55521 6.89062 4.59109C5.38829 5.62697 4.23634 7.09506 3.58755 8.80067C2.93875 10.5063 2.82376 12.3688 3.25783 14.1413C3.6919 15.9137 4.65451 17.5124 6.01801 18.7252M17.982 18.7252C16.336 20.1934 14.2056 21.0033 12 21.0002C9.79404 21.0036 7.66425 20.1936 6.01801 18.7252M15 9.75019C15 10.5458 14.6839 11.3089 14.1213 11.8715C13.5587 12.4341 12.7957 12.7502 12 12.7502C11.2044 12.7502 10.4413 12.4341 9.87869 11.8715C9.31608 11.3089 9.00001 10.5458 9.00001 9.75019C9.00001 8.95454 9.31608 8.19148 9.87869 7.62887C10.4413 7.06626 11.2044 6.75019 12 6.75019C12.7957 6.75019 13.5587 7.06626 14.1213 7.62887C14.6839 8.19148 15 8.95454 15 9.75019Z"
                                            stroke="#FDFDFD" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-base ml-1 font-normal">Admin</p>
                                </div>
                            </div>
                            <h2 class="text-2xl font-bold">{{ $singleBlog->title }}</h2>
                            <p class="text-base font-normal w-4/5">{{ $singleBlog->seo_description }}</p>
                            <a href="{{ route('frontBlog', $singleBlog->slugs) }}"
                                class="text-lg font-semibold text-[#C2E812]">Read
                                More</a>
                        </div>
                    </div>

                </div>
                <div class="flex-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6  lg:px-0">
                        @forelse ($blogs as $blog)
                            <a href="{{ route('frontBlog', $blog->slugs) }}"
                                class="border rounded-lg p-4 hover:border-gray-700 hover:shadow-xl hover:cursor-pointer">
                                <figure>
                                    <img class="w-full" src="{{ asset('uploads/blog/' . $blog->thumbnail) }}"
                                        alt="">
                                </figure>
                                <div class="mt-6">
                                    <div class="flex gap-4">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <path
                                                    d="M14.9849 15.6044C14.4026 14.8335 13.6493 14.2083 12.7842 13.7781C11.9192 13.3478 10.9661 13.1244 9.99993 13.1252C9.0338 13.1244 8.08067 13.3478 7.21561 13.7781C6.35056 14.2083 5.59721 14.8335 5.01493 15.6044M14.9849 15.6044C16.1212 14.5937 16.9225 13.2615 17.2842 11.7845C17.646 10.3074 17.5501 8.75532 17.0095 7.33397C16.4688 5.91263 15.5089 4.68922 14.2569 3.82599C13.005 2.96276 11.5202 2.50049 9.99951 2.50049C8.47881 2.50049 6.99404 2.96276 5.7421 3.82599C4.49016 4.68922 3.5302 5.91263 2.98954 7.33397C2.44888 8.75532 2.35306 10.3074 2.71478 11.7845C3.0765 13.2615 3.87868 14.5937 5.01493 15.6044M14.9849 15.6044C13.6133 16.8279 11.838 17.5029 9.99993 17.5002C8.16162 17.5031 6.38679 16.8281 5.01493 15.6044M12.4999 8.12524C12.4999 8.78828 12.2365 9.42417 11.7677 9.89301C11.2989 10.3619 10.663 10.6252 9.99993 10.6252C9.33689 10.6252 8.701 10.3619 8.23216 9.89301C7.76332 9.42417 7.49993 8.78828 7.49993 8.12524C7.49993 7.4622 7.76332 6.82632 8.23216 6.35748C8.701 5.88863 9.33689 5.62524 9.99993 5.62524C10.663 5.62524 11.2989 5.88863 11.7677 6.35748C12.2365 6.82632 12.4999 7.4622 12.4999 8.12524Z"
                                                    stroke="#111111" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <p class="text-base font-normal">Admin</p>
                                        </div>
                                    </div>
                                    <h3 class="text-lg font-bold mt-2">{{ $blog->title }}</h3>
                                </div>
                            </a>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="text-center py-16">
                <a href="{{ route('blog.list') }}"
                    class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">View
                    All</a>
            </div>
        </div>
        <!-- blog part end -->
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>
@endsection
