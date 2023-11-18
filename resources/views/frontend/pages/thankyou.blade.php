@extends('frontend.layouts.app')

@section('content')
    <div class="mt-9 lg:mt-16 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 mb-10 text-gray-700">
        <div class=" col-10 col-md-4 text-center">
            <div class="box mb-5 flex items-center justify-center">
                <img src="{{ asset('default/icons8-box.gif') }}" alt="synex gif">
            </div>
            <h1 class="mb-10 text-3xl font-semibold">
                Thank You For <br><span class="font-thin"> Getting in Touch </span>
                <div class="button_su mt-90">
                    <span class="su_button_circle bg-black desplode-circle" style="left: 247.672px; top: 20.6262px;"></span>
                </div>
            </h1>
            <p class="color-999 fw-500 fm-playfair mb-2">Thank you for reaching out to us! Your satisfaction
                is our top priority, and we're here to help. <br>
                We'll be sure to get back to you soon!</p>
            <div class="button_su mt-6">
                <span class="su_button_circle bg-black desplode-circle" style="left: 247.672px; top: 20.6262px;"></span>
                <a href="{{ route('home') }}"
                    class="rounded-full bg-primary-bg px-6 pb-2 pt-2 text-md font-semibold text-black shadow-black transition duration-150 ease-in-out hover:bg-primary-hover ">
                    <span class="button_text_container"> Home <i class="fa-solid fa-arrow-right ms-2"></i>
                    </span>
                </a>
            </div>

        </div>
    </div>
@endsection
@section('script')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $(document).ready(function() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });
                    Toast.fire({
                        icon: "error",
                        title: "{{ $error }}"
                    });
                });
            </script>
        @endforeach
    @endif
    @if (session()->has('err'))
        <script>
            $(document).ready(function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: "{{ session('err') }}"
                });
            });
        </script>
    @endif

    @if (session()->has('succ'))
        <script>
            $(document).ready(function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: "{{ session('succ') }}"
                });
            });
        </script>
    @endif
@endsection
