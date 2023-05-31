<?php



// Hide ACF for production sites
function coba_acf_settings_path( $show_admin ) {
	if  (WP_DEBUG) {
		return true;
	} else {
    return false;
	}
}
add_filter('acf/settings/show_admin', 'coba_acf_settings_path');



// Theme Options Page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}



add_action('acf/init', 'docks_acf_faq');
function docks_acf_faq() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ'),
            'description'       => __('An accordion of FAQs'),
            'render_template'   => 'parts/blocks/faq.php',
            'category'          => 'formatting',
						'mode' => 'edit',
						'supports' => array(	'mode' => false )

        ));
    }
}

add_action('acf/init', 'docks_acf_card_page');
function docks_acf_card_page() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'card-page',
            'title'             => __('Card Page'),
            'description'       => __('Link to another page using a card'),
            'render_template'   => 'parts/blocks/card-page.php',
            'category'          => 'formatting',
						'mode' => 'edit',
						'supports' => array(	'mode' => false )

        ));
    }
}




 ?>
