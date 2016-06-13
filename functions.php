<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function Vivs_scripts() {
    wp_enqueue_style( 'style-vivs', get_stylesheet_uri() );
    wp_enqueue_script( 'script-vivs', get_template_directory_uri() . '/js/vivs.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'Vivs_scripts' );

add_filter( 'the_content', 'wpautop' );
add_filter( 'the_exerpt', 'wpautop' );

?>