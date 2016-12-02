<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 11/30/16
 * Time: 18:24
 */

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
  'primary' => __( 'Primary Menu' ),
  'social'  => __( 'Social Links Menu' ),
) );