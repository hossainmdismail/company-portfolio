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
        $(".float_box").addClass("show");
    });
    $( ".float_box_container" ).mouseleave(function(e) {
        $(".float_box").removeClass("show");
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

  // -------- counter --------
  $('.counter').countUp({
        delay: 10,
        time: 2000
    });

    // --------- fav btn ---------
    $(".fav-btn").on("click" , function(){
        $(this).toggleClass("active");
    })

});

// ------------ working in desktop -----------
if ($(window).width() > 991) {
    $('.parallaxie').parallaxie({
    });
}

// ------------ swiper sliders -----------
$(document).ready(function() {

    // ------------ titmeline-slider -----------
    var swiper = new Swiper('.tc-about-timeline-style1 .titmeline-slider', {
        slidesPerView: 2,
        spaceBetween: 50,
        // centeredSlides: true,
        speed: 1000,
        pagination: false,
        navigation: {
            nextEl: '.tc-about-timeline-style1 .button-next',
            prevEl: '.tc-about-timeline-style1 .button-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: false,
        loop: false,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            787: {
                slidesPerView: 1,
            },
            991: {
                slidesPerView: 1,
            },
            1200: {
                slidesPerView: 1,
            }
        }
    });

    // ------------ titmeline-slider -----------
    var swiper = new Swiper('.tc-services-testimonials-style1 .tc-testimonials-slider1', {
        slidesPerView: 2,
        spaceBetween: 50,
        // centeredSlides: true,
        speed: 1000,
        pagination: false,
        navigation: {
            nextEl: '.tc-services-testimonials-style1 .swiper-next',
            prevEl: '.tc-services-testimonials-style1 .swiper-prev',
        },
        mousewheel: false,
        keyboard: true,
        autoplay: {
            delay: 6000,
        },
        loop: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            787: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 2,
            }
        }
    });

    // ------------ tc-services-style10 -----------
    var swiper = new Swiper('.page-team-style1 .header-slider', {
        spaceBetween: 300,
        centeredSlides: true,
        slidesPerView: "auto",
        speed: 30000,
        autoplay: {
            delay: 1,
        },
        loop: true,
    //   allowTouchMove: false,
        disableOnInteraction: true,
    });

    // ------------ gallery slider style1  -----------
  var swiper = new Swiper('.gallery-slider-style1', {
    slidesPerView: 1.6,
    spaceBetween: 90,
    centeredSlides: true,
    speed: 1000,
    pagination: false,
    mousewheel: true,
    loop: false, // Not recommended to enable!!!
    // longSwipesRatio: 0.01,
    // followFinger: false,
    // grabCursor: true, 
    // watchSlidesProgress: true,
    parallax: true,
    navigation: false,
    lazy: {
            loadPrevNext: true,
        },
    mousewheel: false,
    keyboard: true,
    autoplay: {
        delay: 5000,
    },
    loop: true,
    mousewheel: {
        releaseOnEdges: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        787: {
            slidesPerView: 1.6,
        },
        1900: {
            slidesPerView: 1,
        }
    }
});

});


// ------------ price slider -----------
$(document).ready(function(){
    const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%" ;
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
            }
        });
    });

    rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
            } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });
});


// ------------ product count -----------
$(document).ready(function(){
    $(".qt-plus").click(function() {
        $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
    });

    $(".qt-minus").click(function() {

        child = $(this).parent().children(".qt");

        if (parseInt(child.html()) > 1) {
            child.html(parseInt(child.html()) - 1);
        }

        $(this).parent().children(".full-price").addClass("minused");
    });
});


// ------------ script -----------
$(document).ready(function(){
    
});

// ------------ gsap scripts -----------
$( function() {
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    // create the smooth scroller FIRST!
    const smoother = ScrollSmoother.create({
    content: "#scrollsmoother-container",
    smooth: 2,
    normalizeScroll: true,
    ignoreMobileResize: true,
        effects: true,
    //preventDefault: true,
    //ease: 'power4.out',
    //smoothTouch: 0.1, 
    });

    // smoother.effects("img", { speed: "auto" });

    let headings = gsap.utils.toArray(".js-title").reverse();
    headings.forEach((heading, i) => {
    let headingIndex = i + 1;
    let mySplitText = new SplitText(heading, { type: "chars" });
    let chars = mySplitText.chars;

    chars.forEach((char, i) => {
    smoother.effects(char, { lag: (i + headingIndex) * 0.05, speed: 1 });
    });
    });


    let splitTextLines = gsap.utils.toArray(".js-splittext-lines");

    splitTextLines.forEach(splitTextLine => {
    const tl = gsap.timeline({
        scrollTrigger: {
        trigger: splitTextLine,
        start: 'top 90%',
        duration: 2,
        end: 'bottom 60%',
        scrub: false,
        markers: false,
        toggleActions: 'play none none none'
        // toggleActions: 'play none play reset'
        }
    });

    const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
    gsap.set(splitTextLine, { perspective: 400 });
    itemSplitted.split({ type: "lines" })
    // tl.from(itemSplitted.lines, { y: 100, delay: 0.2, opacity: 0, stagger: 0.1, duration: 1, ease: 'inOut' });
    // tl.from(itemSplitted.lines, { y: 100, opacity: 0, stagger: 0.05, duration: 1, ease: 'back.inOut' });
    tl.from(itemSplitted.lines, { duration: 1, delay: 0.5, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
    });

});
