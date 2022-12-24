(function ($, Drupal) {
  Drupal.behaviors.myModuleBehavior = {
    attach: function (context, settings) {
      $('.navbar-nav li a:last').each(function(){
        $(this).addClass("btn btn-infos");
      });

      jQuery(document).ready(function( $ ) {
        $('.loop').owlCarousel({
          loop: true,
          margin: 10,
          responsive: {
            0:{
      	        items:1
      	    },
      	    600:{
      	        items:1
      	    },
      	    1000:{
      	        items:1
      	    }    
          }
        });

        
        $('.portfolio-popup').magnificPopup({
          type: 'image',
          removalDelay: 300,
          mainClass: 'mfp-fade',
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: false,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
              return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
          }
      });

        $(".insurance-detail-testimonial").owlCarousel({
              autoPlay: true, 
              dots:true,
              slideSpeed:2000,   
              items : 1,
              itemsDesktop : [1199,1],
              itemsDesktopSmall : [980,1],
              itemsTablet: [768,1],
              itemsMobile : [479,1],
          });

        new WOW().init();


        
      $( window ).on("load", function() {
          var $container = $('.clients-listing');
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
       });   

      $(document).click(function(e) {
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');      
          }
      });

      $(function() {
       var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');

            context.beginPath();
            context.moveTo(80, 250);
            context.bezierCurveTo(100, 150, 350, 100, 400, 250);
            context.lineWidth = 3;

            // line color
            context.strokeStyle = '#e5e5fe';
            context.stroke();

          var canvas = document.getElementById('secondCanvas');
            var context = canvas.getContext('2d');

            context.beginPath();
            context.moveTo(80, 200);
            context.bezierCurveTo(150, 100, 350, 100, 400, 250);
            context.lineWidth = 3;

            // line color
            context.strokeStyle = '#e5e5fe';
            context.stroke();

          var canvas = document.getElementById('thirdCanvas');
            var context = canvas.getContext('2d');

            context.beginPath();
            context.moveTo(70, 250);
            context.bezierCurveTo(100, 100, 350, 100, 400, 250);
            context.lineWidth = 3;

            // line color
            context.strokeStyle = '#e5e5fe';
            context.stroke();
      });  
       
      });

        var bannertitle = function() {
          var h3 = $('#banner-title');
          var text = h3.text().split(' ');
          for( var i = 0, len = text.length; i < len; i++ ) {
            text[i] = '<span>' + text[i] + '</span>';
          }
            $.each(text,function(i,val) {
              if( i % 3) {
                if(i == 2){
                  text[i] = '<br>' + val + '';
                }
              }
          });
        h3.html(text.join(' '));
      };

      // Document on load.
      $(function(){
        bannertitle();
      });


    }
  };
})(jQuery, Drupal);    