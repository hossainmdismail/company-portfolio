@extends('frontend.layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.theme.default.min.css">
    <script src="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.js"></script>
@endsection

@section('headerTab')
    <div class="text-white text-center w-full">
        <h2 class="text-xl lg:text-4xl font-bold text-primary-bg">About</h2>
        <p class="text-sm lg:text-lg font-medium text-gray-200">Home > About</p>
    </div>
@endsection

@section('content')
    <div class="flex flex-col  gap-4 mt-5 lg:mt-20 mx-auto max-w-screen-xl px-5 md:px-8 md:flex-row lg:px-0">
        <div class="w-full space-y-4 md:space-y-5 lg:space-y-8 pt-5">
            <h2 class="text-xl lg:text-4xl md:text-3xl font-semibold lg:font-bold text-black">Going
                further than just a cowering space,Synex Digital offers
                more.</h2>
            <p class="text-sm lg:text-lg font-normal lg:font-medium text-gray-950">
                Driven by our passion for software agency, we are committed to transforming this enthusiasm into a thriving
                online platform. Whether you're seeking cutting-edge software development, innovative IT solutions, or
                expert consultancy, Synex Digital is your trusted partner every step of the way.
                Join us on our journey as we continue to set new standards in the software agency industry. Experience
                excellence with Synex Digital - where innovation meets reliability.</p>
        </div>
        <div class="w-full">
            <img class="w-full rounded-lg" src="{{ asset('asset/Frontend/about group.jpg') }}" alt>
        </div>
    </div>

    <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <!-- service part start  -->
        <div class="py-5 lg:py-10 flex flex-col gap-5">
            <p class="font-medium lg:font-semibold text-lg lg:text-2xl text-center text-[#6F840A]">Our
                Developers</p>
            <h2 class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Meet the dedicated minds behind Synex Digital
            </h2>
        </div>
        <!-- service card start  -->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-x-8 gap-y-10 text-center mt-12">
            {{-- Imran --}}
            <div>
                <img src="{{ asset('team/imran.jpg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Ali Imran Mehedi</h4>
                    <p class="text-xs mt-1">Founder & CEO</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/imehedi007" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/ali-imran-mehedi" target="_blank"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                    data-original="#0077b5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Esmail --}}
            <div>
                <img src="{{ asset('team/esmail.jpeg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Esmail Khalifa</h4>
                    <p class="text-xs mt-1">Co-founder & CTO</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/hossainmdismail" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/md-ismail-hossain-911a96236" target="_blank"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none  bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 0 0 2.882 0z"
                                    data-original="#0077b5" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Jubaer --}}
            <div>
                <img src="{{ asset('team/jubayer.jpg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Jobayer Hossain Shikder</h4>
                    <p class="text-xs mt-1">Backend Developer</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/Jobayer53" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Jahir --}}
            <div>
                <img src="{{ asset('team/jahirul.jpg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Mohammad Jahirul Islam</h4>
                    <p class="text-xs mt-1">Software Engineer</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/Jahir002201" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Tamim --}}
            <div>
                <img src="{{ asset('team/tamim.jpeg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Tanvir mahmud tamim</h4>
                    <p class="text-xs mt-1">MERN Stack Developer</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/tamim-dev" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Hamim --}}
            <div>
                <img src="{{ asset('team/hamim.jpeg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Muksitur Rahman Hamim</h4>
                    <p class="text-xs mt-1">Full-stack Developer</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/devhamim" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            {{-- ghos --}}
            <div>
                <img src="{{ asset('team/ghos.jpg') }}" class="w-32 h-32 rounded-full inline-block" />
                <div class="py-4">
                    <h4 class="text-base font-extrabold">Bijoy Ghosh</h4>
                    <p class="text-xs mt-1">Flutter developer</p>
                    <div class="space-x-4 mt-4">
                        <a href="https://github.com/Always-Bijoy" target="_blank" type="button"
                            class="w-7 h-7 inline-flex items-center justify-center rounded-full border-none outline-none bg-gray-100 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14px" fill="#333" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12c0 5.303 3.438 9.8 8.207 11.382.6.11.793-.26.793-.577 0-.286-.012-1.04-.015-2.04-3.348.724-4.042-1.613-4.042-1.613-.546-1.386-1.333-1.755-1.333-1.755-1.09-.745.083-.73.083-.73 1.205.085 1.838 1.238 1.838 1.238 1.07 1.836 2.807 1.305 3.496.997.108-.776.417-1.305.76-1.605-2.665-.307-5.466-1.332-5.466-5.93 0-1.31.468-2.383 1.235-3.223-.124-.308-.536-1.526.117-3.18 0 0 1.01-.322 3.3 1.233.958-.266 1.98-.398 3-.402 1.02.004 2.042.136 3 .402 2.29-1.555 3.297-1.233 3.297-1.233.656 1.654.244 2.872.12 3.18.77.84 1.233 1.913 1.233 3.223 0 4.61-2.805 5.62-5.475 5.92.43.373.817 1.104.817 2.223 0 1.604-.015 2.893-.015 3.286 0 .317.192.692.8.573C20.566 21.792 24 17.304 24 12c0-6.627-5.373-12-12-12z"
                                    data-original="#000000" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-cover bg-[#ecebeb] px-4 lg:px-0 mt-5">
        <div class="mx-auto max-w-screen-xl py-9 text-center">
            <!-- navigation bar start-->
            <div class="flex justify-center items-center lg:justify-between gap-5">
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">95+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Project
                        Complete</h3>
                </div>
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">5+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Experience</h3>
                </div>
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">550+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Happy Clients</h3>
                </div>
            </div>
            <!-- navigation bar end  -->
        </div>
        <!-- banner part end  -->
    </div>

    <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <!-- service part start  -->
        <div class="py-5 lg:py-10 flex flex-col gap-5">
            <p class="font-medium lg:font-semibold text-lg lg:text-2xl text-center text-[#6F840A]">Our
                Service</p>
            <h2
                class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Going
                further than just a cowering space,<br> Synex Digital offers
                more.
            </h2>
        </div>
        <!-- service card start  -->
        <div class="py-0 md:py-4 lg:py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($services as $key => $service)
                <?php
                $words = explode(' ', $service->description);
                ?>
                <a href="{{ route('our.service', $service->slugs) }}"
                    class="card rounded-lg text-center p-8 bg-cover bg-[{{ $key == 1 ? '#124346' : '#FFFFFF' }}] border duration-200 ease-in-out hover:border-[#124346] hover:shadow-2xl hover:bg-[#124346] {{ $key == 1 ? 'text-white' : 'text-black' }} hover:text-white"
                    style="background-image: url({{ asset('asset/Frontend/Service_Card.png') }});">
                    <figure class="w-full flex justify-center mt-4">
                        <img src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                            class="w-24 h-24 rounded-full p-2 bg-[#C2E812]" />
                    </figure>
                    <div class="card-body items-center text-center pt-14">
                        <h2 class="card-title font-semibold text-lg lg:text-2xl">{{ $service->title }}</h2>
                        <p class="serviceDescription font-medium text-sm leading-6 text-justify mt-4">
                            {{ implode(' ', array_slice($words, 0, 25)) }}
                        </p>
                    </div>
                </a>
            @empty
            @endforelse
        </div>
    </div>

    <div class="py-10 mt-10 mb-10" style="background-image: url('{{ asset('asset/Frontend/testimonial.png') }}')">
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

    <div class="py-10 mt-10 mb-10">
        <div class="flex flex-col md:flex-row mt-5 lg:mt-10 mx-auto max-w-screen-xl gap-8 px-5 md:px-8 lg:px-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14607.759038255072!2d90.3672568!3d23.7495275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40311a29c1f9eaa9%3A0x7eda334fe00e121c!2sSynex%20Digital!5e0!3m2!1sen!2sbd!4v1710754428463!5m2!1sen!2sbd"
                class="w-full rounded-lg" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="w-full">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <h2
                        class="text-dark mb-6 text-[32px] font-bold uppercase sm:text-[40px] lg:text-[36px] xl:text-[40px]">
                        GET IN TOUCH WITH US
                    </h2>
                    <p class="text-base leading-relaxed text-body-color">
                        Reach out to us for assistance and inquiries.
                    </p>
                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.6 11.8002L17.7 3.5002C16.65 2.8502 15.3 2.8502 14.3 3.5002L1.39998 11.8002C0.899983 12.1502 0.749983 12.8502 1.04998 13.3502C1.39998 13.8502 2.09998 14.0002 2.59998 13.7002L3.44998 13.1502V25.8002C3.44998 27.5502 4.84998 28.9502 6.59998 28.9502H25.4C27.15 28.9502 28.55 27.5502 28.55 25.8002V13.1502L29.4 13.7002C29.6 13.8002 29.8 13.9002 30 13.9002C30.35 13.9002 30.75 13.7002 30.95 13.4002C31.3 12.8502 31.15 12.1502 30.6 11.8002ZM13.35 26.7502V18.5002C13.35 18.0002 13.75 17.6002 14.25 17.6002H17.75C18.25 17.6002 18.65 18.0002 18.65 18.5002V26.7502H13.35ZM26.3 25.8002C26.3 26.3002 25.9 26.7002 25.4 26.7002H20.9V18.5002C20.9 16.8002 19.5 15.4002 17.8 15.4002H14.3C12.6 15.4002 11.2 16.8002 11.2 18.5002V26.7502H6.69998C6.19998 26.7502 5.79998 26.3502 5.79998 25.8502V11.7002L15.5 5.4002C15.8 5.2002 16.2 5.2002 16.5 5.4002L26.3 11.7002V25.8002Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark ">
                                Our Location
                            </h4>
                            <p class="text-base text-body-color">
                                87/3 West dhanmondi, Shankar
                            </p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_941_17577)">
                                    <path
                                        d="M24.3 31.1499C22.95 31.1499 21.4 30.7999 19.7 30.1499C16.3 28.7999 12.55 26.1999 9.19997 22.8499C5.84997 19.4999 3.24997 15.7499 1.89997 12.2999C0.39997 8.59994 0.54997 5.54994 2.29997 3.84994C2.34997 3.79994 2.44997 3.74994 2.49997 3.69994L6.69997 1.19994C7.74997 0.599942 9.09997 0.899942 9.79997 1.89994L12.75 6.29994C13.45 7.34994 13.15 8.74994 12.15 9.44994L10.35 10.6999C11.65 12.7999 15.35 17.9499 21.25 21.6499L22.35 20.0499C23.2 18.8499 24.55 18.4999 25.65 19.2499L30.05 22.1999C31.05 22.8999 31.35 24.2499 30.75 25.2999L28.25 29.4999C28.2 29.5999 28.15 29.6499 28.1 29.6999C27.2 30.6499 25.9 31.1499 24.3 31.1499ZM3.79997 5.54994C2.84997 6.59994 2.89997 8.74994 3.99997 11.4999C5.24997 14.6499 7.64997 18.0999 10.8 21.2499C13.9 24.3499 17.4 26.7499 20.5 27.9999C23.2 29.0999 25.35 29.1499 26.45 28.1999L28.85 24.0999C28.85 24.0499 28.85 24.0499 28.85 23.9999L24.45 21.0499C24.45 21.0499 24.35 21.0999 24.25 21.2499L23.15 22.8499C22.45 23.8499 21.1 24.1499 20.1 23.4999C13.8 19.5999 9.89997 14.1499 8.49997 11.9499C7.84997 10.8999 8.09997 9.54994 9.09997 8.84994L10.9 7.59994V7.54994L7.94997 3.14994C7.94997 3.09994 7.89997 3.09994 7.84997 3.14994L3.79997 5.54994Z"
                                        fill="currentColor" />
                                    <path
                                        d="M29.3 14.25C28.7 14.25 28.25 13.8 28.2 13.2C27.8 8.15003 23.65 4.10003 18.55 3.75003C17.95 3.70003 17.45 3.20003 17.5 2.55003C17.55 1.95003 18.05 1.45003 18.7 1.50003C24.9 1.90003 29.95 6.80003 30.45 13C30.5 13.6 30.05 14.15 29.4 14.2C29.4 14.25 29.35 14.25 29.3 14.25Z"
                                        fill="currentColor" />
                                    <path
                                        d="M24.35 14.7002C23.8 14.7002 23.3 14.3002 23.25 13.7002C22.95 11.0002 20.85 8.90018 18.15 8.55018C17.55 8.50018 17.1 7.90018 17.15 7.30018C17.2 6.70018 17.8 6.25018 18.4 6.30018C22.15 6.75018 25.05 9.65018 25.5 13.4002C25.55 14.0002 25.15 14.5502 24.5 14.6502C24.4 14.7002 24.35 14.7002 24.35 14.7002Z"
                                        fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_941_17577">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark ">
                                Phone Number
                            </h4>
                            <p class="text-base text-body-color">
                                +8801613408101
                            </p>
                        </div>
                    </div>
                    <div class="mb-8 flex w-full max-w-[370px]">
                        <div
                            class="bg-primary/5 text-primary mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded sm:h-[70px] sm:max-w-[70px]">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M28 4.7998H3.99998C2.29998 4.7998 0.849976 6.1998 0.849976 7.9498V24.1498C0.849976 25.8498 2.24998 27.2998 3.99998 27.2998H28C29.7 27.2998 31.15 25.8998 31.15 24.1498V7.8998C31.15 6.1998 29.7 4.7998 28 4.7998ZM28 7.0498C28.05 7.0498 28.1 7.0498 28.15 7.0498L16 14.8498L3.84998 7.0498C3.89998 7.0498 3.94998 7.0498 3.99998 7.0498H28ZM28 24.9498H3.99998C3.49998 24.9498 3.09998 24.5498 3.09998 24.0498V9.2498L14.8 16.7498C15.15 16.9998 15.55 17.0998 15.95 17.0998C16.35 17.0998 16.75 16.9998 17.1 16.7498L28.8 9.2498V24.0998C28.9 24.5998 28.5 24.9498 28 24.9498Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-dark ">
                                Email Address
                            </h4>
                            <p class="text-base text-body-color">
                                office@synexdigital.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endsection
