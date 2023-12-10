@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full text-white text-center space-y-3 lg:space-y-5 py-9 ">
        <h2 class="text-xl lg:text-4xl font-bold ">Our Services</h2>
        <p class="text-sm lg:text-lg font-medium">Home > Services</p>
    </div>
@endsection

@section('content')
    <div class="mt-5 lg:mt-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        {{-- Services --}}
        @forelse ($services as $service)
            <div class="py-5">
                <div class="text-center space-y-2 md:space-y-3 lg:space-y-5 pt-5">
                    <a href="{{ route('our.service', $service->slugs) }}"
                        class="text-base lg:text-2xl md:text-xl font-semibold lg:font-bold text-[#6F840A]">Service</a>
                    <p class="text-lg md:text-2xl lg:text-4xl font-normal lg:font-bold">{{ $service->title }}</p>
                </div>
                <div class="py-5 md:py-10 lg:py-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-5 lg:gap-6">
                        @forelse ($service->serviceItem as $item)
                            <div class="border shadow-lg shadow-gray-300 p-4 md:p-5 lg:p-7 rounded-lg">
                                <div class="flex justify-between items-center">
                                    <h2 class="text-base md:text-xl lg:text-2xl font-semibold">{{ $item->title }}</h2>
                                    <img class="w-[40px;] md:w-[40px;] lg:w-[48px;]"
                                        src="{{ asset('uploads/service/' . $item->image) }}" alt="{{ $item->title }}">
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
        @empty
            No Data Found!
        @endforelse
        {{-- Services end --}}

        <!-- Project part start  -->
        <div class="py-10 lg:py-20">
            <!-- Header Title and descripiton -->
            <div class="flex flex-col gap-3 items-center">
                <p class="font-semibold text-2xl text-center text-[#6F840A]">Our
                    Project</p>
                <h2
                    class="max-w-lg text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                    Crafting Tailored Business IT Solutions
                </h2>
            </div>

            <!-- All tab with Card -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-7 py-11" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <!-- Card -->
                @foreach ($projects->take(4) as $project)
                    <a href="{{ route('portfolio', $project->slugs) }}"
                        class="border border-[#DBDBDB] group rounded-lg p-4 space-b-1 duration-150 hover:shadow-xl shadow-slate-300 border-none ring-1 ring-gray-300 hover:ring-2 hover:ring-[#124346]">
                        <div class="flex flex-col items-center rounded-lg mb-4">
                            <img class="rounded-lg border-b" src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                alt="">
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="rounded-lg px-2 py-1 text-xs bg-opacity-10"
                                style="background: #afe33d6b;width: fit-content; padding: 2px 8px 2px 8px;">
                                {{ $project->created_at->format('d M Y') }}
                            </p>
                            <div>
                                <h3 class="text-xl font-bold text-left text-[#111]">{{ $project->title }}</h3>
                                <p class="text-base font-medium text-gray-500">{{ $project->seo_description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Learn more Button -->
            <div class="text-center">
                <a href="{{ route('portfolio.grid') }}"
                    class="font-semibold text-base bg-[#124346] text-white px-5 py-2.5 rounded-full max-w-fit duration-150 ease-in-out hover:bg-[#094346eb]">View
                    More</a>
            </div>
        </div>

        {{-- Form --}}
        @include('frontend.layouts.form')

    </div>
@endsection
