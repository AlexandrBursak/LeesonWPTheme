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
