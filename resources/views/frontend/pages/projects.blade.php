@extends('frontend.layouts.app')

@section('headerTab')
    <div class="w-full text-white text-center space-y-3 lg:space-y-5 py-9 ">
        <h2 class="text-xl lg:text-4xl font-bold ">Our Project</h2>
        <p class="text-sm lg:text-lg font-medium">Home > Project</p>
    </div>
@endsection

@section('content')
    <main
        class="mt-5 mb-10 lg:mb-24 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0 flex flex-col lg:flex-row gap-6 text-gray-700">
        <div class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-11" aria-labelledby="profile-tab">
                @forelse ($projects as $project)
                    <a href="{{ route('portfolio', $project->slugs) }}"
                        class="border border-[#DBDBDB] group rounded-lg p-4 space-b-1 duration-150 hover:shadow-xl shadow-slate-300 border-none ring-1 ring-gray-300 hover:ring-2 hover:ring-[#124346]">
                        <div class="flex flex-col items-center rounded-lg mb-4">
                            <img class="rounded-lg" src="{{ asset('uploads/project/' . $project->thumbnail) }}"
                                alt="">
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="rounded-lg px-1 py-1 text-xs bg-opacity-10"
                                style="background: #afe33d6b;width: fit-content; padding: 2px 8px 2px 8px;">
                                {{ $project->created_at->format('d M Y') }}
                            </p>
                            <div>
                                <h3 class="text-xl font-bold text-left text-[#111]">{{ $project->title }}</h3>
                                <p class="text-base font-medium text-gray-500">{{ $project->seo_description }}</p>
                            </div>
                        </div>
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
