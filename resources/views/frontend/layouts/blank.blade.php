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
            <!-- navigation bar start-->
            @include('frontend.layouts.header')
            <!-- navigation bar end  -->
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
</body>

</html>
