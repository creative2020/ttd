<?php

// Tell the main theme that a child theme is running. Do not remove this.
$GLOBALS['builder_child_theme_loaded'] = true;

// Load translations
load_theme_textdomain( 'it-l10n-Builder-Carter', get_stylesheet_directory() . '/lang' );

// Theme Support Features
add_theme_support( 'builder-3.0' ); // Adds Support for Builder 3.0
// add_theme_support( 'builder-percentage-widths' ); // Add if you remove the responsive feature of Builder.
add_theme_support( 'builder-responsive' ); // Adds Responsive Capabilities
add_theme_support( 'builder-full-width-modules' ); // Adds Full Browser Width Background Modules
add_theme_support( 'post-formats', array( 'image', 'quote', 'status' ) );
add_theme_support( 'builder-module-style-before-after-classes' );

woocommerce_content(); //theme support

// Enqueuing and Using Custom Javascript/jQuery
function custom_load_custom_scripts() {
	if ( file_exists( get_stylesheet_directory() . '/js/custom_jquery_additions.js' ) )
	    $url = get_stylesheet_directory_uri() . '/js/custom_jquery_additions.js';
	else if ( file_exists( get_template_directory() . '/js/custom_jquery_additions.js' ) )
	    $url = get_template_directory_uri() . '/js/custom_jquery_additions.js';
	if ( ! empty( $url ) )
	    wp_enqueue_script( 'custom_jquery_additions', $url, array('jquery'), false, true );
		wp_enqueue_script( 'jquery-masonry', array( 'jquery' ) );
}



add_action( 'wp_enqueue_scripts', 'custom_load_custom_scripts' );


// Tag Cloud Widget functionality
function it_custom_tag_cloud_widget($args) {
	$args['number'] = 0; // adding a 0 will display all tags
	$args['largest'] = 22; // largest tag
	$args['smallest'] = 12; // smallest tag
	$args['unit'] = 'px'; // tag font unit
	$args['format'] = 'flat';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'it_custom_tag_cloud_widget' );


// Adds Support for Alternate Module Styles
if ( ! function_exists( 'it_builder_loaded' ) ) {
	function it_builder_loaded() {
		builder_register_module_style( 'image', 'No Spacing', 'image-no-spacing' );
		builder_register_module_style( 'image', 'Full Window', 'image-full-window' );
		builder_register_module_style( 'widget-bar', 'Light Gray', 'widget-bar-light-gray' );
	}
}
add_action( 'it_libraries_loaded', 'it_builder_loaded' );


// Registers Featured Image Sizes
if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'index_thumbnail', 0, 0, true );
		add_image_size( 'it_medium_thumbnail', 550, 0, true );
}


// function that will check whether the page we're on is the store page
function is_exchange_store_page() {
    if ( is_exchange_active() ) {
        if ( it_exchange_is_page('store') ) {
            return true;
        }
    }
    return false;
}


// function that will return true when an exchange function can be found, so Exchange must be active
function is_exchange_active() {
    if ( function_exists( 'it_exchange_is_page' ) ) {
        return true;
    }
    return false;
}


add_theme_support( 'builder-responsive', array( 'column-min-width' => '300' ) );


// Adds font directory to child theme upon creation
function builder_carter_files_to_copy_to_child( $files ) {
	$files['font'] = '';

	return $files;
}
add_filter( 'builder-filter-files-to-copy-to-child', 'builder_carter_files_to_copy_to_child' );

function wpse_remove_edit_post_link( $link ) {
return '';
}
add_filter('edit_post_link', 'wpse_remove_edit_post_link');

add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return 'http://ttd2.2020creative.net/shoppe';
}