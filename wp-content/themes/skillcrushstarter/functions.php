<?php
/**
 * Skillcrush Starter functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * since Skillcrush Starter 1.0
 */

// Turns on widgets & menus
if (function_exists('register_sidebar')) {
	register_sidebar();
}

// Disables admin bar on external site
// add_filter('show_admin_bar', '__return_false');

/** Creating menus **/
// Check if the menu exists
$primary_menu = wp_get_nav_menu_object('Primary Menu');

if (!$primary_menu) {
    $primary_menu_id = wp_create_nav_menu('Primary Menu');

    wp_update_nav_menu_item($primary_menu_id, 0, array(
        'menu-item-title' =>  __('Homepage'),
        'menu-item-url' => home_url( '/' ), 
        'menu-item-status' => 'publish')
	);
}

register_nav_menu('primary-menu', 'Primary Menu');

// Check if the menu exists
$blog_posts_menu = wp_get_nav_menu_object('Favorite Blog Posts');

if (!$blog_posts_menu) {
    $blog_posts_menu_id = wp_create_nav_menu('Favorite Blog Posts');
}

register_nav_menu('primary-menu', 'Primary Menu');

register_nav_menu('social-menu', 'Social Menu');

// Turns on featured images
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}