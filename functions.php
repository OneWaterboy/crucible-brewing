<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION


function ajrwp_enqueue_stylesheet() {
    wp_enqueue_style( 'responsive-styles', get_stylesheet_directory_uri() . '/responsive-styles.css' );
}
add_action( 'wp_enqueue_scripts', 'ajrwp_enqueue_stylesheet' );



function ajrwp_enqueue_admin_styles() {
    wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri() . '/admin-styles.css' );
}
add_action( 'admin_enqueue_scripts', 'ajrwp_enqueue_admin_styles' );

function ajrwp_enqueue_google_fonts() {
    wp_enqueue_style( 'roboto-font', '//fonts.googleapis.com/css?family=Roboto&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'ajrwp_enqueue_google_fonts' );



if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Taproom Info',
        'menu_title'    => 'Taproom Info',
        'menu_slug'     => 'taproom-info',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url'      => get_stylesheet_directory_uri() . '/graphics/beer-tap.png'
    ));
}