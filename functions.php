<?php 

    add_action( 'init', 'register_header_menu' );
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
    add_action('wp_enqueue_scripts', 'add_theme_styles');

    function add_theme_styles() {
        wp_enqueue_style('stevefm', get_stylesheet_directory_uri().'/stylesheets/stevefm.less');
    }

    function add_theme_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap.min', get_stylesheet_directory_uri().'/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), null, true);
        wp_enqueue_script('hello', get_stylesheet_directory_uri().'/stylesheets/test.js');
    }

    function register_header_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }

 ?>