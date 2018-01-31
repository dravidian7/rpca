jQuery(function() {

  var windowWidth = jQuery(window).width();

  jQuery(window).resize(function(){

    windowWidth = jQuery(window).width();

  });

  // Fix Main Navigation after logo is no longer visible
  var offset_top = jQuery('#main-menu').offset().top-18;

  var toggle_nav = function(){
    var scroll_top = jQuery(window).scrollTop();

    if(offset_top <= scroll_top) {
      jQuery('.navbar').removeClass('container');
      jQuery('.navbar').removeClass('navbar-relative-top');
      jQuery('.navbar').addClass('navbar-fixed-top');

      if(jQuery('#career-center-wrapper').length || jQuery('#archive-wrapper').length || jQuery('#blog-single-wrapper').length || jQuery('#cc-landing-page-wrapper').length) {

	      jQuery('.navbar').addClass('no-shadow');
	      jQuery('.sub-menu-navbar').addClass('fixed-nav');

	      jQuery('body').css('padding-top', 161);
	  }

      else {
      	jQuery('body').css('padding-top', 114);
	  }

    }
    else if(offset_top > scroll_top) {
      jQuery('.navbar').addClass('container');
      jQuery('.navbar').addClass('navbar-relative-top');
      jQuery('.navbar').removeClass('navbar-fixed-top');

      if(jQuery('#career-center-wrapper').length || jQuery('#archive-wrapper').length || jQuery('#blog-single-wrapper').length || jQuery('#cc-landing-page-wrapper').length) {

      	jQuery('.navbar').removeClass('no-shadow');
      	jQuery('.sub-menu-navbar').removeClass('fixed-nav');

      }

      jQuery('body').css('padding-top', 0);
    }
  }

  if(windowWidth > 979)
    toggle_nav();

  else {
    jQuery('.navbar').removeClass('no-shadow');
    jQuery('.sub-menu-navbar').removeClass('fixed-nav');

    jQuery('body').css('padding-top', 0);
  }
 
    jQuery(window).scroll(function() {
      if(windowWidth > 979)
         toggle_nav();

      else {
        jQuery('.navbar').removeClass('no-shadow');
        jQuery('.sub-menu-navbar').removeClass('fixed-nav');

        jQuery('body').css('padding-top', 0);
      }       
    });

});    