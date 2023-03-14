<?php
/**
 * My theme function.
 */


 // Theme Title
 add_theme_support('title-tag');


 // Theme CSS and JQuery File Calling
 function mamun_css_js_file_calling() {
    wp_enqueue_style( 'ninja-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), '1.0', 'all');
    wp_register_style('custom', get_template_directory_uri() .'/css/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');


    //jQuery
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0', 'true' );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '5.0', 'true' );
 }
 add_action('wp_enqueue_scripts', 'mamun_css_js_file_calling');

 