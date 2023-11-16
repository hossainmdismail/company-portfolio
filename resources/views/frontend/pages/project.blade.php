@extends('frontend.layouts.blank')


@section('content')
    <main class="mt-9 lg:mt-16 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
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
    <div class="mt-5 lg:mt-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <div class="flex flex-col lg:flex-row lg:gap-14 py-10 md:py-14 lg:py-20">
            <div class="flex-1">
                <div class="hidden lg:flex lg:h-full relative rounded-l-3xl"
                    style="background-image: url('{{ asset('asset/Frontend/Hero_Section.png') }}'); background-position: bottom; background-size: cover;">
                    <div class="text-black text-left p-10">
                        <h2 class="text-2xl font-bold text-white py-5">Interested in collaborating <br> with us?</h2>
                        <p class="text-xl text-[#edededba]">By completing the form to consent to message storage, you
                            can now get in touch with us directly.</p>
                    </div>
                </div>
            </div>
            <div class="flex md:flex lg:hidden justify-center text-center pb-7 md:pb-10 ">
                <h3 class="text-xl md:text-2xl font-semibold">Interested in collaborating with us?</h3>
            </div>
            <form class="flex flex-1 flex-col gap-5 p-0 lg:p-10 rounded-3xl border-r-0 md:border-r-4 border-r-[#124346]"
                action="{{ route('talk.store') }}" method="post">
                @csrf
                <div class="flex flex-col lg:flex-row md:flex-row gap-3 md:gap-5 lg:gap-6 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Name</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="text" name="name" id="" placeholder="John*">
                    </div>
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Email</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="email" name="email" id="" placeholder="example@gmail.com*">
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row md:flex-row gap-3 md:gap-5 lg:gap-6 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Number</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="text" name="number" id="" placeholder="+1">
                    </div>
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Company</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="text" name="compnay" id="" placeholder="Company Name">
                    </div>
                </div>

                <div class="flex gap-7 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Project
                            Brief</label>
                        <textarea
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg h-24"
                            name="message" id="" cols="10" rows="10"></textarea>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="text-xl font-semibold text-white bg-[#124346] px-6 py-3 rounded-full hover:bg-[#243d3f]">Submit</button>
                </div>
            </form>
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
