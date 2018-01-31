jQuery(function() {

	// Remove all title attributes from images
	jQuery('img').removeAttr('title');

	// Remove last <hr> from blog and archive pages
	if(jQuery('#archive-wrapper').length) {
		jQuery('.post:last-child').find('hr').css('display', 'none');
	}

    // Scroll To the Top on Single Posts
    if(jQuery('#to-the-top').length) {
    	jQuery('#to-the-top').click(function() {
    		jQuery("html, body").animate({ scrollTop: 0 }, "fast");
  			return false;
    	});
    }

    /** Check if IE and get version **/
    var ie_ver = 99;

    if(jQuery.browser.msie)
    	ie_ver = parseInt(jQuery.browser.version, 10);

    /** Don't add Traingle if in IE8 **/
	if (ie_ver != 8) {
		/** Add Career Center Triangle to menu **/
		if(jQuery('#career-center-wrapper').length || jQuery('#cc-landing-page-wrapper').length) {
			jQuery('.sub-menu-wrapper').append('<div class="triangle career-center-triangle"></div>');
		}

		/** Add Blog Triangle to menu **/
		if(jQuery('body.blog').length ||  jQuery('body.category').length || jQuery('body.single').length || jQuery('body.tag').length || jQuery('body.search').length) {
			jQuery('.sub-menu-wrapper').append('<div class="triangle blog-triangle"></div>');
		}
	}

	// Placeholder fall back
	Placeholder.init();

});

jQuery(window).load(function() {

});	