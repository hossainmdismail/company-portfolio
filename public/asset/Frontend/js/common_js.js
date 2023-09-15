$( function() {

    var wind = $(window);

    // wow = new WOW({
    //     boxClass: 'wow',
    //     animateClass: 'animated',
    //     offset: 200,
    //     mobile: false,
    //     live: false
    // });
    // wow.init();

    // ---------- background change -----------
    var pageSection = $(".bg-img");
    pageSection.each(function (indx) {

        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });

    // ---------- to top -----------

    wind.on("scroll", function() {

        var bodyScroll = wind.scrollTop(),
            toTop = $(".to_top")

        if (bodyScroll > 700) {

            toTop.addClass("show");

        } else {

            toTop.removeClass("show");
        }
    });
    
    $('.to_top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 0);
        return false;
    });


     /* ==  float_box_container button  == */
    $( ".float_box_container" ).mousemove(function(e) {
        var parentOffset = $(this).offset(); 
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(".float_box").css({"left": relX, "top": relY });
        $(this).children(".float_box").addClass("show");
    });
    $( ".float_box_container" ).mouseleave(function(e) {
        $(".float_box").removeClass("show");
    });

    // ------ sidemenu 1 ------
    $(".side_menu_btn").on("click", function() {
        $(this).toggleClass("active");
        $("#side_menu").toggleClass("show");
        $(".side_overlay").toggleClass("show");
    })

    $(".side_menu_cls").on("click", function() {
        $("#side_menu").removeClass("show");
        $(".side_overlay").removeClass("show");
    })

    $(".side_overlay").on("click", function() {
        $("#side_menu").removeClass("show");
        $(this).removeClass("show");
    })


    // -------- counter --------
    $('.counter').countUp({
        delay: 10,
        time: 2000
    });


      /* ==  Button Animation  == */
    $( ".button_su_inner" ).mouseenter(function(e) {
        var parentOffset = $(this).offset(); 
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
        $(this).prev(".su_button_circle").removeClass("desplode-circle");
        $(this).prev(".su_button_circle").addClass("explode-circle");
    });
    
    $( ".button_su_inner" ).mouseleave(function(e) {
        var parentOffset = $(this).offset(); 
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        $(this).prev(".su_button_circle").css({"left": relX, "top": relY });
        $(this).prev(".su_button_circle").removeClass("explode-circle");
        $(this).prev(".su_button_circle").addClass("desplode-circle");
    });
        
});



// ------------ Preloader -----------
$( function() {
    const svg = document.getElementById("svg");
    const tl = gsap.timeline();
    const curve = "M0 502S175 272 500 272s500 230 500 230V0H0Z";
    const flat = "M0 2S175 1 500 1s500 1 500 1V0H0Z";

    tl.to(".loader-wrap-heading .load-text , .loader-wrap-heading .cont", {
        delay: 1.5,
        y: -100,
        opacity: 0,
    });
    tl.to(svg, {
        duration: 0.5,
        attr: { d: curve },
        ease: "power2.easeIn",
    }).to(svg, {
        duration: 0.5,
        attr: { d: flat },
        ease: "power2.easeOut",
    });
    tl.to(".loader-wrap", {
        y: -1500,
    });
    tl.to(".loader-wrap", {
        zIndex: -1,
        display: "none",
    });
    tl.from(
        "header",
        {
            y: 200,
        },
        "-=1.5"
    );
    tl.from(
        "header .container",
        {
            y: 40,
            opacity: 0,
            delay: 0.3,
        },
        "-=1.5"
    );
});


$(window).on("load", function () {

    // ------------ Preloader -----------
    var body = $('body');
    body.addClass('loaded');
    setTimeout(function () {
        body.removeClass('loaded');
    }, 1500);

});


// ------------ mousecursor scripts -----------
$( function() {
    function mousecursor() {
        if ($("body")) {
            const e = document.querySelector(".cursor-inner"),
                t = document.querySelector(".cursor-outer");
            let n, i = 0,
                o = !1;
            window.onmousemove = function (s) {
                o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
            },
             $("body").on("mouseenter", ".hover_circle, .cursor-pointer", function () {
                e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
            })
            , $("body").on("mouseleave", ".hover_circle, .cursor-pointer", function () {
                $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
            }),

                // $("body").on("mouseenter", ".swiper-wrapper.curs-scroll", function () {
                //     e.classList.add("cursor-scroll"), t.classList.add("cursor-scroll")
                // }), $("body").on("mouseleave", ".swiper-wrapper.curs-scroll", function () {
                //     $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-scroll"), t.classList.remove("cursor-scroll"))
                // }),

                e.style.visibility = "visible", t.style.visibility = "visible"
        }
    };

    $(function () {
        mousecursor();
    });
});
