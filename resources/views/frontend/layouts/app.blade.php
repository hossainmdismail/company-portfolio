<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.script')
    @yield('style')
</head>

<body class="font-figtree dark:bg-white relative">
    {{-- @include('frontend.layouts.model') --}}
    @yield('loader')
    <!-- header section  -->
    <div class="bg-cover bg-[#003f44]" style="background-image: url('{{ asset('asset/Frontend/cover.png') }}')">
        <header class="mx-auto max-w-screen-xl py-4">
            <!-- navigation bar start-->
            @include('frontend.layouts.header')
            <!-- navigation bar end  -->
        </header>

        <div class="mx-auto max-w-screen-xl  py-3 px-3 md:py-5 lg:py-16 flex flex-col lg:flex-row gap-10 ">
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

    <script>
        // Element
        let mobileNav = document.getElementById('mobileNav');
        let mobileMenu = document.getElementById('mobileMenu');

        // Functions
        mobileNav.addEventListener('click', function() {
            if (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') {
                mobileMenu.style.display = 'block';
            } else {
                mobileMenu.style.display = 'none';
            }
        });
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/656f2a2dbfb79148e59a4d1e/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>
