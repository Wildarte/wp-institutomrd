<?php

function wp_insert_scripts(){

    wp_enqueue_script('m-jquery', get_template_directory_uri().'/assets/js/jquery-3.6.0.min.js', [], '3.6.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', [], '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri().'/assets/js/script.js',[], '1.0', true);

    wp_enqueue_style('animation', get_template_directory_uri().'/assets/css/animate.min.css', [], '1.0', 'all');
    wp_enqueue_style('gall', get_template_directory_uri().'/assets/css/galle.css', [], '1.0', 'all');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css', [], '1.0', 'all');
    wp_enqueue_style('owl-theme-carousel-css', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', [], '1.0', 'all');
    wp_enqueue_style('post', get_template_directory_uri().'/assets/css/post.css', [], '1.0', 'all');
    wp_enqueue_style('reset', get_template_directory_uri().'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
    
}
add_action('wp_enqueue_scripts', 'wp_insert_scripts');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Registrar o Menu
    
function register_my_menu() {
    register_nav_menus([
        'menu-principal' => __( 'menu principal' ),
        'menu-footer' => __('menu footer'),
    ]);
}
add_action( 'init', 'register_my_menu' );

add_theme_support('post-thumbnails');

//==============     includes     ==================
include('admin/fields.php');
include('admin/fields_panel.php')


?>