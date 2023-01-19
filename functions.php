<?php
//Function & action for theme support
function reachbeyond_theme_support()
{
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    //Dynamic logo support
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'reachbeyond_theme_support');

//Function & action to register style sheets
function reachbeyond_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    //Normalise.css
    wp_enqueue_style('normalize', get_template_directory_uri() . "/assets/css/normalize.css", array(), $version, 'all');
    //Brand Styles
    wp_enqueue_style('home_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    //Header Styles
    wp_enqueue_style('header_style', get_template_directory_uri() . "/assets/css/header.css", array(), $version, 'all');
    //Responsive Styles
    wp_enqueue_style('responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'reachbeyond_register_styles');

//Function & action to register scripts
function reachbeyond_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    //Header scripts
    wp_enqueue_script('header', get_template_directory_uri() . "/assets/js/header.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'reachbeyond_scripts');

?>