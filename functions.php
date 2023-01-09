<?php
function reachbeyond_register_styles() {
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('home_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('reachbeyond_coming_soon', get_template_directory_uri() . "/assets/sass/temp.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'reachbeyond_register_styles');

?>