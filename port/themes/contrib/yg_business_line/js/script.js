(function ($) {

 Drupal.behaviors.exampleModule = {
   attach: function (context, settings) {

  'use strict'; 

  $(document).ready(function() {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2,
        nav: false
      },
      600: {
        items: 4,
        nav: false
      },
      1000: {
        items: 6,
        nav: false,
        loop: false,
        margin: 20
      }
    }
  });
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    }); 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    });  

  // Porfolio - uses the magnific popup jQuery plugin
  $('.portfolio-popup').magnificPopup({
    type: 'image',
    removalDelay: 300,
    mainClass: 'mfp-fade',
    gallery: {
      enabled: true
    },
    zoom: {
      enabled: true,
      duration: 300,
      easing: 'ease-in-out',
      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
  });
});
jQuery(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $("#menu").addClass("sticky");
    } else {
        $("#menu").removeClass("sticky");
    }
    
});
new WOW().init();
}}})(jQuery, Drupal);