<footer class="tc-footer-style1 main-box-style1 bg-white radius-9 mx-4 my-3 mb-4">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-4">
                    <h6 class="sub-title"> Synex Digital </h6>
                    <a href="#" class="fsz-22 text-decoration-underline color-000"> digitalsynex@gmail.com </a>
                    <a href="#" class="mt-30">Dhaka, Bangladesh</a> <br>
                    <a href="#" class="mt-20"> (+880) 1757647319 </a>
                    {{-- <a href="#" class="mt-20"> (+880) 1757647319 </a> --}}
                </div>
                <div class="col-lg-3 offset-lg-2">
                    <h6 class="sub-title"> Links </h6>
                    <ul class="links">
                        <li>
                            <a href="#"> About us </a>
                        </li>
                        <li>
                            <a href="#"> Term & Condition </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h6 class="sub-title"> Social </h6>
                    <ul class="links">
                        @foreach ($soicals as $soical)
                            <li>
                                <a href="{{ $soical->title }}"> {{ $soical->name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="foot">
            <div class="row">
                <div class="col-lg-9">
                    <div class="d-flex align-items-center flex-wrap">
                        {{-- <div class="foot-logo">
                            <img src="" alt="" class="lt_item">
                            <img src="" alt="" class="dr_item">
                        </div> --}}
                        <div class="inf ms-80">
                            <p> © 2023 By <a href="#" class="color-000"> Synex Digital </a> All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
