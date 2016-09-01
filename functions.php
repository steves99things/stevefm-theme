<?php 
    add_action('wp_enqueue_scripts', 'add_theme_styles');
    add_action('wp_enqueue_styles', 'add_theme_scripts');

    function add_theme_styles() {
        wp_enqueue_style('stevefm', get_stylesheet_directory_uri().'/stylesheets/stevefm.less');
   }

    function add_theme_scripts() {
        wp_enqueue_script('jquery.min', get_stylesheet_directory_uri().'/bower_components/jquery/dist/jquery.min.js');
        wp_enqueue_script('bootstrap.min', get_stylesheet_directory_uri().'/bower_components/bootstrap/dist/js/bootstrap.min.js');
   }
 ?>