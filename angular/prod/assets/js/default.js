$(document).ready(function(){

    //  STARTS SLIDER FOR THE HOME PAGE
    $("#slider").flexslider({
        selector : ".slide > li",
        animation: "slide",
        slideshowSpeed: 5000,
        animationLoop: true,
        directionNav:false,
        start: function(){
            $('.slide li').fadeIn(2000);
        }

    }) // flexslider

    // OPENS UP NAVIGATION FOR MOBILE
    $("#mobile-menu").on('click', function(){
        $('.mobile-bg').fadeIn(500,function(){
            setTimeout(function(){$('.mobile-menu').addClass('slideInLeft');}, 500);
        });

    })


    $(document).on('click', '.mobile-close, .mobile-bg', function(){
        $('.mobile-bg').hide();
        $('.mobile-menu').removeClass('slideInLeft');
    })

    // ACTIVATES THE SLICK CAROUSEL THAT IS AT THE BOTTOM OF THE HOME PAGE
    $('.jacob-carousel').slick({
        dots:true,
        infinite:true,
        autoplay:true,
        autoplaySpeed:3000,
        slidesToShow:4,
        slidesToScroll:2,
        prevArrow:"<button class='slick-n'> <i class='fa fa-arrow-right'></i> </button>" ,
        nextArrow: "<button class='slick-p'><i class='fa fa-arrow-left'></i> </button>" ,
        responsive:[
            {
                breakpoint:768,
                settings:{
                    slideToShow:3
                }
            },
            {
                breakpoint:480,
                settings:{
                    slideToShow:2
                }
            }
        ]
    })

})// end ready
