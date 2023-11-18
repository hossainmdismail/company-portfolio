<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.script')
    @yield('style')
</head>

<body class="font-figtree dark:bg-white">
    @yield('loader')
    <!-- header section  -->
    <div class="bg-cover" style="background-image: url('{{ asset('asset/Frontend/cover.png') }}')">
        <header class="mx-auto max-w-screen-xl py-4">
            <!-- navigation bar start-->
            @include('frontend.layouts.header')
            <!-- navigation bar end  -->
        </header>

        <div
            class="mx-auto max-w-screen-xl  py-3 px-2 md:py-5 lg:py-10 xl:pt-16 xl:pb-24 flex flex-col lg:flex-row gap-10 ">
            @yield('headerTab')
        </div>
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
