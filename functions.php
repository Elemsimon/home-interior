<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style-starter.css', false,'4.4.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . '/assets/js/theme-change.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popup');
   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');


function my_custom_theme_setup() {
   register_nav_menus( array(
       'primary' => __( 'Primary Menu', 'text_domain' ),
       'footer'  => __( 'Footer Menu', 'text_domain' ),
   ) );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );

// Menu Support alternative
/* add_theme_support('menus'); */

/* register_nav_menus(
    array(
        'primary' => __( 'Primary Menu', 'theme' ),
    )
); */

/* function my_custom_footer_widgets() {
   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 1', 'text_domain' ),
       'id'            => 'footer-1',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );

   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 2', 'text_domain' ),
       'id'            => 'footer-2',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );

   register_sidebar( array(
       'name'          => __( 'Footer Widget Area 3', 'text_domain' ),
       'id'            => 'footer-3',
       'before_widget' => '<div class="footer-widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) );
}
add_action( 'widgets_init', 'my_custom_footer_widgets' ); */


?>


