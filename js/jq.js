jQuery(function ($) {
  //drawer-iconをクリックするとdrawser-navが開く
  jQuery('#drawer-icon').on('click', function($){
    jQuery('.drawer-nav').slideToggle();
    jQuery('#drawer-open').toggleClass('drawer-action');
    jQuery('#drawer-close').toggleClass('drawer-action');
  });

  //to-top途中から出現
  jQuery(window).on('scroll', function ($) {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('#to-top').fadeIn();
    } else {
      jQuery('#to-top').fadeOut();
    }
  });

  //to-top押すと上に
  jQuery('#to-top').click(function ($) {
    jQuery('html,body').animate({
      'scrollTop': 0
    }, 500);
  });

})