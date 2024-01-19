@extends('frontend.layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.theme.default.min.css">
    <script src="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.js"></script>
@endsection

@section('headerTab')
    <div class="grid  grid-cols-1 lg:grid-cols-2 gap-2">
        <div>
            <h1 class="text-white text-2xl md:text-3xl lg:text-5xl font-bold mb-3" style="line-height: 1.2;">
                Business IT Solutions: <br>
                <span class="text-[#C2E812]">Pioneering Excellence for</span>
                <br>
                Your Technological Needs

            </h1>
            <p class="text-sm font-normal text-gray-200 lg:text-base " style="line-height: 1.6;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga maiores iusto, error reprehenderit suscipit perferendis omnis alias eos ipsa repudiandae optio architecto. Facere porro optio, quaerat nam deserunt quo quia voluptatum, hic amet inventore delectus. Facilis laudantium impedit alias. Vero necessitatibus distinctio animi similique nisi reiciendis blanditiis praesentium officiis possimus accusantium magni perferendis magnam esse, non, vitae maxime ut temporibus consequatur officia eveniet odit! Dicta recusandae sint magnam similique maiores temporibus eius tempora voluptas, repudiandae ratione nam, placeat dignissimos qui ipsum officiis pariatur expedita odio veniam cupiditate esse dolorem? Officiis, necessitatibus. Doloribus accusamus quibusdam explicabo qui vero ex minima et.
                {{-- <a href="{{ route('about') }}" class="underline text-button-primary">See more</a> --}}
            </p>
            <div class="flex gap-6 pt-5 text-center flex-col md:flex-row">
                <a href="{{ route('portfolio.grid') }}"
                    class="py-2.5 px-5 mt-2 mb-2 text-base font-semibold text-gray-900 focus:outline-none bg-button-primary rounded-full duration-150 ease-in-out hover:bg-[#b8ec3ff0] ">Explore
                    Our Service</a>
                {{-- <a href="{{ route('about') }}"
                class="py-2.5 px-5 mt-2 mb-2 text-base text-button-primary font-semibold focus:outline-none border border-button-primary bg-transparent rounded-full duration-150 ease-in-out hover:bg-[#b8ec3ff0] hover:text-black ">Project</a> --}}
            </div>
            <div class="gap-6 py-8 flex items-center">
                <a href="#" class="flex -space-x-2">
                    @forelse ($teams->take(5) as $key => $team)
                        <img class="inline-block h-14 w-14 rounded-full ring-2 ring-[#0A4246] hover:ring-button-primary"
                            src="{{ asset('uploads/team/' . $team->profile) }}" alt="{{ $team->name }}">
                    @empty
                    @endforelse

                </a>
                <p class="text-white font-semibold text-xl">We Have <br>
                    Awesome Team</p>
            </div>
        </div>
        <div class="pt-0 pb-6 pl-0 lg:pl-28 lg:pt-14 lg:pb-20">
            <div class="relative py-8 pl-8 flex gap-4">
                <div class="absolute h-full rounded-xl opacity-10 bg-black top-0 left-0" style="width: 58%"></div>
                <div class="w-full block rounded-xl bg-gray-50 overflow-hidden z-0">
                    <img src="{{ asset('default/headers.webp') }}" alt="" class="h-full">
                </div>
                <div class="w-full flex flex-col gap-4 z-10">
                    <div class="col-span-1 rounded-xl bg-gray-50 px-4 py-6 text-center">
                        <h4 class="text-4xl font-semibold pb-4">249</h4>
                        <p>Successful Projects</p>
                    </div>
                    <div class="h-full overflow-hidden col-span-1 rounded-xl bg-gray-50">
                        <img src="{{ asset('default/header2.webp') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('content')
    <div class="mx-auto max-w-screen-xl px-5 md:px-8 lg:px-2">
        <div class=" pt-10 mb-10  mx-auto max-w-screen-xl px-0 md:px-8 lg:px-0">
            <!-- service part start  -->
            <div class="py-5 lg:py-10 flex flex-col gap-5 items-center">
                <p class="font-medium lg:font-semibold text-lg lg:text-2xl text-center text-[#6F840A]">Our Service</p>
                <h2
                    class="max-w-lg text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9 font-figtree">
                    Elevating Your Business with Innovative Services
                </h2>
            </div>
            <!-- service card start  -->
            <div class="py-0 md:py-4 lg:py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $key => $service)
                    <?php
                    // Array of predefined colors
                    $colors = ['#0F393C', '#FFC857', '#32CD32', '#7BC950', '#F07167', '#F95738'];

                    // Get the index within the range of colors
                    $colorIndex = $key % count($colors);

                    $selectedColor = $colors[$colorIndex];

                    $words = explode(' ', $service->description);
                    $count = count($words);
                    ?>

                    <a href="{{ route('our.service', $service->slugs) }}"
                        class="flex flex-col justify-between rounded-xl p-6 bg-cover border duration-200 ease-in-out shadow-lg text-white overflow-hidden"
                        style="background-color: {{ $selectedColor }};">
                        <div class="items-center">
                            <h3 class=" font-semibold text-lg lg:text-2xl">{{ $service->title }}</h3>
                            <p class="serviceDescription font-medium text-sm leading-6 text-justify mt-4 z-30">
                                {{ implode(' ', array_slice($words, 0, 25)) }}{{ $count > 25 ? '...' : '' }}
                            </p>
                            <figure class="w-full z-0 flex justify-end items-end mt-4 relative h-60 md:h-72">
                                <img src="{{ asset('uploads/service/' . $service->thumbnail) }}"
                                    alt="{{ $service->title }}" class="w-80 absolute -right-10 -bottom-9" />
                            </figure>
                        </div>
                    </a>
                @empty
                @endforelse
            </div>
        </div>
        <!-- service caard end -->
        <!-- about part start  -->
        <div class="py-10 flex flex-col-reverse md:flex-row lg:flex-row lg:py-16 items-center gap-10">
            <div class="flex-1">
                <img class="rounded-lg h-full" src="{{ asset('default/thumbBody.jpg') }}" alt="Synex Digital group">
            </div>
            <div class="flex-1">
                <div class="flex flex-col gap-3 lg:gap-5">
                    <h3 class="font-semibold text-2xl text-center text-[#6F840A]">
                        Our Records</h3>

                    <h2
                        class="text-text-primary text-base lg:text-3xl font-semibold lg:font-bold text-center lg:text-left leading-6 lg:leading-9">
                        Navigating the IT Landscape with Precision
                    </h2>
                    <p class="text-justify text-text-primary text-sm lg:text-lg font-semibold lg:font-medium text-left">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque animi magni dignissimos est molestias, nihil officia nemo consequuntur neque iusto ipsa illo corrupti quam quasi. Aut, eaque voluptatum. Amet similique nihil ducimus eius nobis? Magni architecto corporis praesentium facere? In debitis libero quasi magni? Quam aut, laborum ab expedita pariatur, quos minus nulla autem enim rerum neque sit distinctio. Rerum, voluptatem asperiores maiores ea inventore temporibus fuga, quia magnam corporis nam itaque quas consequuntur, dicta nemo cum numquam ad deleniti nobis eos obcaecati maxime? Sequi aliquid, repudiandae doloribus eos molestias rerum necessitatibus cupiditate enim, rem corrupti dolor quisquam doloremque autem!
                    </p>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6 py-0 lg:py-5">
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">5+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">YEARS OF <br>
                                EXPERIENCE</p>
                        </div>
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">89+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">Project
                                Complete</p>
                        </div>
                        <div class="bg-[#e7e7e7] py-2 lg:py-5 text-center space-y-2 lg:space-y-2 rounded-lg">
                            <h1 class="text-[#04364A] font-medium lg:font-bold text-2xl lg:text-4xl">22+</h1>
                            <p class="text-[#353535] font-medium text-xs lg:text-lg">DESIGNERS
                                AND DEVELOPERS</p>
                        </div>
                    </div>
                    {{-- <a href="{{ route('about') }}"
                        class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">Learn
                        More</a> --}}
                </div>
            </div>
        </div>
        <!-- about part end -->

        <!-- portfolio part start  -->
        <div class="py-10 lg:py-20">
            <!-- Header Title and descripiton -->
            <div class="flex flex-col gap-3 items-center">
                <p class="font-semibold text-2xl text-center text-[#6F840A]">Our
                    Project</p>
                <h2
                    class="max-w-lg text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                    Crafting Tailored Business IT Solutions
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
                            <img class="rounded-lg border-b" src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                alt="">
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="rounded-lg px-2 py-1 text-xs bg-opacity-10"
                                style="background: #afe33d6b;width: fit-content; padding: 2px 8px 2px 8px;">
                                {{ $project->created_at->format('d M Y') }}
                            </p>
                            <div>
                                <h3 class="text-xl font-bold text-left text-[#111]">{{ $project->title }}</h3>
                                <p class="text-base font-medium text-gray-500">{{ $project->seo_description }}</p>
                            </div>
                        </div>
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
    <div class="py-10  mt-10 lg:py-10" style="background-image: url('{{ asset('asset/Frontend/testimonial.png') }}')">
        <!-- Header Title and descripiton -->
        <div class="flex flex-col gap-3 items-center">
            <p class="font-semibold text-2xl text-center text-[#6F840A]">Testimonial</p>
            <h3
                class="max-w-lg text-white text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Genesys Engage: Redefining Customer Contact
            </h3>
        </div>

        <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <div class="owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="w-full mx-auto rounded-lg border border-gray-200 p-5 text-white font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="{{ asset('uploads/testimonial/' . $testimonial->profile) }}"
                                        alt="">
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
    <div class="mt-5 lg:mt-0 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <!-- blog part start  -->
        <div class="pt-10 lg:mt-20">
            <div class="flex flex-col gap-5">
                <p class="font-semibold text-2xl text-center text-[#6F840A]">Our Blog</p>
                <h2
                    class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                    Latest Blog and Articles
                </h2>
            </div>
        </div>
        <div class="py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="grid grid-cols-1">
                    <a href="{{ route('frontBlog', $singleBlog->slugs) }}"
                        class=" flex flex-col border rounded-lg p-4 hover:border-gray-700 hover:shadow-xl hover:cursor-pointer">
                        <figure>
                            <img class="w-full rounded-md" src="{{ asset('uploads/blog/' . $singleBlog->thumbnail) }}"
                                alt="{{ $singleBlog->title }}">
                        </figure>
                        <div class="mt-6">
                            <div class="flex gap-4">
                                <div class="flex flex-col gap-2">
                                    <p class="rounded-lg px-2 py-1 text-xs"
                                        style="background: #afe33d;width: fit-content; padding: 2px 14px 2px 14px;">
                                        {{ $singleBlog->category->name }}
                                    </p>
                                    <p class="text-sm font-normal text-gray-500">
                                        {{ $singleBlog->created_at->format('d M Y') }}
                                    </p>
                                </div>
                            </div>
                            <h3 class="text-lg font-bold mt-2">{{ $singleBlog->title }}</h3>
                            <p class="hidden sm:block text-base text-gray-700">{{ $singleBlog->seo_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="flex">
                    <div class="grid grid-cols-1 sm:grid-cols-2  gap-6  lg:px-0">
                        @forelse ($blogs as $blog)
                            <a href="{{ route('frontBlog', $blog->slugs) }}"
                                class="h-fit border rounded-lg p-4 hover:border-gray-700 hover:shadow-xl hover:cursor-pointer">
                                <figure>
                                    <img class="w-full rounded-lg" src="{{ asset('uploads/blog/' . $blog->thumbnail) }}"
                                        alt="{{ $blog->title }}">
                                </figure>
                                <div class="mt-6">
                                    <div class="flex gap-4">
                                        <div class="flex items-center gap-1">
                                            <p class="font-normal text-sm text-gray-500">
                                                {{ $blog->created_at->format('d M Y') }}</p>
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
            <div class="text-center py-8">
                <a href="{{ route('blog.list') }}"
                    class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">View
                    All</a>
            </div>
        </div>
        <!-- blog part end -->

        @include('frontend.layouts.newsletter')
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: false,
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
    <script>
        $(document).ready(function() {
            const visited = localStorage.getItem('visited');

            if (!visited) {
                localStorage.setItem('visited', 'true');
                $('#preloader').show();
                $(window).on('load', function() {
                    $('#preloader').fadeOut('slow');
                });
            } else {
                $('#preloader').hide();
            }
        });
    </script>
@endsection
