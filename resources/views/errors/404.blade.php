@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full text-center">
        <h1 class="text-white text-3xl font-semibold">Page Not Found</h1>
    </div>
@endsection
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                {{-- <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">
                    404</h1> --}}
                <div class="w-full flex items-center justify-center">

                    <img class="w-72" src="{{ asset('default/404.png') }}" alt="">
                </div>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-white">Something's
                    missing.</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">Sorry, we can't find that page. You'll
                    find lots to explore on the home page. </p>
                <a href="{{ route('home') }}"
                    class="inline-flex text-black bg-button-primary hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">Back
                    to Homepage</a>
            </div>
        </div>
    </section>
@endsection
