@extends('frontend.layouts.app')

@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        ol,
        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            display: inline-block;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
            padding: 0;
        }

        #banner_part {
            margin: 20px 0;
            padding: 60px 0;
        }

        #banner_part .web {
            font-family: 'Arimo', sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #999999;
            padding-top: 80px;
            padding-bottom: 5px;
        }

        #banner_part .banner_text {
            font-family: 'Arimo', sans-serif;
            font-weight: 700;
            line-height: 70px;
            font-size: 60px;
            color: #161616;
            padding-right: 60px;
            transition: .6s;
        }

        #banner_part .start {
            font-family: 'Arimo', sans-serif;
            font-weight: 500;
            font-size: 22px;
            color: #161616;
            border: 1px solid #999999;
            margin-top: 20px;
            padding: 12px 18px;
            border-radius: 6px;
        }

        #banner_part .start:hover {
            color: #ffffff;
            border: 1px solid #161616;
            background: #161616;
            transition: .6s;
        }

        #banner_part .banner_img {
            width: 100%;
        }

        /* ========================================
                                                                                banner_part End
                                                                    ========================================= */


        /* ========================================
                                                                                idea_part start
                                                                    ========================================= */
        #idea_part {
            position: relative;
            padding-bottom: 50px;
        }

        .left_title {
            font-family: 'Arimo', sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #161616;
            padding-bottom: 15px;
            position: sticky;
            padding-top: 80px;
        }

        .left_text {
            padding-right: 30px;
        }

        .text {
            font-family: 'Arimo', sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #161616;
            padding-bottom: 30px;
        }

        .right {
            padding-left: 50px;
            padding-top: 80px;
        }

        .right_title {
            font-family: 'Arimo', sans-serif;
            font-size: 30px;
            font-weight: 700;
            color: #161616;
            padding-bottom: 15px;
            position: sticky;
        }

        .right_title::before {
            width: 30px;
            height: 30px;
            background: rgb(133, 133, 133);
            border-radius: 5px;
            position: absolute;
            top: 20px;
            left: -32px;
            transform: translate(-50%, -50%);
            content: '';
            z-index: 1;
        }

        #design_part {
            position: relative;
            padding-bottom: 80px;
        }

        #development_part {
            position: relative;
            padding-bottom: 80px;
        }

        #test_part {
            position: relative;
            padding-bottom: 80px;
        }
    </style>
@endsection

@section('content')
    <div class="main-box-style1 bg-white radius-9 mx-4 my-3 mt-4">
        <div class="container">
            <div id="banner_part">
                <div class="row">
                    <div class="col">
                        <h2 class="web">Website Development</h2>
                        <p class="banner_text">Beautifully Crafted Websites that Deliver Results</p>
                        <a class="start" href="#">Start a Project</a>
                    </div>
                    <div class="col">
                        <img class="banner_img" src="./assets/website.jpg" alt="">
                    </div>
                </div>
            </div>
            <hr>
            <div id="idea_part">
                <div class="row">
                    <div class="col ">
                        <div class="sticky-lg-top">
                            <h2 class="left_title ">Exploring Project Idea</h2>
                            <p class="left_text text">The initial phase of website development service involves discussing
                                ideas with
                                stakeholders, conducting research, and brainstorming to identify any problems and determine
                                the
                                most efficient way to solve them. This phase lays the foundation for the project, ensuring
                                that
                                the website's objectives and functionality align with stakeholder requirements.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="right">
                            <div>
                                <h2 class="right_title">Discussing ideas with stakeholders</h2>
                                <p class="text">During the initial phase of the project, we will engage in extensive
                                    discussions with stakeholders to gain a deep understanding of the key requirements and
                                    expectations, ensuring that we have a clear and thorough grasp of the project's
                                    objectives.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Research</h2>
                                <p class="text">After gathering ideas about the project through stakeholder discussions,
                                    we
                                    will embark on a thorough research phase to identify any potential challenges and
                                    determine effective solutions.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Competitor Audit</h2>
                                <p class="text">Next, we will conduct a thorough audit of competitors in the industry to
                                    gain insight into their approaches and identify potential areas of improvement for the
                                    project. This audit will help us develop a unique strategy that sets the project apart
                                    from its competitors.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Brainstorm</h2>
                                <p class="text">After gathering and analyzing all the information from stakeholder
                                    discussions, research, and competitor audits, we will hold a brainstorming session to
                                    synthesize our findings. This collaborative approach will allow us to develop a
                                    comprehensive plan that incorporates all relevant insights and ideas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="design_part">
                <div class="row">
                    <div class="col ">
                        <div class="sticky-lg-top">
                            <h2 class="left_title ">Working with Design</h2>
                            <p class="text left_text">The design phase of website development involves wire-framing,
                                creating asset and content, and developing a user interface design and prototype. This phase
                                ensures that the website's visual elements and user experience align with the project's
                                objectives, resulting in an engaging and intuitive website.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="right">
                            <div>
                                <h2 class="right_title">Wireframe and User experience</h2>
                                <p class="text">Once we have a clear understanding of the project's requirements, we will
                                    create a wireframe and user experience design. This design phase will ensure that the
                                    website's layout and functionality are intuitive and user-friendly, creating an engaging
                                    experience for visitors.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Image and Content</h2>
                                <p class="text">With the wireframe and user experience design complete, we will
                                    collaborate
                                    with stakeholders to develop compelling content and source relevant assets that align
                                    with the project's brand identity, objectives and storytelling.</p>
                            </div>
                            <div>
                                <h2 class="right_title">UI Design & Prototyping</h2>
                                <p class="text">We will create an intuitive and visually appealing UI design and prototype
                                    to demonstrate all possible interactions. This allows stakeholders to experience the
                                    website's functionality and suggest adjustments, ensuring that the final product exceeds
                                    expectations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="development_part">
                <div class="row">
                    <div class="col ">
                        <div class="sticky-lg-top">
                            <h2 class="left_title ">Development</h2>
                            <p class="text left_text">Technical architecture, front-end development, back-end development,
                                and responsive design are integral phases in website development. The technical architecture
                                sets the groundwork for website development, whereas front-end development is centered
                                around crafting the visual elements of the website. Back-end development ensures a secure
                                and robust server-side architecture, and responsive design optimizes the website for
                                seamless user experience across all devices.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="right">
                            <div>
                                <h2 class="right_title">Technical Architecture</h2>
                                <p class="text">Following the design and prototyping phase, we will develop a
                                    comprehensive
                                    technical architecture for website development. This plan will outline the necessary
                                    technology, tools, and frameworks needed to create a functional, scalable, and secure
                                    website that meets the project's specific requirements.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Frontend Development</h2>
                                <p class="text">With the technical architecture in place, we will begin the front-end
                                    development phase, leveraging the latest frameworks to create an exceptional user
                                    experience. Our team of skilled developers will ensure that the website is optimized for
                                    speed, and functionality, delivering a product that exceeds expectations.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Animation Implementation</h2>
                                <p class="text">To enhance the website's user experience and engagement, We'll use the
                                    most
                                    recent technology to implement animations. By utilizing the required tools and
                                    techniques to create captivating animations that align with the project's objectives,
                                    resulting in a website that engages visitors and effectively communicates its key
                                    messages.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Responsive Web Development</h2>
                                <p class="text">To ensure a seamless user experience across all devices, we will optimize
                                    the website for responsiveness. Our team will utilize the latest techniques to create a
                                    website that adjusts seamlessly to all screen sizes, providing a consistent experience
                                    for users, regardless of their device.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Backend Development</h2>
                                <p class="text">After completing the front-end development, the focus will shift to the
                                    back-end development phase, where the latest technologies will be used to build a secure
                                    and robust server-side architecture that meets the project's specific requirements. This
                                    will ensure that the website functions optimally and can handle a high volume of
                                    traffic.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Third party integrations</h2>
                                <p class="text">During this phase, we will integrate necessary third-party tools, such as
                                    payment gateways, social media platforms, and analytics software, using the latest tools
                                    and techniques to ensure a seamless integration with the website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="test_part">
                <div class="row">
                    <div class="col ">
                        <div class="sticky-lg-top">
                            <h2 class="left_title ">Testing & Deployment</h2>
                            <p class="text left_text">Testing and deployment are critical phases in the website development
                                process. We ensure excellent performance and strong security for the website in all respects
                                by doing thorough testing. After successful testing, the website is deployed onto the
                                client's server, ensuring a seamless launch.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="right">
                            <div>
                                <h2 class="right_title">Testing</h2>
                                <p class="text">Prior to deployment on the server, the website will undergo rigorous
                                    testing
                                    to ensure its functionality, performance, and security in every aspect.Utilizing the
                                    latest tools and techniques to conduct comprehensive tests, identifying and resolving
                                    any issues before launch, resulting in a high-quality and reliable website.</p>
                            </div>
                            <div>
                                <h2 class="right_title">Deployment</h2>
                                <p class="text">After successful testing, the website will be deployed onto the client's
                                    server. Our team of experienced developers will ensure that the deployment is seamless,
                                    and the website is fully operational, allowing stakeholders to make any final
                                    adjustments before launch.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
