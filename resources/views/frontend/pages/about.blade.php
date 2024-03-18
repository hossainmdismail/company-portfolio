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

    {{-- Newsletter --}}
    {{-- Form --}}
    @include('frontend.layouts.form')
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
