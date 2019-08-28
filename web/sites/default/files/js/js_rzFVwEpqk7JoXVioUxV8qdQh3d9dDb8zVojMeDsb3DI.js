jQuery(document).ready(function($) {
  if ($(".smooth-scroll").length>0) {
    $(".smooth-scroll a, a.smooth-scroll").click(function() {
      if (location.pathname.replace(/^\//,"") == this.pathname.replace(/^\//,"") && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $("[name=" + this.hash.slice(1) +"]");
        if (target.length) {
          $("html,body").animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  }
});
;
(function ($) {

  "use strict";

  $.fn.mobileMenu = function (options) {
    var settings = $.extend({
      targetWrapper: '.navbar-we-mega-menu',
      accordionMenu: 'true',
      toggledClass: 'toggled',
      pageSelector: 'body'
    }, options);

    if ($(window).width() <= 991) {
      $(settings.targetWrapper).addClass('mobile-main-menu');
    }

    var toggleButton = this;

    $(window).resize(function () {
      if ($(window).width() <= 991) {
        $(settings.targetWrapper).addClass('mobile-main-menu');
      } else {
        $(settings.targetWrapper).removeClass('mobile-main-menu');
        $('body').css('overflow', '');
        $('body').css('height', '');
        $('body').css('position', '');
        $(settings.pageSelector).removeClass(settings.toggledClass);
        $(settings.pageSelector).find('.overlay').remove();
        $(settings.pageSelector).css('position', '');
        item.removeClass('open');
        item.find('ul').css('display', '');
      }
    });

    function _weMegaMenuClear() {
      var wrapper = $(settings.pageSelector);
      var overlay = wrapper.find('.overlay');
      overlay.remove();
      wrapper.css({
        'width': '',
        'position': ''
      });
      wrapper.removeClass(settings.toggledClass);
      wrapper.find('div.region-we-mega-menu nav').removeClass('we-mobile-megamenu-active');

      if (overlay.length > 0) {
        wrapper.find('.btn-close').remove();
        overlay.remove();
        $('body').css('overflow', '');
        $('body').css('height', '');
        $('body').css('position', '');
      }
    }

    this.off('click.mobileMenu');
    this.on('click.mobileMenu', function (e) {
      var targetWrapper = $(this).closest('div.region-we-mega-menu').find('nav.navbar-we-mega-menu');
      var wrapper = $(settings.pageSelector);
      if (!wrapper.hasClass(settings.toggledClass)) {
        wrapper.addClass(settings.toggledClass).css('position', 'relative');
        $(settings.targetWrapper).addClass('mobile-main-menu');
        targetWrapper.addClass('we-mobile-megamenu-active');
        if (wrapper.find('.overlay').length == 0) {
          var overlay = $('<div class="overlay"></div>');
          overlay.prependTo(wrapper);
          overlay.click(function () {
            _weMegaMenuClear();
          });
          $('body').css('overflow', 'hidden');
          $('body').css('btn-close', 'hidden');
          $('body').css('height', '100%');
          $('body').css('position', 'relative');
        }
        if (wrapper.find('.btn-close').length == 0) {
          var btnClose = $('<span class="btn-close"></span>');
          btnClose.prependTo(wrapper);

          $('.btn-close').on('click', function (e) {
            _weMegaMenuClear();
            e.preventDefault();
            return false;
          });
        }

      } else {
        _weMegaMenuClear();
      }
      e.preventDefault();
      e.stopPropagation();
    });

    if (settings.accordionMenu == 'true') {
      var targetWrapper = $(this).closest('div.region-we-mega-menu').find('nav.navbar-we-mega-menu');
      var menu = $(targetWrapper).find('ul.we-mega-menu-ul').first();
      var item = menu.find('> li[data-submenu=1]');
      var item_active = menu.find('> li[data-submenu=1].active');
      if ($(window).width() <= 991) {
        item_active.addClass('open');
        item_active.find('> ul').css('display', 'block');
      }
      item.click(function (e) {
        if ($(window).width() <= 991) {
          var $this = $(this);
          var $sub_menu_inner = $this.find('> .we-mega-menu-submenu');
          if (!$this.hasClass('open')) {
            $(item).not($this).removeClass('open');
            item.find('> .we-mega-menu-submenu').slideUp();
            $this.toggleClass('open');
            if ($this.hasClass('open')) {
              $sub_menu_inner.slideDown();
              setTimeout(function () {
                $(targetWrapper).animate({
                  scrollTop: $this.offset().top
                }, 700);
              }, 500);

            } else {
              $sub_menu_inner.slideUp();
            }
            return false;
          }
        }
      });
    }
  }

}(jQuery));;
Drupal.WeMegaMenuFrontEnd = Drupal.WeMegaMenuFrontEnd || {};
Drupal.WeMegaMenuFrontEnd.mobileThreadHold = 1024;
Drupal.WeMegaMenuFrontEnd.megamenuActivated = false;

(function ($, Drupal, drupalSettings) {
  "use strict";

  Drupal.behaviors.kMegaMenuFrontEndAction = {
    attach: function (context) {
      $(window).on('load', function() {
        Drupal.WeMegaMenuFrontEnd.init();
        Drupal.WeMegaMenuFrontEnd.mobileMenu();
      })
    }
  };

  Drupal.WeMegaMenuFrontEnd.init = function() {
    if(Drupal.WeMegaMenuFrontEnd.megamenuActivated) {
      return;
    }
    Drupal.WeMegaMenuFrontEnd.megamenuActivated = true;
  	var megamenu = $('nav.navbar-we-mega-menu');
  	if(megamenu.hasClass('click-action')) {
  	  megamenu.find('ul li.dropdown-menu > a').click(function() {
  	  	var li = $(this).closest("li");

  	  	if(li.hasClass("clicked")) {
          li.closest('ul').find('li').removeClass('clicked');
          li.closest('.we-mega-menu-row').find('li').removeClass('clicked');
  	  	  li.removeClass("clicked");
          megamenu.removeClass("has-clicked");
  	  	} else {
          li.closest('ul').find('li').removeClass('clicked');
          li.closest('.we-mega-menu-row').find('li').removeClass('clicked');
	  	    li.closest("ul").children("li.dropdown-menu").removeClass("clicked");
  		    li.addClass("clicked");
          megamenu.addClass("has-clicked");
  	  	}
        if($(window).outerWidth() > Drupal.WeMegaMenuFrontEnd.mobileThreadHold) {
          return false;
        }
  	  });
  	  megamenu.find('ul li.dropdown-menu > a').dblclick(function() {
        if($(window).outerWidth() > Drupal.WeMegaMenuFrontEnd.mobileThreadHold) {
    	  	window.location.href = $(this).attr("href");
        }
  	  });
      megamenu.click(function(event) {
        event.stopPropagation();
      })
      $("body").click(function() {
        megamenu.find("ul li.dropdown-menu.clicked").removeClass('clicked');
        megamenu.removeClass("has-clicked");
      });
  	}
  };

  Drupal.WeMegaMenuFrontEnd.mobileMenu = function() {
    $('div.region-we-mega-menu a.navbar-toggle').mobileMenu();
    
    // $('div.region-we-mega-menu a.navbar-toggle').mobileMenu({
      // pageSelector: 'body',
      // targetWrapper: '.navbar-we-mega-menu'
    // });

    // $('#menu-toggle-wemegamenu').mobileMenu();
  };
})(jQuery, Drupal, drupalSettings);;
/**
 * @file
 * Defines Javascript behaviors for the commerce cart module.
 */

(function ($, Drupal, drupalSettings) {
  'use strict';

  Drupal.behaviors.commerceCartBlock = {
    attach: function (context) {
      var $context = $(context);
      var $cart = $context.find('.cart--cart-block');
      var $cartButton = $context.find('.cart-block--link__expand');
      var $cartContents = $cart.find('.cart-block--contents');

      if ($cartContents.length > 0) {
        // Expand the block when the link is clicked.
        $cartButton.once('cart-button-processed').on('click', function (e) {
          // Prevent it from going to the cart.
          e.preventDefault();
          // Get the shopping cart width + the offset to the left.
          var windowWidth = $(window).width();
          var cartWidth = $cartContents.width() + $cart.offset().left;
          // If the cart goes out of the viewport we should align it right.
          if (cartWidth > windowWidth) {
            $cartContents.addClass('is-outside-horizontal');
          }
          // Toggle the expanded class.
          $cartContents
            .toggleClass('cart-block--contents__expanded')
            .slideToggle();
        });
      }
    }
  };
})(jQuery, Drupal, drupalSettings);
;
jQuery(document).ready(function($) {
  $(".to-top").click(function() {
    $("body,html").animate({scrollTop:0},800);
  });
});
;
