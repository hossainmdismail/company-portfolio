<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD - Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('asset/Backend/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('asset/Backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('asset/Backend/vendor/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/Backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/Backend/vendor/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/Backend/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" class="show">
        @include('backend.layouts.header')
        <div class="content-body" style="min-height: 60px;">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('backend.layouts.nav')
    </div>
    @include('backend.layouts.footer')
    @yield('script')
</body>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            toastr.warning("{{ $error }}", "Validation", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
            })
        </script>
    @endforeach
@endif
@if (session()->has('err'))
    <script>
        toastr.error("{{ session('err') }}", "Errors", {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
    </script>
@endif

@if (session()->has('succ'))
    <script>
        toastr.info("{{ session('succ') }}", "Success", {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
    </script>
@endif

</html>
