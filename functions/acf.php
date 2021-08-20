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




 ?>
