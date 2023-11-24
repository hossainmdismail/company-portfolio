@extends('frontend.layouts.app')

@section('headerTab')
    <div class="text-white text-center w-full">
        <h2 class="text-xl lg:text-4xl font-bold ">Abut us</h2>
    </div>
@endsection
@section('content')
    <div class="mt-5 lg:mt-20 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <div class="space-y-4 md:space-y-5 lg:space-y-8 pt-5">
            <h2 class="text-xl lg:text-4xl md:text-3xl font-semibold lg:font-bold text-black">Going
                further than just a cowering space,Synex Digital offers
                more.</h2>
            <p class="text-sm lg:text-lg font-normal lg:font-medium text-gray-950">Synex
                Digital is a Professional Software Agency Platform. Here we
                will provide you only interesting content, which you will
                like very much. We're dedicated to providing you the best of
                Software Agency, with a focus on dependability and IT
                Service. We're working to turn our passion for Software
                Agency into a booming online website.</p>
        </div>
        <div class="py-8 md:py-12 lg:py-20">
            <img class="w-full" src="{{ asset('asset/Frontend/Rectangle 9.png') }}" alt>
        </div>
    </div>
    <div class="bg-cover bg-[#ecebeb] px-4 lg:px-0 mt-5">
        <div class="mx-auto max-w-screen-xl py-9 text-center">
            <!-- navigation bar start-->
            <div class="flex justify-center items-center lg:justify-between gap-5">
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">95+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Project
                        Complete</h3>
                </div>
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">5+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Experience</h3>
                </div>
                <div class="text-[#124346] lg:space-y-3">
                    <h1 class="text-xl lg:text-6xl font-bold">550+</h1>
                    <h3 class="text-sm lg:text-xl font-medium">Happy Clients</h3>
                </div>
            </div>
            <!-- navigation bar end  -->
        </div>
        <!-- banner part end  -->
    </div>

    <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
        <!-- service part start  -->
        <div class="py-5 lg:py-10 flex flex-col gap-5">
            <p class="font-medium lg:font-semibold text-lg lg:text-2xl text-center text-[#6F840A]">Our
                Service</p>
            <h2 class="text-text-primary text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Going
                further than just a cowering space,<br> Synex Digital offers
                more.
            </h2>
        </div>
        <!-- service card start  -->
        <div class="py-0 md:py-4 lg:py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($services as $key => $service)
                    <div class="rounded-lg text-center p-8 bg-cover bg-[{{ $key == 1 ? '#124346' : '#FFFFFF' }}] border duration-200 ease-in-out hover:border-[#124346] hover:shadow-2xl hover:bg-[#124346] {{ $key == 1 ? 'text-white' : 'text-black' }} hover:text-white"
                        style="background-image: url({{ asset('asset/Frontend/Service_Card.png') }});">
                        <figure class="w-full flex justify-center mt-4">
                            <img src="{{ asset('uploads/service/' . $service->thumbnail) }}" alt="{{ $service->title }}"
                                class="w-24 h-24 rounded-full p-2 bg-[#C2E812]" />
                        </figure>
                        <div class="card-body items-center text-center pt-14">
                            <h2 class="card-title font-semibold text-lg lg:text-2xl">{{ $service->title }}</h2>
                            <p class="font-medium text-sm leading-6">{{ $service->description }}</p>
                        </div>
                    </div>
                @empty
                @endforelse
        </div>
    </div>

    <div class="py-10 mt-10 mb-10" style="background-image: url('{{ asset('asset/Frontend/testimonial.png') }}')">
        <!-- Header Title and descripiton -->
        <div class="flex flex-col gap-3">
            <p class="font-semibold text-2xl text-center text-[#6F840A]">Testimonial</p>
            <h2 class="text-white text-sm lg:text-3xl font-semibold lg:font-bold text-center leading-6 lg:leading-9">
                Our
                inventive productions
            </h2>
        </div>

        <div class="mt-5 lg:mt-10 mx-auto max-w-screen-xl px-5 md:px-8 lg:px-0">
            <div class="owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="w-full mx-auto rounded-lg border border-gray-200 p-5 text-white font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="{{ asset('uploads/testimonial/' . $testimonial->profile) }}" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-white">{{ $testimonial->name }}</h6>
                                    <div>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                        <i class="fa-solid fa-star text-xs text-[#FF7A00]"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span
                                        class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>{{ $testimonial->comment }}<span
                                        class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

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
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>
@endsection
