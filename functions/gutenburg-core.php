<?php

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => esc_attr__( 'Primary', 'docks' ),
            'slug'  => 'primary',
            'color' => '#071F2E',
        ),
        array(
            'name'  => esc_attr__( 'Secondary', 'docks' ),
            'slug'  => 'secondary',
            'color' => '#316384',
        ),
        array(
            'name'  => esc_attr__( 'Success', 'docks' ),
            'slug'  => 'success',
            'color' => '#00AC28',
        ),
        array(
            'name'  => esc_attr__( 'Alert', 'docks' ),
            'slug'  => 'alert',
            'color' => '#92A2AD',
        ),
				array(
						'name'  => esc_attr__( 'Warning', 'docks' ),
						'slug'  => 'warning',
						'color' => '#F2654A',
				),
        array(
            'name'  => esc_attr__( 'Light Grey', 'docks' ),
            'slug'  => 'light-grey',
            'color' => '#F8F8F8',
        ),
				array(
            'name'  => esc_attr__( 'Medium Grey', 'docks' ),
            'slug'  => 'medium-grey',
            'color' => '#F0F0EA',
        ),
				array(
            'name'  => esc_attr__( 'Dark Grey', 'docks' ),
            'slug'  => 'dark-grey',
            'color' => '#323232',
        ),
				array(
            'name'  => esc_attr__( 'White', 'docks' ),
            'slug'  => 'white',
            'color' => '#fff',
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features');


/**
 * Templates and Page IDs without editor
 *
 */
function ea_disable_editor( $id = false ) {

  $excluded_templates = array(
    'page-templates/home.php',
  );

  $excluded_ids = array(

  );

  if( empty( $id ) )
    return false;

  $id = intval( $id );
  $template = get_page_template_slug( $id );

  return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}

/**
 * Disable Gutenberg by template
 *
 */
function ea_disable_gutenberg( $can_edit, $post_type ) {

  if( ! ( is_admin() && !empty( $_GET['post'] ) ) )
    return $can_edit;

  if( ea_disable_editor( $_GET['post'] ) )
    $can_edit = false;

  return $can_edit;

}
add_filter( 'gutenberg_can_edit_post_type', 'ea_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'ea_disable_gutenberg', 10, 2 );
