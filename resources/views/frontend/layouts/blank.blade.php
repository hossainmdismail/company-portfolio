<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.script')
    @yield('style')
</head>

<body class="manrope-font dark:bg-white">
    <!-- header section  -->
    <div class="bg-cover" style="background-image: url('{{ asset('asset/Frontend/cover.png') }}')">
        <header class="mx-auto max-w-screen-xl py-4">
            <nav class="  text-black lg:text-white">
                <div class="flex justify-between items-center px-2">
                    <div class="flex flex-row-reverse lg:flex justify-between w-[100%] lg:w-auto">
                        {{-- Mobile nav --}}
                        <div class="relative">
                            <label class="p-0 m-0 lg:hidden cursor-pointer" id="mobileNav">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M3.75 6.75H20.25M3.75 12H20.25M3.75 17.25H20.25" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </label>
                            <ul class="hidden mt-3 z-[1] p-2 bg-white shadow bg-base-100 rounded-xl w-52 text-base font-medium absolute right-0"
                                id="mobileMenu">
                                <li><a href="{{ route('home') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                                </li>
                                <li><a href="{{ route('about') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">About</a></li>
                                <li><a href="{{ route('blog.list') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">Blog</a></li>
                                <li><a href="{{ route('portfolio.grid') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">Project</a></li>
                            </ul>
                        </div>
                        {{-- Main logo --}}
                        <div class="">
                            <a href="{{ route('home') }}" class="flex gap-1 lg:gap-2 items-end">
                                <img class="w-28 p-1 lg:32 xl:w-40"
                                    src="{{ asset('asset/Frontend/logo_dsefault.png') }}" alt="Synex Digital Logo">
                            </a>
                        </div>

                    </div>
                    <div class="hidden lg:flex">
                        <ul class="flex text-lg font-medium gap-10">
                            <li><a href="{{ route('home') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">About</a>
                            </li>
                            <li><a href="{{ route('blog.list') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">Blog</a></li>
                            <li><a href="{{ route('portfolio.grid') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">Project</a></li>
                        </ul>
                    </div>
                    <div class="flex-row-reverse relative items-center hidden lg:flex">
                        <a href="{{ route('talk') }}"
                            class="rounded-full bg-primary-bg px-6 pb-2 pt-2 text-md font-semibold text-black shadow-black transition duration-150 ease-in-out hover:bg-primary-hover ">Let's
                            Talk</a>
                    </div>
                </div>
            </nav>


        </header>
        <!-- banner part end  -->
    </div>
    <!-- header section end  -->
    <!-- main section start  -->
    <main>
        @yield('content')
    </main>

    @include('frontend.layouts.footer')
    @yield('script')
</body>

</html>
