<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    {!! SEO::generate() !!}

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('default/default.png') }}" title="Favicon" sizes="16x16">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.4.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/') }}/lib/owl/owl.theme.default.min.css">
    <script src="{{ asset('asset/Frontend/') }}/lib/owl/owl.carousel.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "button-primary": "#C2E812",
                        "primary-bg": "#C2E812",
                        "primary-hover": "#c2e813f0",
                        "text-primary": "#111",
                        "footer-bg": "#121212;",
                        "carusel-primary": "#121212",
                        "h-overlay": "linear-gradient(180deg, #121212 0%, rgba(18, 18, 18, 0.00) 100%)",
                    },
                },
            },
        };
    </script>
    @yield('style')
</head>

<body class="manrope-font">
    <!-- header section  -->
    <div class="bg-cover" style="background-image: url('{{ asset('asset/Frontend/cover.png') }}')">
        <header class="mx-auto max-w-screen-xl py-4">
            <nav class="  text-black lg:text-white">
                <div class="navbar justify-between">
                    <div class="flex flex-row-reverse lg:flex justify-between w-[100%] lg:w-auto">
                        <div class="dropdown flex flex-row-reverse ">
                            <label tabindex="0" class="btn btn-ghost p-0 m-0 lg:hidden">
                                <ion-icon class="text-4xl text-primary-bg" name="menu-outline"></ion-icon>
                            </label>
                            <ul tabindex="0"
                                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-base font-medium">
                                <li><a href="{{ route('home') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                                </li>
                                <li><a href="{{ route('about') }}"
                                        class="cursor-pointer duration-150 hover:text-primary-bg">About
                                        Us</a></li>
                            </ul>
                        </div>
                        <div class="flex-1">
                            <div class="flex gap-1 lg:gap-2 items-end">
                                <img class="w-28 p-1 lg:32 xl:w-40"
                                    src="{{ asset('asset/Frontend/logo_dsefault.png') }}" alt="Synex Digital Logo">
                            </div>
                        </div>
                    </div>
                    <div class="navbar-center hidden lg:flex">
                        <ul class="flex text-lg font-medium gap-10">
                            <li><a href="{{ route('home') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}"
                                    class="cursor-pointer duration-150 hover:text-primary-bg">About</a>
                            </li>
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
