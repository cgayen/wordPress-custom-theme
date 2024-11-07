<?php

function cgayen_theme_support() {
    //Add Dynamic title support
    add_theme_support( 'title-tag' );
}
    add_action('after_setup_theme', 'cgayen_theme_support');

// Register CSS Files.
function cgayen_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'cgayen-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all');
    wp_enqueue_style( 'cgayen-bootstrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css", array(), '1.11.3', 'all');
    wp_enqueue_style( 'cgayen-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');

 }
    add_action('wp_enqueue_scripts', 'cgayen_register_styles');

// Register JS Files.
function cgayen_register_scripts() {

    wp_enqueue_script( 'cgayen-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), '5.3.3', true);
    wp_enqueue_script( 'cgayen-javascript', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);    

}
    add_action('wp_enqueue_scripts', 'cgayen_register_scripts');

// Register navigation menus
function cgayen_custom_menus() {
    $locations = array(
        'primary'   => __( 'Main Header Menu' ),
        'footer'  => __( 'Footer Menu' ),
    );
    register_nav_menus( $locations );
 }

    // Hook them into the theme-'init' action
    add_action( 'init', 'cgayen_custom_menus' );  


?>