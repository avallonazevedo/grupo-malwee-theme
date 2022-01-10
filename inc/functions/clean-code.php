<?php 

// remove all desnecessary assets from header
if(!is_user_logged_in()) {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('template_redirect', 'rest_output_link_header', 11, 0 );
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
    remove_action('wp_head', 'print_emoji_detection_script', 7 );
    remove_action('admin_print_scripts', 'print_emoji_detection_script' );
    remove_action('wp_print_styles', 'print_emoji_styles' );
    remove_action('admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'wp_resource_hints', 2 );
    remove_action('wp_head', 'jscomposer');


    add_filter( 'show_admin_bar', '__return_false' );


    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');
}

    

    //add_filter( 'wpcf7_load_css', '__return_false' );
