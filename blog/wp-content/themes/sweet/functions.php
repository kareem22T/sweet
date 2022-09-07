<?php
//require_once 'wp-bootstrap-navwalker.php';

// support posts sumbnails
add_theme_support('post-thumbnails');

// funtcion to add libs style and any style
function main_add_style()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), microtime());
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/css/fonts.css', array(), microtime());
}

// funtcion to add libs script and any script
function main_add_script()
{
    wp_deregister_script('jquery'); // remove registeration to put it before close body syntax
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-file-js', get_template_directory_uri() . '/js/main.js', array('jquery'), microtime(), true);
    wp_enqueue_script('html5Shiv-js', get_template_directory_uri() . '/js/HTML5Shiv.js');
    wp_script_add_data('html5Shiv-js', 'conditional', 'lt IE 9');
    wp_enqueue_script('respond-js', get_template_directory_uri() . '/js/respond.min.js');
    wp_script_add_data('respond-js', 'conditional', 'lt IE 9');
}

// add custom menu
function support_custom_menu()
{
    register_nav_menus(array(
        'main-menu' => 'Navigation bar',
        'footer-menu' => 'Footer menu'
    ));
}
function get_nav_menu()
{
    wp_nav_menu(array(
        'theme_location'    => 'main-menu',
        'menu_class'        => 'main-nav',
        'container'         => false,
        'depth'             => 2 //,
        //'walker'            => new wp_bootstrap_navwalker()
    ));
}

// wordpress built in function to call funtions you have made at specific situation depends on hook name (first arg)
add_action('wp_enqueue_scripts', 'main_add_style');
add_action('wp_enqueue_scripts', 'main_add_script');
add_action('init', 'support_custom_menu');

// => custumize the excerpt word length
function customize_excerpt_length()
{
    return 20;
}
add_filter('excerpt_length', 'customize_excerpt_length');