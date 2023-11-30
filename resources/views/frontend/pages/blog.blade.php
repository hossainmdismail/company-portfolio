@extends('frontend.layouts.blank')


@section('content')
    <main class="mt-9 lg:mt-16 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 text-gray-700">
        <div class="flex flex-col md:flex-row lg:flex-row items-center gap-5">
            <div class="flex-1 space-y-2 md:space-y-3 lg:space-y-4">
                <h2 class="text-xl md:text-2xl lg:text-4xl font-semibold leading-tight">{{ $blog->title }}</h2>
                <p class="text-base md:text-lg lg:text-xl font-medium">Share with :</p>
                <div class="flex gap-4 text-xl">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}"
                        target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
            </div>
            <div class="flex-1">
                <img class="w-full rounded-xl" src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="">
            </div>
        </div>
        <div class="flex flex-col-reverse md:flex-col-reverse lg:flex-row gap-10 py-20">
            <div class="w-full lg:w-2/3">
                {!! $blog->content !!}
            </div>
            {{-- left Side grid --}}
            <div class="w-full lg:w-2/6 h-fit rounded-lg">
                <div class="w-full border rounded-lg p-4 mb-4">
                    <div class="text-lg font-semibold mb-1">
                        Recent Post
                    </div>
                    <hr>
                    <div class="w-full mt-3 flex flex-col gap-4">
                        @forelse ($blogs as $blog)
                            <a href="{{ route('frontBlog', $blog->slugs) }}"
                                class="px-2 py-2 bg-slate-100 duration-150 hover:bg-slate-200 rounded-lg flex">
                                <div class="mr-2 w-24 h-14 rounded-lg overflow-hidden">
                                    <img class="bg-slate-400 w-20 h-14 rounded-lg"
                                        src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="">
                                </div>
                                <div>
                                    <h1 class="font-semibold">{{ $blog->title }}</h1>
                                    <span class="text-[#315A6B] text-xs">{{ $blog->created_at->format('d M Y') }}</span>
                                </div>
                            </a>
                        @empty
                            No data Found
                        @endforelse
                    </div>
                </div>

                <div class="w-full border rounded-lg p-4 mb-4">
                    <div class="text-lg font-semibold mb-1">
                        Category
                    </div>
                    <hr>
                    <div class="w-full mt-3 flex flex-col gap-4">
                        @foreach ($categories as $category)
                            <a href="{{ route('blog.list') }}"
                                class="px-2 py-2 bg-slate-100 duration-150 hover:bg-slate-200 block rounded-lg">{{ $category->name }}</a>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </main>
    {{-- Newsletter --}}
    <div class="my-5 lg:my-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <div class="flex flex-col lg:flex-row lg:gap-14 shadow-xl rounded-3xl">
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
            <form class="flex flex-1 flex-col gap-5 p-2 md:p-10 rounded-full" action="{{ route('talk.store') }}"
                method="post">
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
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your blog
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
