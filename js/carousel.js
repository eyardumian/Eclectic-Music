$(document).ready(function(){

  $('.owl-carousel').owlCarousel({
    items:8,
    autoplay:true,
    autoplayTimeout:1800,
    autoplayHoverPause:true,
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// $(".owl-carousel").owlCarousel({
//      items : 4,
//      loop  : true,
//      margin : 30,
//      nav    : true,
//      smartSpeed :900,
//      navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
//    });

})
