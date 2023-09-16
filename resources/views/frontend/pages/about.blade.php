@extends('frontend.layouts.app')

@section('style')
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
@endsection
@section('content')
<main>
    <!--  Start contact  -->
    <section class="tc-contact-map-style1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.03615786845!2d-74.30934159824935!3d40.6975399481381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1683755825695!5m2!1sen!2seg" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!--  Start faq  -->
    <section class="tc-contact-form-style1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="section-title">
                            <p class="fsz-14 text-uppercase color-666 mb-20"> get a quote </p>
                            <h2 class="fsz-50 mb-50"> Get a personal design consultation </h2>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fal fa-clock"></i></span>
                            <h5 class="fsz-26 fw-bold text-capitalize title"> Open Hours </h5>
                            <div class="text"> 
                                <p> Monday – Saturday: 8am – 6pm </p>    
                                <p> Sunday: 11am — 4pm </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fal fa-envelope-open"></i></span>
                            <h5 class="fsz-26 fw-bold text-capitalize title"> Contact Info </h5>
                            <div class="text"> 
                                <p> Toll Free: 1-885-245-45677 </p>    
                                <p> Email: info@Swak-design.com </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <span class="icon"><i class="fal fa-map-marked"></i></span>
                            <h5 class="fsz-26 fw-bold text-capitalize title"> Location </h5>
                            <div class="text"> 
                                <p> 467 Davidson ave, Los Angeles CA 95716 </p>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="form">
                        <h3 class="fsz-30"> Make a request </h3>
                        <p class="fsz-16 color-777 mb-40"> Please provide more information so I can better assist </p>
                        <div class="form-group"> 
                            <label class="fsz-12 text-uppercase mb-10" for=""> full Name <span class="color-blue1"> ** </span> </label>   
                            <input type="text" class="form-control" placeholder="Enter here"> 
                        </div>
                        <div class="form-group"> 
                            <label class="fsz-12 text-uppercase mb-10" for=""> email address <span class="color-blue1"> ** </span> </label>   
                            <input type="text" class="form-control" placeholder="Enter here"> 
                        </div>
                        <div class="form-group"> 
                            <label class="fsz-12 text-uppercase mb-10" for=""> message <span class="color-blue1"> ** </span> </label>   
                            <textarea name="" id="" rows="5" placeholder="Project Details" class="form-control"></textarea>
                        </div>
                        <div class="button_su border-0 mt-10">
                            <span class="su_button_circle bg-000 desplode-circle"></span>
                            <a href="#" class="butn text-uppercase border-0 button_su_inner bg-blue1 py-3 px-5">
                                <span class="button_text_container fsz-14 text-white"> send message </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End faq  -->
</main>
@endsection