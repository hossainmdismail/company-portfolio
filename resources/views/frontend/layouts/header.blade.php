<nav class="  text-black lg:text-white">
    <div class="navbar justify-between">
        <div class="flex flex-row-reverse lg:flex justify-between w-[100%] lg:w-auto">
            <div class="dropdown flex flex-row-reverse ">
                <label tabindex="0" class="btn btn-ghost p-0 m-0 lg:hidden">
                    <ion-icon class="text-4xl text-primary-bg" name="menu-outline"></ion-icon>
                </label>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 text-base font-medium">
                    <li><a href="{{ route('home') }}" class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}" class="cursor-pointer duration-150 hover:text-primary-bg">About
                            Us</a></li>
                </ul>
            </div>
            <div class="flex-1">
                <a href="{{ route('home') }}" class="flex gap-1 lg:gap-2 items-end">
                    <img class="w-28 p-1 lg:32 xl:w-40" src="{{ asset('asset/Frontend/logo_dsefault.png') }}"
                        alt="Synex Digital Logo">
                </a>
            </div>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="flex text-lg font-medium gap-10">
                <li><a href="{{ route('home') }}" class="cursor-pointer duration-150 hover:text-primary-bg">Home</a>
                </li>
                <li><a href="{{ route('about') }}" class="cursor-pointer duration-150 hover:text-primary-bg">About</a>
                </li>
            </ul>
        </div>
        <div class="flex-row-reverse relative items-center hidden lg:flex">
            <a href="{{ route('talk') }}"
                class="rounded-full bg-primary-bg px-6 pb-2 pt-2 text-md font-semibold text-black shadow-black transition duration-150 ease-in-out hover:bg-primary-hover ">Let's
                Talk</a>
        </div>
    </div>
</nav>
