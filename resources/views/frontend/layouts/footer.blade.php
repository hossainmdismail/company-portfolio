<footer
    style="background-image: url({{ asset('/asset/Frontend/BG.png') }}); background-position: center; background-repeat: no-repeat;">
    <div class="mx-auto max-w-screen-xl px-4 md:px-0 lg:px-0">
        <div class="flex flex-col lg:flex-row gap-10">
            <div
                class="w-full flex md:flex lg:flex-col items-center md:items-center lg:items-start gap-3 lg:gap-0 lg:w-2/4 px-0 md:px-40 lg:px-0 text-center justify-center">
                <figure class="flex-1 lg:flex">
                    <img class="w-[118px;] lg:w-full" src="{{ asset('asset/Frontend/Logo.svg') }}" alt="">
                </figure>
                <p class="font-normal text-xs md:text-base lg:text-base flex-1 lg:flex">Synex Digital is a
                    Professional
                    Software Agency Platform.</p>
            </div>
            <div class="flex flex-col lg:flex-row text-center gap-8 lg:text-left justify-between w-full">
                <div class="flex flex-col gap-3">
                    <h4 class="text-lg lg:text-xl font-semibold text-[#04364A]">Quick Link</h4>
                    <div class="flex flex-col gap-2 md:gap-3 lg:gap-4">
                        <a href="{{ route('home') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">Home</a>
                        <a href="{{ route('about') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">About</a>
                        <a href="{{ route('blog.list') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">Blog</a>
                        <a href="{{ route('portfolio.grid') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">Project</a>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <h4 class="text-lg lg:text-xl font-semibold text-[#04364A]">Supports</h4>
                    <div class="flex flex-col gap-2 md:gap-3 lg:gap-4">
                        <a href="{{ route('privacy') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">Privecy
                            Policy</a>
                        <a href="{{ route('talk') }}"
                            class="text-base lg:text-lg font-medium duration-150 ease-in-out hover:text-button-primary">Contact
                            us</a>
                    </div>
                </div>
                <div class="">
                    <h4 class="text-lg lg:text-xl font-semibold text-[#04364A]">Contact</h4>
                    <div class="pt-3 flex flex-col justify-center items-center lg:items-start gap-3 md:gap-3 lg:gap-4">
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2 4.5C2 3.70435 2.31607 2.94129 2.87868 2.37868C3.44129 1.81607 4.20435 1.5 5 1.5H6.372C7.232 1.5 7.982 2.086 8.191 2.92L9.296 7.343C9.38554 7.701 9.36746 8.07746 9.24401 8.42522C9.12055 8.77299 8.89723 9.07659 8.602 9.298L7.309 10.268C7.174 10.369 7.145 10.517 7.183 10.62C7.74738 12.1549 8.6386 13.5487 9.79495 14.7051C10.9513 15.8614 12.3451 16.7526 13.88 17.317C13.983 17.355 14.13 17.326 14.232 17.191L15.202 15.898C15.4234 15.6028 15.727 15.3794 16.0748 15.256C16.4225 15.1325 16.799 15.1145 17.157 15.204L21.58 16.309C22.414 16.518 23 17.268 23 18.129V19.5C23 20.2956 22.6839 21.0587 22.1213 21.6213C21.5587 22.1839 20.7956 22.5 20 22.5H17.75C9.052 22.5 2 15.448 2 6.75V4.5Z"
                                    fill="#111111" />
                            </svg>
                            <p class="font-semibold">+8801613408101</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M2 8.66992V17.2499C2 18.0456 2.31607 18.8086 2.87868 19.3712C3.44129 19.9339 4.20435 20.2499 5 20.2499H20C20.7956 20.2499 21.5587 19.9339 22.1213 19.3712C22.6839 18.8086 23 18.0456 23 17.2499V8.66992L14.072 14.1629C13.5992 14.4538 13.0551 14.6078 12.5 14.6078C11.9449 14.6078 11.4008 14.4538 10.928 14.1629L2 8.66992Z"
                                    fill="#111111" />
                                <path
                                    d="M23 6.908V6.75C23 5.95435 22.6839 5.19129 22.1213 4.62868C21.5587 4.06607 20.7956 3.75 20 3.75H5C4.20435 3.75 3.44129 4.06607 2.87868 4.62868C2.31607 5.19129 2 5.95435 2 6.75V6.908L11.714 12.886C11.9504 13.0314 12.2225 13.1084 12.5 13.1084C12.7775 13.1084 13.0496 13.0314 13.286 12.886L23 6.908Z"
                                    fill="#111111" />
                            </svg>
                            <p class="font-semibold">digitalsynex@gmail.com</p>
                        </div>
                        <div class="flex gap-6">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[33px;] md:w-[40px;] lg:w-[40px;]"
                                    viewBox="0 0 41 40" fill="none">
                                    <g clip-path="url(#clip0_91_7069)">
                                        <path
                                            d="M40.5 20C40.5 8.9543 31.5457 0 20.5 0C9.4543 0 0.5 8.9543 0.5 20C0.5 29.9826 7.81375 38.2566 17.375 39.757V25.7813H12.2969V20H17.375V15.5938C17.375 10.5813 20.3609 7.8125 24.9293 7.8125C27.1175 7.8125 29.4062 8.20313 29.4062 8.20313V13.125H26.8843C24.3998 13.125 23.625 14.6666 23.625 16.2483V20H29.1719L28.2852 25.7813H23.625V39.757C33.1863 38.2566 40.5 29.9826 40.5 20Z"
                                            fill="#1877F2" />
                                        <path
                                            d="M28.2852 25.7812L29.1719 20H23.625V16.2483C23.625 14.6666 24.3998 13.125 26.8843 13.125H29.4062V8.20312C29.4062 8.20312 27.1174 7.8125 24.9293 7.8125C20.3609 7.8125 17.375 10.5813 17.375 15.5938V20H12.2969V25.7812H17.375V39.757C18.3932 39.9168 19.4369 40 20.5 40C21.5631 40 22.6067 39.9168 23.625 39.757V25.7812H28.2852Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_91_7069">
                                            <rect width="40" height="40" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[33px;] md:w-[40px;] lg:w-[40px;]"
                                    viewBox="0 0 41 40" fill="none">
                                    <g clip-path="url(#clip0_91_7073)">
                                        <path
                                            d="M20.5 40C9.456 40 0.5 31.044 0.5 20C0.5 8.956 9.456 0 20.5 0C31.544 0 40.5 8.956 40.5 20C40.5 31.044 31.544 40 20.5 40Z"
                                            fill="#0078B5" />
                                        <path
                                            d="M7.8681 15.4918H13.1841V32.5998H7.8681V15.4918ZM10.5281 6.98779C12.2281 6.98779 13.6081 8.36779 13.6081 10.0718C13.6081 11.7758 12.2281 13.1558 10.5281 13.1558C8.8241 13.1558 7.4441 11.7758 7.4441 10.0718C7.4401 8.37179 8.8201 6.98779 10.5281 6.98779Z"
                                            fill="white" />
                                        <path
                                            d="M16.52 15.492H21.62V17.828H21.692C22.4 16.484 24.132 15.064 26.724 15.064C32.108 15.064 33.104 18.608 33.104 23.212V32.6H27.788V24.284C27.788 22.296 27.752 19.748 25.024 19.748C22.256 19.748 21.832 21.908 21.832 24.14V32.604H16.52V15.492Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_91_7073">
                                            <rect width="40" height="40" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[33px;] md:w-[40px;] lg:w-[40px;]"
                                    viewBox="0 0 41 40" fill="none">
                                    <g clip-path="url(#clip0_91_7481)">
                                        <path
                                            d="M20.5 40C9.456 40 0.5 31.044 0.5 20C0.5 8.956 9.456 0 20.5 0C31.544 0 40.5 8.956 40.5 20C40.5 31.044 31.544 40 20.5 40Z"
                                            fill="url(#paint0_linear_91_7481)" />
                                        <path
                                            d="M20.5 8.80814C24.144 8.80814 24.576 8.82014 26.016 8.88814C27.348 8.94814 28.072 9.17214 28.552 9.36014C29.188 9.60814 29.644 9.90414 30.12 10.3801C30.596 10.8561 30.892 11.3121 31.14 11.9481C31.328 12.4281 31.548 13.1521 31.612 14.4841C31.676 15.9241 31.692 16.3561 31.692 20.0001C31.692 23.6441 31.68 24.0761 31.612 25.5161C31.552 26.8481 31.328 27.5721 31.14 28.0521C30.892 28.6881 30.596 29.1441 30.12 29.6201C29.644 30.0961 29.188 30.3921 28.552 30.6401C28.072 30.8281 27.348 31.0481 26.016 31.1121C24.576 31.1761 24.144 31.1921 20.5 31.1921C16.856 31.1921 16.424 31.1801 14.984 31.1121C13.652 31.0521 12.928 30.8281 12.448 30.6401C11.812 30.3921 11.356 30.0961 10.88 29.6201C10.404 29.1441 10.108 28.6881 9.85999 28.0521C9.67199 27.5721 9.45199 26.8481 9.38799 25.5161C9.32399 24.0761 9.30799 23.6441 9.30799 20.0001C9.30799 16.3561 9.31999 15.9241 9.38799 14.4841C9.44799 13.1521 9.67199 12.4281 9.85999 11.9481C10.108 11.3121 10.404 10.8561 10.88 10.3801C11.356 9.90414 11.812 9.60814 12.448 9.36014C12.928 9.17214 13.652 8.95214 14.984 8.88814C16.424 8.82014 16.856 8.80814 20.5 8.80814ZM20.5 6.34814C16.792 6.34814 16.328 6.36414 14.872 6.43214C13.42 6.50014 12.428 6.72814 11.556 7.06814C10.66 7.41214 9.89599 7.88014 9.13999 8.64014C8.37999 9.40014 7.91599 10.1601 7.56399 11.0601C7.22799 11.9281 6.99599 12.9201 6.92799 14.3761C6.85999 15.8321 6.84399 16.2961 6.84399 20.0041C6.84399 23.7121 6.85999 24.1761 6.92799 25.6321C6.99599 27.0841 7.22399 28.0761 7.56399 28.9481C7.91199 29.8401 8.37999 30.6041 9.13999 31.3601C9.89999 32.1201 10.66 32.5841 11.56 32.9361C12.428 33.2721 13.42 33.5041 14.876 33.5721C16.332 33.6401 16.796 33.6561 20.504 33.6561C24.212 33.6561 24.676 33.6401 26.132 33.5721C27.584 33.5041 28.576 33.2761 29.448 32.9361C30.34 32.5881 31.104 32.1201 31.86 31.3601C32.62 30.6001 33.084 29.8401 33.436 28.9401C33.772 28.0721 34.004 27.0801 34.072 25.6241C34.14 24.1681 34.156 23.7041 34.156 19.9961C34.156 16.2881 34.14 15.8241 34.072 14.3681C34.004 12.9161 33.776 11.9241 33.436 11.0521C33.088 10.1601 32.62 9.39614 31.86 8.64014C31.1 7.88014 30.34 7.41614 29.44 7.06414C28.572 6.72814 27.58 6.49614 26.124 6.42814C24.672 6.36414 24.208 6.34814 20.5 6.34814Z"
                                            fill="white" />
                                        <path
                                            d="M20.5 12.9883C16.628 12.9883 13.488 16.1283 13.488 20.0003C13.488 23.8723 16.628 27.0123 20.5 27.0123C24.372 27.0123 27.512 23.8723 27.512 20.0003C27.512 16.1283 24.372 12.9883 20.5 12.9883ZM20.5 24.5523C17.988 24.5523 15.948 22.5163 15.948 20.0003C15.948 17.4843 17.988 15.4483 20.5 15.4483C23.012 15.4483 25.052 17.4843 25.052 20.0003C25.052 22.5163 23.012 24.5523 20.5 24.5523Z"
                                            fill="white" />
                                        <path
                                            d="M27.7879 14.3523C28.6937 14.3523 29.4279 13.618 29.4279 12.7123C29.4279 11.8065 28.6937 11.0723 27.7879 11.0723C26.8822 11.0723 26.1479 11.8065 26.1479 12.7123C26.1479 13.618 26.8822 14.3523 27.7879 14.3523Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <linearGradient id="paint0_linear_91_7481" x1="6.35786" y1="34.1421"
                                            x2="34.6421" y2="5.85786" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#FFD521" />
                                            <stop offset="0.0551048" stop-color="#FFD020" />
                                            <stop offset="0.1241" stop-color="#FEC01E" />
                                            <stop offset="0.2004" stop-color="#FCA71B" />
                                            <stop offset="0.2821" stop-color="#FA8316" />
                                            <stop offset="0.3681" stop-color="#F85510" />
                                            <stop offset="0.4563" stop-color="#F51E09" />
                                            <stop offset="0.5" stop-color="#F30005" />
                                            <stop offset="0.5035" stop-color="#F20007" />
                                            <stop offset="0.5966" stop-color="#E1003B" />
                                            <stop offset="0.6879" stop-color="#D30067" />
                                            <stop offset="0.7757" stop-color="#C70088" />
                                            <stop offset="0.8589" stop-color="#BF00A0" />
                                            <stop offset="0.9357" stop-color="#BB00AF" />
                                            <stop offset="1" stop-color="#B900B4" />
                                        </linearGradient>
                                        <clipPath id="clip0_91_7481">
                                            <rect width="40" height="40" fill="white"
                                                transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-[33px;] md:w-[40px;] lg:w-[40px;]"
                                    viewBox="0 0 41 40" fill="none">
                                    <path
                                        d="M3.91317 5L16.5694 21.9225L3.83325 35.6812H6.69964L17.8501 23.6353L26.8593 35.6812H36.6137L23.2455 17.8069L35.1001 5H32.2338L21.9647 16.0941L13.6676 5H3.91317ZM8.12841 7.11138H12.6096L32.3979 33.5695H27.9166L8.12841 7.11138Z"
                                        fill="black" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-[#C2E813] mt-10 md:mt-14 lg:mt-20">

        </div>
        <div class="flex gap-2 justify-center items-center py-6">
            <p class="text-xs md:text-lg lg:text-xl font-normal">Copyright © 2023 Synex Digital</p>
        </div>
    </div>
</footer>
