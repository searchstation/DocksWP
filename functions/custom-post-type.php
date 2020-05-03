<?php

// let's create the function for the custom type
			function testimonial_post_type() {
				// creating (registering) the custom type
				register_post_type( 'testimonial', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
					// let's now add all the options for this post type
					array('labels' => array(
						'name' => __('Testimonials', 'jointswp'), /* This is the Title of the Group */
						'singular_name' => __('Testimonial', 'jointswp'), /* This is the individual type */
						'all_items' => __('All Testimonials', 'jointswp'), /* the all items menu item */
						'add_new' => __('Add Testimonial', 'jointswp'), /* The add new menu item */
						'add_new_item' => __('Add New Testimonial', 'jointswp'), /* Add New Display Title */
						'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
						'edit_item' => __('Edit Testimonial', 'jointswp'), /* Edit Display Title */
						'new_item' => __('New Testimonial', 'jointswp'), /* New Display Title */
						'view_item' => __('View Testimonial', 'jointswp'), /* View Display Title */
						'search_items' => __('Search Testimonials', 'jointswp'), /* Search Custom Type Title */
						'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
						'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
						'parent_item_colon' => ''
						), /* end of arrays */
						'description' => __( 'Add new testimonials, these will be dislayed at random throughout the site as well as on the testimonials page.', 'jointswp' ), /* Custom Type Description */
						'public' => true,
						'publicly_queryable' => false,
						'exclude_from_search' => true,
						'show_ui' => true,
						'show_in_nav_menus' => false,
						'show_in_menu' => true,
						'query_var' => true,
						'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
						'menu_icon' => 'dashicons-format-quote', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
						'rewrite'	=> array('slug' => 'testimonials', 'with_front' => true ), /* you can specify its url slug */
						'has_archive' => false, /* you can rename the slug here */
						'capability_type' => 'post',
						'hierarchical' => false,
						/* the next one is important, it tells what's enabled in the post editor */
						'supports' => array( 'title',)
					) /* end of options */
				); /* end of register post type */

			}
				// adding the function to the Wordpress init
				add_action( 'init', 'testimonial_post_type');
