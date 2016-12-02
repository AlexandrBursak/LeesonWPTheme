<?php

register_nav_menus( array(
  'primary' => __( 'Home' ),
  'secondly' => 'Second menu'
));

add_theme_support( 'post-thumbnails' );

function hello_world()
{
  return 'Hello world';
}
