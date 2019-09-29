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


add_filter("gform_ajax_spinner_url", "spinner_url", 10, 2);
function spinner_url($image_src, $form){
    return  get_bloginfo('template_directory') . '/assets/images/util/blank.gif' ; // relative to you theme images folder
}



/**
 * Hide the 'Attachment Page' option for the link-to part.
 */

add_action( 'print_media_templates', function(){
    echo '
        <style>
            .setting select.link-to option[value="post"],
            .setting select[data-setting="link"] option[value="post"]
            { display: none; }
        </style>';
});


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');



add_filter( 'gform_pre_render_3', 'populate_posts' );
add_filter( 'gform_pre_validation_3', 'populate_posts' );
add_filter( 'gform_pre_submission_filter_3', 'populate_posts' );
add_filter( 'gform_admin_pre_render_3', 'populate_posts' );
function populate_posts( $form ) {

	global $post;
	$rows = get_field('available_dates', $post->ID);

    foreach ( $form['fields'] as &$field ) {

        if ( $field->type != 'select' || strpos( $field->cssClass, 'populate-dates' ) === false ) {
            continue;
        }
				if ($rows) {
        $choices = array();
        foreach ( $rows as $row ) {
            $choices[] = array( 'text' => $row['date'], 'value' => $row['date'] );
        }

        $field->placeholder = 'Select a date';
      	$field->choices = $choices;
			}

	}
    return $form;
}


remove_shortcode('gallery', 'gallery_shortcode');
add_shortcode('gallery', 'msdva_gallery_shortcode');
function msdva_gallery_shortcode($attr) {
	$post = get_post();
	static $instance = 0;
	$instance++;
	if ( ! empty( $attr['ids'] ) ) {
		// 'ids' is explicitly ordered, unless you specify otherwise.
		if ( empty( $attr['orderby'] ) )
			$attr['orderby'] = 'post__in';
		$attr['include'] = $attr['ids'];
	}
	// Allow plugins/themes to override the default gallery template.
	$output = apply_filters('post_gallery', '', $attr);
	if ( $output != '' )
		return $output;
	// We're trusting author input, so let's at least make sure it looks like a valid orderby statement
	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( !$attr['orderby'] )
			unset( $attr['orderby'] );
	}
	extract(shortcode_atts(array(
		'order'      => 'ASC',
		'orderby'    => 'menu_order ID',
		'id'         => $post ? $post->ID : 0,
		'itemtag'    => 'dl',
		'icontag'    => 'dt',
		'captiontag' => 'dd',
		'columns'    => 3,
		'size'       => 'thumbnail',
		'include'    => '',
		'exclude'    => '',
		'link'       => 'file' // CHANGE #1
	), $attr, 'gallery'));
	$id = intval($id);
	if ( 'RAND' == $order )
		$orderby = 'none';
	if ( !empty($include) ) {
		$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[$val->ID] = $_attachments[$key];
		}
	} elseif ( !empty($exclude) ) {
		$attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	} else {
		$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
	}
	if ( empty($attachments) )
		return '';
	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment )
			$output .= msdva_wp_get_attachment_link($att_id, $size, true) . "\n";
		return $output;
	}
	$itemtag = tag_escape($itemtag);
	$captiontag = tag_escape($captiontag);
	$icontag = tag_escape($icontag);
	$valid_tags = wp_kses_allowed_html( 'post' );
	if ( ! isset( $valid_tags[ $itemtag ] ) )
		$itemtag = 'dl';
	if ( ! isset( $valid_tags[ $captiontag ] ) )
		$captiontag = 'dd';
	if ( ! isset( $valid_tags[ $icontag ] ) )
		$icontag = 'dt';
	$columns = intval($columns);
	$itemwidth = $columns > 0 ? floor(100/$columns) : 100;
	$float = is_rtl() ? 'right' : 'left';
	$selector = "gallery-{$instance}";
	$gallery_style = $gallery_div = '';
	if ( apply_filters( 'use_default_gallery_style', true ) )
		$gallery_style = "
		<style type='text/css'>
			#{$selector} {
				margin: auto;
			}
			#{$selector} .gallery-item {
				float: {$float};
				margin-top: 10px;
				text-align: center;
				width: {$itemwidth}%;
			}
			#{$selector} img {
				border: 2px solid #cfcfcf;
			}
			#{$selector} .gallery-caption {
				margin-left: 0;
			}
			/* see gallery_shortcode() in wp-includes/media.php */
		</style>";
	$size_class = sanitize_html_class( $size );
	$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
	$output = apply_filters( 'gallery_style', $gallery_style . "\n\t\t" . $gallery_div );
		// NOTE:
		// wp_get_attachment_link =
		// takes ($id = 0, $size = 'thumbnail', $permalink = false, $icon = false, $text = false)
	$i = 0;
	foreach ( $attachments as $id => $attachment ) {
		$image_output = msdva_wp_get_attachment_link( $id, $size, true, false );
		$image_meta  = wp_get_attachment_metadata( $id );
		$orientation = '';
		if ( isset( $image_meta['height'], $image_meta['width'] ) )
			$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
		$output .= "<{$itemtag} class='gallery-item'>";
		$output .= "
			<{$icontag} class='gallery-icon {$orientation}'>
				$image_output
			</{$icontag}>";
		if ( $captiontag && trim($attachment->post_excerpt) ) {
			$output .= "
				<{$captiontag} class='wp-caption-text gallery-caption'>
				" . wptexturize($attachment->post_excerpt) . "
				</{$captiontag}>";
		}
		$output .= "</{$itemtag}>";
	}
	$output .= "
		</div>\n";
	return $output;
}
function msdva_wp_get_attachment_link( $id = 0, $size = 'thumbnail', $permalink = true, $icon = false, $text = false ) {
	$id = intval( $id );
	$_post = get_post( $id );
	if ( empty( $_post ) || ( 'attachment' != $_post->post_type ) || ! $url = wp_get_attachment_url( $_post->ID ) )
		return __( 'Missing Attachment' );
	if ( $permalink )
		// $url = get_attachment_link( $_post->ID ); // we want the "large" version!!
		// FIX!! ask for large URL
		$image_attributes = wp_get_attachment_image_src( $_post->ID, 'large' );
		$url = $image_attributes[0];
//		$url = wp_get_attachment_image( $_post->ID, 'large' );
	$post_title = esc_attr( $_post->post_title );
	if ( $text )
		$link_text = $text;
	elseif ( $size && 'none' != $size )
		$link_text = wp_get_attachment_image( $id, $size, $icon );
	else
		$link_text = '';
	if ( trim( $link_text ) == '' )
		$link_text = $_post->post_title;
	return apply_filters( 'wp_get_attachment_link', "<a href='$url' rel='gallery-nr'>$link_text</a>", $id, $size, $permalink, $icon, $text );
}



/**
 * Hide the 'Attachment Page' option for the link-to part.
 */
add_action( 'print_media_templates', function(){
    echo '
        <style>
            .setting select.link-to option[value="post"],
            .setting select[data-setting="link"] option[value="post"]
            { display: none; }
        </style>';
});


// Add Shortcode
function shortcode_callout( $atts ) {
	// Attributes
	$atts = shortcode_atts(
		array(
			'heading' => '',
			'sub' => '',
		),
		$atts
	);
$string = '<hr class="heavy mt30" />';
$string .= '<h4 class="text-center mt30">';
$string .= $atts['heading'];
$string .= '</h4>';
$string .= '<p class="small mb0 text-center mb30">';
$string .= $atts['sub'];
$string .= '</p>';
$string .= '<hr class="heavy mb30" />';
return $string;
}
add_shortcode( 'callout', 'shortcode_callout' );
