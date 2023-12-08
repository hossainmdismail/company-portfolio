@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full flex gap-6 text-white">
        <div class="w-full flex items-center justify-center text-center">
            <h1 class="text-4xl font-semibold text-button-primary">
                {{ $service->title }}
            </h1>
        </div>
        <div class="w-full flex items-center justify-center">
            <img src="{{ asset('uploads/service/' . $service->thumbnail) }}" width="300" alt="{{ $service->title }}">
        </div>
    </div>
@endsection

@section('content')
    <div class="mt-5 lg:mt-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <div class="py-5 mb-6">
            <div class="space-y-2 md:space-y-3 lg:space-y-5 pt-5">
                <p class="text-xl font-normal">{{ $service->description }}</p>
            </div>
            <div class="text-center space-y-2 md:space-y-3 lg:space-y-5 pt-20">
                {{-- <h2 class="text-base lg:text-2xl md:text-xl font-semibold lg:font-bold text-[#6F840A]">Service 01</h2> --}}
                <h2 class="text-[#0B4145] text-lg md:text-2xl lg:text-4xl font-normal lg:font-bold">KEY POINT'S</h2>
            </div>
            <div class="py-5 md:py-10 lg:py-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 lg:gap-6">
                    @forelse ($service->serviceItem as $item)
                        <div class="border shadow-lg shadow-gray-300 p-4 md:p-5 lg:p-7 rounded-lg">
                            <div class="flex justify-between items-center">
                                <h2 class="text-base md:text-xl lg:text-2xl font-semibold">{{ $item->title }}</h2>
                                <img class="w-[40px;] md:w-[40px;] lg:w-[48px;]"
                                    src="{{ asset('uploads/service/' . $item->image) }}" alt="">
                            </div>
                            <hr class="py-2 md:py-3 lg:py-4 mt-3 md:mt-5 lg:mt-8">
                            <p class="text-sm md:text-base lg:text-lg font-medium md:font-semibold lg:font-medium">
                                {{ $item->description }}</p>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <div class="my-5 lg:my-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <div class="flex flex-col lg:flex-row lg:gap-14 shadow-xl rounded-3xl">
                <div class="flex-1">
                    <div class="hidden lg:flex lg:h-full relative rounded-l-3xl"
                        style="background-image: url('http://127.0.0.1:8000/asset/Frontend/Hero_Section.png'); background-position: bottom; background-size: cover;">
                        <div class="text-black text-left p-10">
                            <h2 class="text-2xl font-bold text-white py-5">Interested in collaborating <br> with us?</h2>
                            <p class="text-xl text-[#edededba]">By completing the form to consent to message storage, you
                                can now get in touch with us directly.</p>
                        </div>
                    </div>
                </div>
                <form class="flex flex-1 flex-col gap-5 p-2 md:p-10 rounded-full" action="http://127.0.0.1:8000/talk/store"
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
    </div>
@endsection
