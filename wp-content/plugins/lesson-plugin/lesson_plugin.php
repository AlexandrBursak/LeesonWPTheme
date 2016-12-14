<?php
/*
Plugin Name: Lesson Plugin
Description: This plugin will be doing smth
Version: 0.1
Author: Circle Group Class
Author URI: http://circle.com.ua/
Plugin URI: http://circle.com.ua/
*/

define('LESSON_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('LESSON_PLUGIN_URL', plugin_dir_url(__FILE__));

register_activation_hook(__FILE__, 'lesson_plugin_activation');
register_deactivation_hook(__FILE__, 'lesson_plugin_deactivation');

function lesson_plugin_activation() {
  // действие при активации
//  error_log('plugin activate', 3, 'log.txt');
}

function lesson_plugin_deactivation() {
  // при деактивации
//  error_log('plugin deactivate', 3, 'log.txt');
}


//function filterText ($content) {
//  return 'Modified:<br>' . $content;
//}
//add_filter('the_content', 'filterText', 100);

//function insertAdditionalText() {
//  echo "<h3> Hello World from plugin 1 </h3>";
//}
//add_action('the_content_from_plugin', 'insertAdditionalText');


//function insertBlockTOFooter() {
//  echo '<div> Footer from plugin </div>';
//}
//add_action('wp_footer', 'insertBlockTOFooter');

add_action("widgets_init", function () {
  register_widget("TextWidget");
  register_widget("lesson_widget");
});

register_sidebar(
  array(
    'id' => 'sidebar3',
    'name' => __( "Lesson Widget" ),
    'description' => 'Place for lesson widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s ourselve">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));

function lesson_plugin ( ) {
  echo "<div>";
  echo 'Hello World!';
  echo '</div>';
}

add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page ()
{
  add_menu_page( 'Lesson Plugin', 'Lesson PL', 'manage_options', 'lesson_plugin_1', 'lesson_plugin', null, 59 );
  add_submenu_page( 'lesson_plugin_1', 'Lesson sub Plugin', 'Lesson sub PL', 'manage_options', 'lesson_plugin_2', 'lesson_plugin');
}

define('LESSON_PLUGIN_BOX', 'lesson_plugin_box');

function custom_meta_box ( $args ) {
  var_dump($args);
  echo 'Hello from custom box_menu';
}

add_action( 'add_meta_boxes', 'add_custom_meta_box' );

function add_custom_meta_box () {
  add_meta_box( LESSON_PLUGIN_BOX, 'Lesson plugin', 'custom_meta_box', ['post', 'page'], 'side', 'high', $post );
}

