<div
    class="my-5 lg:my-20 mx-auto max-w-screen-xl px-4 py-6 md:px-10 md:py-20  bg-[#0D3F47] text-white rounded-xl shadow">
    <div class="flex flex-col lg:flex-row items-center gap-6 md:gap-4">
        <div class="w-full text-2xl  font-bold flex flex-col gap-0 md:gap-2 md:text-4xl">
            <span>Don't Miss</span>
            <span class="text-primary-bg">Synex Digital Updates</span>
        </div>
        <div class="w-full">
            <form action="{{ route('lead.store') }}" method="POST">
                @csrf
                <div class="relative flex items-center">
                    <input
                        class="w-full px-4 py-4 rounded-xl text-sm text-[#0D3F47] focus:outline-none focus:ring-4 focus:ring-[#b8ec3f29]"
                        type="text" name="email" id="letter" placeholder="Your Email Address">
                    <button class="absolute right-2 text-white px-6 py-2 bg-[#0D3F47]  rounded-lg">Subscribe</button>
                </div>
            </form>
        </div>

    </div>
</div>
