<?php
function add_styles () {
    wp_enqueue_style("Font Awesome Free 6.2.1", get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style("Bootstrap v5.3.0-alpha1", get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style("Normalize", get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style("My Styles", get_template_directory_uri() . '/css/main.css');
}
function add_scripts () {
    wp_enqueue_script("Font Awesome Free 6.2.1", get_template_directory_uri() . '/js/all.min.js', array(), false, true);
    wp_enqueue_script("Bootstrap v5.3.0-alpha1", get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script("My Scripts", get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );