
<?php
  // Register Nav Walker class_alias

  require_once('class-wp-bootstrap-navwalker.php');
//  require_once('wp_bootstrap_navwalker.php');
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
            register_nav_menu( 'footer', __( 'Footer navigation', 'wptuts' ) );
        } endif;


function wpt_register_js() {
    wp_register_script('', get_template_directory_uri() . 'js/bootstrap.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( '', get_template_directory_uri() . 'css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );


  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'footer' => __('Footer Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
