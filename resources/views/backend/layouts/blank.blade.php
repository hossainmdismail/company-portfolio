<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SD - Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('asset/Backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('asset/Backend/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('asset/Backend/css/style.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid mt-5">
        @yield('content')
    </div>
    @include('backend.layouts.footer')
</body>
</html>