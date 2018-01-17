<?php

 require_once dirname( __FILE__ ) .'/inc/functions.php';
 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}



wp_enqueue_script( 'yd-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array(), '4.0', true );
wp_enqueue_script( 'yd-popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), '4.0', true );




 
 


?>






