@extends('frontend.layouts.app')

@section('style')
    <style>
        h2.main_title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 4rem;
        }

        p.details_text {
            font-size: 18px;
            color: #3f3d3de0;
        }

        .boxes {
            margin-bottom: 3rem;
        }
    </style>
@endsection
@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <section style="padding: 20px">
            <div id="terms_condition" style="margin-top: 3rem;margin-bottom: 3rem">
                <div class="container">
                    <h2 class="main_title">Terms and <span class="fst-italic color-999 fw-500 fm-playfair">Privacy
                            Policy</span></h2>
                    <p class="details_text">The present Privacy Policy outlines how Codixel collects, utilizes, manages, and
                        reveals the data acquired from users. It applies to all services and products offered by Codixel.
                    </p>
                    <div class="boxes">
                        <h3 class="sub_title">License to use website</h3>
                        <p class="details_text">The intellectual property rights in the website and the materials on the
                            website
                            belong to us or our licensors. All these intellectual property rights are reserved, except as
                            otherwise
                            stated in the license below. You may only view, download for the purpose of caching, and print
                            pages or
                            other content from the website for your personal use, subject to the restrictions outlined below
                            and
                            elsewhere in these terms and conditions.</p>
                        <p class="details_text">Any violation of the points outlined may result in federal action being
                            taken against the offender. Please be aware that we take these violations seriously and will
                            pursue legal action if necessary. It is your responsibility to abide by these rules and
                            regulations to avoid any legal consequences.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Personal identification information</h3>
                        <p class="details_text">We may collect personal identification information through various means
                            from Users, which include but are not limited to, visiting our site, registering on the site,
                            placing an order, subscribing to the newsletter, participating in a survey, filling out a form,
                            and utilizing other activities, services, features or resources made available on our Site.</p>
                        <p class="details_text">When appropriate, Users may be requested to provide their name, email
                            address, mailing address, and phone number. We will collect personal identification information
                            from Users only when it is voluntarily submitted to us. Users have the option to decline
                            providing personally identifiable information; however, doing so may hinder their participation
                            in certain Site-related activities.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Non-personal identification information</h3>
                        <p class="details_text">Whenever users engage with our Site, we may gather non-personal
                            identification information that pertains to their interaction. Such information may include the
                            type of computer, browser, and technical details about the user's means of connecting to our
                            Site, including their operating system and internet service provider, among other similar
                            information.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Web browser cookies</h3>
                        <p class="details_text">To improve user experience, our Site may use cookies. These small files are
                            placed on a user's hard drive by web browsers for record-keeping purposes and, at times, to
                            track information about them. Users have the option to configure their web browser settings to
                            either refuse cookies or to receive alerts when cookies are being transmitted. It is important
                            to note, however, that disabling cookies may result in some parts of the Site not functioning
                            properly.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">How we protect your information</h3>
                        <p class="details_text">We have implemented appropriate data collection, storage, and processing
                            practices, as well as security measures, to safeguard against unauthorized access, modification,
                            disclosure, or destruction of your personal information, username, password, transaction
                            information, and other data stored on our Site.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Sharing your personal information</h3>
                        <p class="details_text">We do not disclose, trade, or lease personal identification information of
                            our
                            Users to any third party. However, we may share generic aggregated demographic information,
                            which is
                            not linked to any personal identification information, with our trusted business partners,
                            affiliates, and advertisers for the purposes mentioned earlier.</p>
                        <p class="details_text">We do not disclose, trade, or lease personal identification information of
                            our
                            Users to any third party. However, we may share generic aggregated demographic information,
                            which is
                            not linked to any personal identification information, with our trusted business partners,
                            affiliates, and advertisers for the purposes mentioned earlier.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Third-party websites</h3>
                        <p class="details_text">Our Site may contain advertising or other content that includes links to the
                            websites and services of our partners, suppliers, advertisers, sponsors, licensors, and other
                            third
                            parties. However, we do not control the content or links that appear on these sites and are not
                            liable for the practices used by websites linked to or from our Site.</p>
                        <p class="details_text">It should be noted that these sites or services, including their content and
                            links, may be continually changing. Furthermore, these sites and services may have their own
                            customer service policies and privacy policies. Any interaction or browsing on any other
                            website,
                            including sites that have a link to our Site, is subject to that particular website's own terms
                            and
                            policies.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Changes to this privacy policy</h3>
                        <p class="details_text">Codixel reserves the right to modify this privacy policy at its discretion
                            and
                            at any time. In the event of any updates or changes, the revised date will be indicated at the
                            bottom of this page. We advise Users to check this page regularly to stay informed about how we
                            safeguard the personal information we collect. By using our Site, you acknowledge and agree that
                            it
                            is your responsibility to review this privacy policy periodically and remain informed of any
                            modifications.</p>
                    </div>
                    <div class="boxes">
                        <h3 class="sub_title">Your acceptance of these terms</h3>
                        <p class="details_text">If you use our Site, it means that you agree to abide by this policy. If you
                            do
                            not agree with this policy, please do not use our Site. Your continued use of the Site after we
                            post
                            changes to this policy will mean that you accept those changes.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
