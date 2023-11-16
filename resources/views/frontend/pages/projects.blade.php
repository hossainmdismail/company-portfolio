@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full text-white text-center space-y-3 lg:space-y-5 py-9">
        <h2 class="text-xl lg:text-4xl font-bold ">Our Project</h2>
        <p class="text-sm lg:text-lg font-medium">Home > Project</p>
    </div>
@endsection

@section('content')
    <main class="mt-5 mb-10 lg:mb-24 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 flex flex-col lg:flex-row gap-6">
        <div class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-11" aria-labelledby="profile-tab">
                @forelse ($projects as $project)
                    <a href="{{ route('portfolio', $project->slugs) }}"
                        class="border border-[#DBDBDB] group rounded-lg p-4 space-b-1 duration-150 hover:shadow-xl shadow-slate-300 border-none ring-1 ring-gray-300 hover:ring-2 hover:ring-[#124346]">
                        <div class="flex flex-col items-center rounded-lg mb-4">
                            <img class="rounded-lg" src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                alt="">
                        </div>
                        <h3 class="text-xl font-bold text-left text-[#111]">{{ $project->title }}</h3>
                        <p class="text-base font-medium">{{ $project->seo_description }}</p>
                    </a>
                @empty
                    No Data found
                @endforelse
            </div>
        </div>

        <div class="w-full lg:w-2/6 mt-11 h-fit rounded-lg">
            <div class="w-full border rounded-lg p-4">
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
                            class="px-2 py-2 bg-slate-{{ request()->input('category') == $category->id ? '200' : '50' }} duration-150 hover:bg-slate-200 block rounded-lg">{{ $category->service }}</button>
                    @empty
                    @endforelse
                </form>
            </div>
        </div>

    </main>
@endsection
