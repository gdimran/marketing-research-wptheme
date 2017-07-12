jQuery(document).ready(function ($) {

    // Bootstrap menu fix
    $(".navbar-toggle").click(function () {
        $(".header").css('background', '#000');
    });


    $(".navbar-nav li a").click(function () {
        $(".navbar-collapse").removeClass('in');
    });

    $('#tweet').twittie({
        count: 1,
        template: '{{tweet}}'
    });


    // jQuery sticky menu
    $(".header").sticky({
        topSpacing: 0
    });

    // jQuery smooth scroll
    $('.navbar-nav li a, .scroll-to-bottom a').bind('click', function (event) {
        var $anchor = $(this);
        var headerH = '70';
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
        }, 1200, 'easeInOutExpo');

        event.preventDefault();
    });


    // search js
    $(function () {
        $('a[href="#search"]').on('click', function (event) {
            event.preventDefault();
            $('#search').addClass('open');
            $('#search > form > input[type="search"]').focus();
        });

        $('#search, #search button.close').on('click keyup', function (event) {
            if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                $(this).removeClass('open');
            }
        });


        //Do not include! This prevents the form from submitting for DEMO purposes only!
        $('form').submit(function (event) {
            event.preventDefault();
            return false;
        })
    });

    
      // smooth scrolling when a link in the menu is clicked //
    $("a[href^='#']").on("click", function (event) {
        var target = $($(this).attr("href"));

        if (target.length) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: target.offset().top
            }, 1500);
        }
    });
    
//---------home page slider-----------
    $('#home_slider, #footer_slider').owlCarousel({
        loop:true,
        items:1,
        autoplay: false,
        autoplayTimeout:5000,
        nav:true,
        smartSpeed:900,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });

    // jQuery scroll psy
    $('body').scrollspy({
        target: '.navbar-collapse',
        offset: 95
    });

    // jQuery counter
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // Owl Carousel
    $('.article-list').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: 5000,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Owl Carousel
    $('.client-list').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: 5000,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });

    
    
    
    

    // Owl Carousel
    $('.old-event-list').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: 5000,
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });


    $('.portfolio-menu li').click(function () {

        $(".portfolio-menu li").removeClass("active");
        $(this).addClass("active");

        var selector = $(this).attr('data-filter');
        $(".portfolio-items").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });


});


jQuery(document).ready(function ($) {    
    $('.tax-filter').click(function (event) {          // Prevent defualt action - opening tag page
                
        if (event.preventDefault) {            
            event.preventDefault();        
        } else {            
            event.returnValue = false;        
        }          // Get tag slug from title attirbute
                
        var selecetd_taxonomy = $(this).attr('title');     
    });
});





jQuery(window).load(function () {

    // Active isotope in container

    jQuery(".portfolio-items").isotope({
        itemSelector: '.single-portfolio',
        layoutMode: 'fitRows',
    });

});



