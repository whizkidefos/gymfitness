<?php

// Register Menus
function gymfitness_menus() {
    register_nav_menus( 
        array (
            'main-menu'  => 'Main Menu'
        )
     );
}
add_action( 'init', 'gymfitness_menus' );

// Load stylesheets and javascript files
function gymfitness_scripts() {
    // Normalize
    wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css', array(), '8.0.2', 'false' );

    // Google Fonts
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,600,900|Staatliches&display=swap' );

    // SlickNav CSS
    wp_enqueue_style( 'slicknav-css', get_template_directory_uri(). '/css/slicknav.min.css', array(), '1.0.10' );

    // Font Awesome
    wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );

    // Main CSS
    wp_enqueue_style( 'main-css', get_template_directory_uri(). '/css/gymfitness.css', array('normalize', 'googlefonts'), '1.0.0' );

    // JavaScripts
    if ( !is_admin() ) wp_deregister_script('jquery');

    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js', array(), '3.4.1', 'true' );
    // wp_enqueue_script( 'slicknav-js', get_template_directory_uri(). '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', 'true' );
    wp_enqueue_script( 'main-js', get_template_directory_uri(). '/js/gymfitness.js', array('jquery'), '1.0.0', 'true' );

}
add_action( 'wp_enqueue_scripts', 'gymfitness_scripts' );



?>