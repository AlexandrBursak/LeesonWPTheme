<?php

register_sidebar(
  array(
    'id' => 'sidebar',
    'name' => __( "Sidebar 1" ),
    'description' => 'All sidebar 1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));
register_sidebar(
  array(
    'id' => 'sidebar2',
    'name' => __( "Sidebar 2" ),
    'description' => 'All sidebar 2',
    'before_widget' => '<div id="%1$s" class="widget %2$s"><strong>',
    'after_widget' => '</strong></div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));

register_nav_menus( array(
  'primary'  => __( 'Home' ),
  'secondly' => 'Second menu'
) );

add_theme_support( 'post-thumbnails' );

function hello_world()
{
  return 'Hello world';
}

function theme_function() {
  echo 'Hello My Theme!';
}

add_action('theme_action', 'theme_function');

/**
 * Include CSS file for MyPlugin.
 */
function blog_style() {
  wp_register_style( 'styles',  get_stylesheet_directory_uri( ) . '/assets/style.css' );
  wp_enqueue_style( 'styles' );
  wp_register_style( 'blog-styles',  get_stylesheet_directory_uri( ) . '/assets/blog.css' );
  wp_enqueue_style( 'blog-styles' );
}
add_action( 'wp_enqueue_scripts', 'blog_style' );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
  if (in_array('current-menu-item', $classes)) {
    $classes = [
      "active",
      "blog-nav-item"
    ];
  } else {
    $classes = [
      "blog-nav-item"
    ];
  }
  return $classes;
}

function rewrite_class_name_for_class($data){
  var_dump($data);
  return 'hello';
}