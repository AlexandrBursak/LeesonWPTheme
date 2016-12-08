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
