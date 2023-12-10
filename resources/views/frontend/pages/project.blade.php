@extends('frontend.layouts.blank')


@section('content')
    <main class="mt-9 lg:mt-16 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 text-gray-700">
        <div class="flex flex-col md:flex-row lg:flex-row items-center gap-5">
            <div class="flex-1 space-y-2 md:space-y-3 lg:space-y-4">
                <h2 class="text-xl md:text-2xl lg:text-4xl font-semibold leading-tight">{{ $project->title }}</h2>
                <p class="text-base md:text-lg lg:text-xl font-medium">Share with :</p>
                <div class="flex gap-4 text-xl">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($project->title) }}"
                        target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="flex-1">
                <img class="w-full" src="{{ asset('uploads/project/' . $project->thumbnail) }}" alt="">
            </div>
        </div>
        <div class="flex flex-col-reverse md:flex-col-reverse lg:flex-row gap-10 py-20">
            <div class="w-full lg:w-2/3">
                {!! $project->content !!}
            </div>
            <div class="w-full lg:w-1/3">
                <h3 class="text-xl font-bold py-5">Author</h3>
                <div class="flex gap-5 items-center ring-2 rounded-lg ring-gray-400 p-3">
                    <div class="w-14 h-14 rounded-full bg-gray-300">
                        <img src="" alt="">
                    </div>
                    <div
                        class="flex flex-col md:flex-row lg:flex-row justify-around items-center gap-2 md:gap-10 lg:gap-10">
                        <div>
                            <h3 class="text-lg font-semibold">{{ $project->client }}</h3>
                            <p class="text-base font-medium">${{ number_format($project->budget) }}</p>
                        </div>
                    </div>
                </div>
                <div class="py-10">
                    <h3 class="text-lg font-bold">Published</h3>
                    <p class="text-lg font-semibold">{{ $project->created_at->format('d M Y') }}</p>
                </div>
            </div>
        </div>
    </main>
    {{-- Form --}}
    @include('frontend.layouts.form')
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
