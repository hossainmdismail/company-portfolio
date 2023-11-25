@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full text-white text-center space-y-3 lg:space-y-5 py-9">
        <h2 class="text-xl lg:text-4xl font-bold ">Blog</h2>
        <p class="text-sm lg:text-lg font-medium">Home > Blogs</p>
    </div>
@endsection

@section('content')
    <main class="mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 text-gray-700">
        <div class="flex flex-col-reverse md:flex-col-reverse lg:flex-row gap-10 mt-20">
            <div class="w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($blogs as $blog)
                        <a href="{{ route('frontBlog', $blog->slugs) }}"
                            class="border border-[#DBDBDB] group rounded-lg p-4 space-b-1 duration-150 hover:shadow-xl shadow-slate-300 border-none ring-1 ring-gray-300 hover:ring-2 hover:ring-[#124346]">
                            <figure>
                                <img class="w-full" src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="">
                            </figure>
                            <div class="mt-6">
                                <div class="flex gap-4">
                                    <div class="flex">
                                        <span class="text-xs">{{ $blog->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                                <h3 class="text-lg font-bold mt-2">{{ $blog->title }}</h3>
                            </div>
                        </a>
                    @empty
                    @endforelse
                </div>
            </div>
            {{-- left Side grid --}}
            <div class="w-full lg:w-2/6 h-fit rounded-lg">
                <div class="w-full border rounded-lg p-4 mb-4">
                    <div class="text-lg font-semibold mb-1">
                        Recent Post
                    </div>
                    <hr>
                    <div class="w-full mt-3 flex flex-col gap-4">
                        @forelse ($recents as $blog)
                            <a href="{{ route('frontBlog', $blog->slugs) }}"
                                class="px-2 py-2 bg-slate-100 duration-150 hover:bg-slate-200 rounded-lg flex">
                                <div class="mr-2 w-24 h-14 rounded-lg overflow-hidden">
                                    <img class="bg-slate-400 w-20 h-14 rounded-lg"
                                        src="{{ asset('uploads/blog/' . $blog->thumbnail) }}" alt="">
                                </div>
                                <div class="w-full">
                                    <h1 class="font-semibold">{{ $blog->title }}</h1>
                                    <span class="text-[#315A6B] text-xs">{{ $blog->created_at->format('d M Y') }}</span>
                                </div>
                            </a>
                        @empty
                            <h1>No Data found</h1>
                        @endforelse
                    </div>
                </div>

                <div class="w-full border rounded-lg p-4 mb-4">
                    <div class="text-lg font-semibold mb-1">
                        Category
                    </div>
                    <hr>
                    <form action="" class="w-full mt-3 flex flex-col gap-4" method="get">
                        @csrf
                        <button type="submit" name="category" value="clear"
                            class="px-2 py-2 bg-slate-100 duration-150 hover:bg-slate-200 block rounded-lg">Clear</button>
                        @forelse ($categories as $category)
                            <button type="submit" name="category" value="{{ $category->id }}"
                                class="px-2 py-2 bg-slate-{{ request()->input('category') == $category->id ? '200' : '50' }} duration-150 bg-slate-100 hover:bg-slate-200 block rounded-lg">{{ $category->name }}</button>
                        @empty
                        @endforelse
                    </form>
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
