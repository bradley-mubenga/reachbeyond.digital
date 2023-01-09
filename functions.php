<?php
function reachbeyond_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    //Normalise.css
    wp_enqueue_style('normalize', get_template_directory_uri() . "/assets/sass/normalize.css", array(), $version, 'all');
    //Brand Styles
    wp_enqueue_style('home_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    //Home Page Styles
    wp_enqueue_style('index_page', get_template_directory_uri() . "/assets/sass/index.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'reachbeyond_register_styles');

?>