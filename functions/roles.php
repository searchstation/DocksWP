<?php


add_action('init', 'cloneRole');

function cloneRole()
{
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();

    $adm = $wp_roles->get_role('editor');
    //Adding a 'new_role' with all admin caps
    $wp_roles->add_role('site_admin', 'Site Administrator', $adm->capabilities);
    $wp_roles->add_cap( 'site_admin', 'list_users' );
    $wp_roles->add_cap( 'site_admin', 'edit_users' );
    $wp_roles->add_cap( 'site_admin', 'create_users' );
    $wp_roles->add_cap( 'site_admin', 'promote_users');
    $wp_roles->add_cap( 'site_admin', 'edit_theme_options');
    $wp_roles->remove_cap( 'site_admin', 'switch_themes');
    $wp_roles->add_cap( 'site_admin', 'activate_plugins');
    $wp_roles->add_cap( 'site_admin', 'install_plugins');
    $wp_roles->add_cap('site_admin', 'edit_plugins');
    $wp_roles->add_cap('site_admin', 'update_plugins');
    $wp_roles->add_cap('site_admin', 'delete_plugins');

    $wp_roles->add_cap( 'site_admin', 'gravityforms_view_entries');
    $wp_roles->add_cap( 'site_admin', 'gravityforms_export_entries');
    $wp_roles->add_cap( 'site_admin', 'wpseo_manage_options');

}


/** Hide Administrator From User List **/
function isa_pre_user_query( $user_search ) {
    if ( !current_user_can( 'administrator' ) ) { // Is Not Administrator - Remove Administrator
        global $wpdb;

        $user_search->query_where = str_replace(
            'WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.ID IN (
              SELECT {$wpdb->usermeta}.user_id FROM $wpdb->usermeta
              WHERE {$wpdb->usermeta}.meta_key = '{$wpdb->prefix}capabilities'
              AND {$wpdb->usermeta}.meta_value NOT LIKE '%administrator%' )",
            $user_search->query_where
        );
    }
}
add_action( 'pre_user_query', 'isa_pre_user_query' );


function wdm_user_role_dropdown($all_roles) {
    global $pagenow;
    if( current_user_can('site_admin') && $pagenow == 'user-edit.php' || current_user_can('site_admin') && $pagenow == 'user-new.php'  ) {
        // if current user is editor AND current page is edit user page
        unset($all_roles['administrator']);
    }
    return $all_roles;
}
add_action('editable_roles','wdm_user_role_dropdown');


//remove meta boxes
function my_remove_meta_boxes() {
 if(current_user_can('site_admin') ) {
  remove_meta_box('pageparentdiv', 'page', 'side');
}
}
add_action( 'admin_menu', 'my_remove_meta_boxes' );


?>
