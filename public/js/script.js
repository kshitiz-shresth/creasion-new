
      $(document).ready(function () {
        (function () {
            var showChar = 450;
            var ellipsestext = "";

            $(".readToggle").each(function () {
                var content = $(this).html();
                if (content.length > showChar) {
                    var c = content.substr(0, showChar);
                    var h = content;
                    var html =
                        '<div class="readToggle-text" style="display:block">' +
                        c +
                        '<span class="moreellipses">' +
                        ellipsestext +
                        '&nbsp;&nbsp;<a href="" class="moreless more icon-hover">Read more <img src="images/next-black.svg"></a></span></span></div><div class="readToggle-text" style="display:none">' +
                        h +
                        '<a href="" class="moreless less icon-hover">Read Less <img src="images/next-black.svg"></a></span></div>';

                    $(this).html(html);
                }
            });

            $(".moreless").click(function () {
                var thisEl = $(this);
                var cT = thisEl.closest(".readToggle-text");
                var tX = ".readToggle-text";

                if (thisEl.hasClass("less")) {
                    cT.prev(tX).toggle();
                    cT.slideToggle();
                } else {
                    cT.toggle();
                    cT.next(tX).fadeToggle();
                }
                return false;
            });
            /* end iffe */
        })();

        /* end ready */
    });



// Header Fix

'use strict';
    jQuery(document).on('ready', function(){
        
        // Mean Menu
         jQuery('.mean-menu').meanmenu({
            meanScreenWidth: "991"
        });

    });



 $(window).on('scroll', function() {
    if ($(this).scrollTop() >200){  
        $('#header').addClass("fix-head");
    }
    else{
        $('#header').removeClass("fix-head");
    }
});


$(".iclose").click (function(e){
    $(".inter-detail").hide();
    $('.iread').removeClass('active');
    e.preventDefault();
});


$("#chitwan").hover(function(){

    $("#list-chi").addClass("cv-area-hover");
},
function(){
    $("#list-chi").removeClass("cv-area-hover");
});

$("#lalitpur").hover(function(){

    $("#list-lal").addClass("cv-area-hover");
},
function(){
    $("#list-lal").removeClass("cv-area-hover");
});

$("#parsa").hover(function(){

    $("#list-par").addClass("cv-area-hover");
},
function(){
    $("#list-par").removeClass("cv-area-hover");
});

$("#saptari").hover(function(){

    $("#list-sap").addClass("cv-area-hover");
},
function(){
    $("#list-sap").removeClass("cv-area-hover");
});

$("#sarlahi").hover(function(){

    $("#list-sar").addClass("cv-area-hover");
},
function(){
    $("#list-sar").removeClass("cv-area-hover");
});

$("#bhaktapur").hover(function(){

    $("#list-bha").addClass("cv-area-hover");
},
function(){
    $("#list-bha").removeClass("cv-area-hover");
});


$("#kathmandu").hover(function(){

    $("#list-kat").addClass("cv-area-hover");
},
function(){
    $("#list-kat").removeClass("cv-area-hover");
});







$(".iread").click (function(e){

  $('.iread').removeClass('active');

  $(this).addClass('active');

  $(".inter-detail").stop().slideUp(100); 

  $(this).next(".inter-detail").stop().slideToggle(100);
  e.preventDefault();
});

// Video Model



// Instagam Slides
$('.instagram-slides').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    smartSpeed: 550,
    autoplay: true,
    navText: [
        "<i class='fas fa-chevron-left'></i>",
        "<i class='fas fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 3,
        },
        1200: {
            items: 4,
        }
    }
});


$('.id-test').owlCarousel({
    loop: false,
    dots: true,
    autoplayHoverPause: true,
    smartSpeed: 750,
    autoplay: true,
    navText: [
        "<i class='fas fa-chevron-left'></i>",
        "<i class='fas fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 1,
            dots: true,
            autoplay: true,
            loop:true,
        },
        768: {
            items: 1,
            dots: true,
            autoplay: true,
            loop:true,
        },
        1200: {
            items: 1,
        }
    }
});


$('.spotlight-slides').owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    autoplayHoverPause: true,
    smartSpeed: 750,
    autoplay: false,
    navText: [
        "<i class='fas fa-chevron-left'></i>",
        "<i class='fas fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 1,
            dots: true,
            autoplay: true,
            loop:true,
        },
        768: {
            items: 2,
            dots: true,
            autoplay: true,
            loop:true,
        },
        1200: {
            items: 3,
        }
    }
});

$('.ig-slider').owlCarousel({
    stagePadding: 200,
    loop:true,
    nav:false,
    items:1,
    lazyLoad: true,
    nav:true,
       smartSpeed: 750,
    autoplay: true,
    autoplayHoverPause: true,
    navText: [
        "<i class='fas fa-chevron-left'></i>",
        "<i class='fas fa-chevron-right'></i>"
    ],
  responsive:{
        0:{
            items:1,
            stagePadding: 0
        },
        600:{
            items:1,
            stagePadding: 0
        },
        1000:{
            items:1,
            stagePadding: 80
        },
        1200:{
            items:1,
            stagePadding: 200
        }
    }
})

$('.ips-slider').owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    margin:10,
    autoplayHoverPause: true,
    smartSpeed: 750,
    autoplay: false,
    navText: [
        "<i class='fas fa-chevron-left'></i>",
        "<i class='fas fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 2,
            dots: true,
            autoplay: true,
            loop:true,
            smartSpeed: 450,
        },
        768: {
            items: 3,
            dots: true,
            autoplay: true,
            loop:true,
            smartSpeed: 550,
        },
        1200: {
            items: 5,
        }
    }
});


            // Scroll Event
    $(window).on('scroll', function(){
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $('.go-top').addClass('active');
        if (scrolled < 600) $('.go-top').removeClass('active');
    });  
    // Click Event
    $('.go-top').on('click', function() {
        $("html, body").animate({ scrollTop: "0" },  500);
    });



// Index page Dropdowm
$(function() {
    $('.accordion').find('.accordion-title').on('click', function(){
        // Adds Active Class
        $(this).toggleClass('active');
        // Expand or Collapse This Panel
        $(this).next().slideToggle('fast');
        // Hide The Other Panels
        $('.accordion-content').not($(this).next()).slideUp('fast');
        // Removes Active Class From Other Titles
        $('.accordion-title').not($(this)).removeClass('active');       
    });
});


// WOW Js
new WOW().init();


// Index Intervention

function custom_count(){
    var flag = true;
    $('.number-counter-section').each(function() {
        if ($(this).isInViewport()) {   // Here we check perticular section is in the viewport or number-counter-section
            if (flag) {
                /* FOR number counter(odometer)  */
                var arr = [],
                i = 0;
                $('.odometer').each(function() {
                    var odo = $(".odometer");
                    odo.each(function() {
                        var countNumber = $(this).attr("data-count");
                        $(this).html(countNumber);
                    });
                   
                });
                flag = false;
            }
        } else {}
    });
}


// for check the section in view port or not;
$.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
    console.log(elementBottom > viewportTop && elementTop < viewportBottom);
};

$(document).ready(function() {

    //  odometer section is on view-port or not
    custom_count();
    //resize-function
    $(window).resize(function() {
        custom_count();
    });
    
    $(window).on("scroll",function(){
      custom_count();
    });
});


$('select').niceSelect();


$(function() {

  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); 
        return false;
      }
    }
  });
});



