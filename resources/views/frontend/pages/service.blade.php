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
        {{-- Form --}}
        @include('frontend.layouts.form')
    </div>
@endsection
