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




?>
