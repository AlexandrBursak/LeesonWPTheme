<?php

register_nav_menus( array(
  'primary' => __( 'Home' ),
  'secondly' => 'Second menu'
));

function hello_world()
{
  return 'Hello world';
}
