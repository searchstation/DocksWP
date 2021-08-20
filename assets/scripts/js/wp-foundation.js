/*
These functions make sure WordPress
and Foundation play nice together.
*/


jQuery(document).ready(function() {

    //setup Cookiebar
    jQuery.cookieBar();


    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
		if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
		  jQuery(this).wrap("<div class='widescreen responsive-embed'/>");
		} else {
		  jQuery(this).wrap("<div class='responsive-embed'/>");
		}
	});


  //Add Lightgallery to WP Galleries
  jQuery('.gallery').lightGallery({
  selector: 'a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]',
  download: false,
  share: false,
  actualSize:false,
  thumbnail:false,
  });


  //Hamburger classes
  jQuery(document).on( "opened.zf.offCanvas", function() {
    jQuery(".hamburger").addClass("is-active");
  })
  jQuery(document).on( "closed.zf.offCanvas", function() {
    jQuery(".hamburger").removeClass("is-active");
  })

});
