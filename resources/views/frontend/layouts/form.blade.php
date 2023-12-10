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
