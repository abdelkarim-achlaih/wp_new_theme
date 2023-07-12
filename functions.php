<?php

/* Start Wordpress Bootstrap Navwalker */

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

/* End Wordpress Bootstrap Navwalker */

/* Start Adding Menus */

function add_custom_menus()
{
    register_nav_menus(array(
        "Navigation Bar" => "In the Header",
        "Footer Menu" => "In the Footer"
    ));
}

function nav_bar_menu()
{
    wp_nav_menu(
        array(
            'theme_location' => "Navigation Bar",
            'menu_class' => "nav navbar-nav ",
            'container' => false,
            'depth' => 2,
            'walker' => new WP_Bootstrap_Navwalker()
        )
    );
}

add_action("init", "add_custom_menus");

/* End Adding Menus */

/* Start enqueing Styles and Scripts */

function add_styles()
{
    wp_enqueue_style("Font Awesome Free 6.2.1", get_template_directory_uri() . '/css/all.min.css');
    wp_enqueue_style("Bootstrap v5.3.0-alpha1", get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style("Normalize", get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style("My Styles", get_template_directory_uri() . '/css/main.css');
}

function add_scripts()
{
    wp_enqueue_script("Font Awesome Free 6.2.1", get_template_directory_uri() . '/js/all.min.js', array(), false, true);
    wp_enqueue_script("Bootstrap v5.3.0-alpha1", get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script("My Scripts", get_template_directory_uri() . '/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

/* End enqueing Styles and Scripts */