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

})// end ready
