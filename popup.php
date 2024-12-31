<?php
/**
 * Plugin Name: popup
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "popup".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain:pop
 */
function plugin_file_function()
{
    load_plugin_textdomain('pop', false, dirname(__FILE__) . "/lan");
}
add_action('plugins_loaded', 'plugin_file_function');

function demowidget_admin_enqueue_scripts()
{
    wp_enqueue_style("demowidget-admin-ui-css", plugin_dir_url(__FILE__) . "asset/style.css");
    wp_enqueue_script("iamges_popup", plugin_dir_url(__FILE__) . "asset/main.js");
}
add_action("admin_enqueue_scripts", "demowidget_admin_enqueue_scripts");



// Register Custom Post Type popup
function create_popup_cpt() {
	$labels = array(
		'name' => _x( 'popups', 'Post Type General Name', 'pop' ),
		'singular_name' => _x( 'popup', 'Post Type Singular Name', 'pop' ),
		'menu_name' => _x( 'popups', 'Admin Menu text', 'pop' ),
		'name_admin_bar' => _x( 'popup', 'Add New on Toolbar', 'pop' ),
		'archives' => __( 'popup Archives', 'pop' ),
		'attributes' => __( 'popup Attributes', 'pop' ),
		'parent_item_colon' => __( 'Parent popup:', 'pop' ),
		'all_items' => __( 'All popups', 'pop' ),
		'add_new_item' => __( 'Add New popup', 'pop' ),
		'add_new' => __( 'Add popup', 'pop' ),
		'new_item' => __( 'New popup', 'pop' ),
		'edit_item' => __( 'Edit popup', 'pop' ),
		'update_item' => __( 'Update popup', 'pop' ),
		'view_item' => __( 'View popup', 'pop' ),
		'view_items' => __( 'View popups', 'pop' ),
		'search_items' => __( 'Search popup', 'pop' ),
		'not_found' => __( 'Not found', 'pop' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'pop' ),
		'featured_image' => __( 'Popup Image', 'pop' ),
		'set_featured_image' => __( 'Set featured image', 'pop' ),
		'remove_featured_image' => __( 'Remove featured image', 'pop' ),
		'use_featured_image' => __( 'Use as featured image', 'pop' ),
		'insert_into_item' => __( 'Insert into popup', 'pop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this popup', 'pop' ),
		'items_list' => __( 'popups list', 'pop' ),
		'items_list_navigation' => __( 'popups list navigation', 'pop' ),
		'filter_items_list' => __( 'Filter popups list', 'pop' )
	);
	$args = array(
		'label' => __( 'popup', 'pop' ),
		'description' => __( '', 'pop' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array(),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'popup', $args );

}
add_action( 'init', 'create_popup_cpt', 0 );


// function remove_editor_meta_box() {
//     remove_meta_box('postdivrich', 'your_cpt', 'normal');
// }
// add_action('admin_menu', 'remove_editor_meta_box');
