<?php

function load_stylesheets()
{
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), false, 'all');
    wp_enqueue_style('animate');

    wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('meanmenu', get_template_directory_uri() . '/css/meanmenu.css', array(), false, 'all');
    wp_enqueue_style('meanmenu');

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), false, 'all');
    wp_enqueue_style('magnific-popup');

    wp_register_style('owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owl.carousel');

    wp_register_style('style-sub', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style-sub');

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
    wp_enqueue_style('responsive');
    wp_enqueue_style('owl.carousel');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{
    // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', '', 1, true);
    // wp_enqueue_script('jquery');

    wp_register_script('modernizr.custom', get_template_directory_uri() . '/js/modernizr.custom.js', '', 1, true);
    wp_enqueue_script('modernizr.custom');

    wp_register_script('gmaps', get_template_directory_uri() . '/js/gmaps.min.js', '', 1, true);
    wp_enqueue_script('gmaps');

    wp_register_script('jquery.meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', '', 1, true);
    wp_enqueue_script('jquery.meanmenu');

    wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', '', 1, true);
    wp_enqueue_script('waypoints');

    wp_register_script('jquery.counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', '', 1, true);
    wp_enqueue_script('jquery.counterup');

    wp_register_script('popper', get_template_directory_uri() . '/js/popper.min.js', '', 1, true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', '', 1, true);
    wp_enqueue_script('jquery.magnific-popup');

    wp_register_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true);
    wp_enqueue_script('owl.carousel');

    wp_register_script('script', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_js');

// add_theme_support('menus');

// register_nav_menus(
//     array(
//         'top-menu' => __('Top Menu', 'theme'),
//         'footer-menu' => __('Footer Menu', 'theme')
//     )
// );
