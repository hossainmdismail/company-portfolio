@extends('frontend.layouts.app')

@section('headerTab')
    <div class="text-white text-center w-full">
        <h2 class="text-xl lg:text-4xl font-bold ">Get in touch</h2>
    </div>
@endsection
@section('content')
    <form action="{{ route('talk.store') }}" method="post">
        @csrf
        <div class="mt-9 lg:mt-16 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <div class="flex flex-1 flex-col gap-5 lg:gap-10 lg:px-36 py-10 pb-20">
                <div class="flex flex-col lg:flex-row md:flex-row gap-3 md:gap-5 lg:gap-10 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Name</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="text" name="name" id="" placeholder="John">
                    </div>
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Email</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="email" name="email" id="" placeholder="example@gmail.com">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row md:flex-row gap-3 md:gap-5 lg:gap-10 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Number</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="number" name="number" id="" placeholder="+1">
                    </div>
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Company Name</label>
                        <input
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg"
                            type="text" name="company" id="" placeholder="company ltd">
                    </div>
                </div>
                <div class="flex gap-7 w-full">
                    <div class="flex-1 space-y-2">
                        <label for="" class="text-lg md:text-lg lg:text-xl font-bold">Your Project Brief</label>
                        <textarea
                            class="w-full py-3 lg:py-3 px-6 font-semibold placeholder-gray-500 rounded-xl border-none ring-2 ring-gray-300 focus:ring-gray-500 focus:ring-2 text-base lg:text-lg h-24"
                            name="message" id="" cols="10" rows="10"></textarea>
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="text-xl font-semibold text-white bg-[#124346] px-6 py-3 rounded-full hover:bg-[#243d3f]">Submit</button>
                </div>
            </div>
        </div>
    </form>
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
