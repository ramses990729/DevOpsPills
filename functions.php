<?php
//Require Navbar
function register_navwalker(){
	require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


//Adding styles and js files
function devOps_add_css_js(){

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css');
    wp_enqueue_style('page', get_template_directory_uri() . '/assets/css/styles.css');
//Js
    wp_enqueue_script('jqueryUp', "https://code.jquery.com/jquery-3.1.1.min.js", array(), 1.0, true);
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array( 'jquery' ), 1.14, true);
    wp_enqueue_script('bootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'popper' ), 4.3, true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array('bootstrapJs'), 1.0, true);
    }
    add_action('wp_enqueue_scripts', 'devOps_add_css_js');


    //featured img

 function devOps_setup() {
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
     }
     add_theme_support( 'title-tag' );
 }
add_action('after_setup_theme', 'devOps_setup');


// navbar


function devOps_register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
       )
     );
   }
   add_action( 'init', 'devOps_register_my_menus' );


//Customizer file
require get_template_directory() . '/template-parts/customizer.php';
