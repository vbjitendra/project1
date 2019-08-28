(function ($, Drupal) {
  Drupal.behaviors.myModuleBehavior = {
    attach: function (context, settings) {

      jQuery(document).ready(function( $ ) {
        $(".blog-carousel").owlCarousel({
          autoplay: true,
          dots: false,
          loop: true,
          nav: true,
          responsive: { 0: { items: 1 }, 768: { items: 1 }, 900: { items: 2 }
          }
        });
            $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
          $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
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
        new WOW().init();  
        $('.loop').owlCarousel({
          loop: true,
          margin: 10,
          responsive: {
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }    
          }
        });
        $('.testimonial').owlCarousel({
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
      });
      $(window).on('load', function(){
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
      });


    }
  };
})(jQuery, Drupal);





