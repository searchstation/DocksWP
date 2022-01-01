<?php

// Adding WP Functions & Theme Support
function docks_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
	         array(
	         	'comment-list',
	         	'comment-form',
	         	'search-form',
	         )
	);

	// Adding post format support
	 //add_theme_support( 'post-formats',
		//array(
			//'aside',             // title less blurb
			//'gallery',           // gallery of images
			//'link',              // quick link to other site
			//'image',             // an image
			//'quote',             // a quick quote
			//'status',            // a Facebook like status update
			//'video',             // video
			//'audio',             // audio
			//'chat'               // chat transcript
		//)
	//);

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'docks_theme_support', 1200 );

} /* end theme support */

add_action( 'after_setup_theme', 'docks_theme_support' );



// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

function docks_placeholder_img() {
	echo '<img src="'.get_stylesheet_directory_uri().'/assets/images/util/placeholder.jpg" alt="Placeholder" width="600" height="400"/>';
	return;
}
