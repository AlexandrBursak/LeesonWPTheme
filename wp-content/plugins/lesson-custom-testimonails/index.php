<?php
/*
  Plugin Name: Lesson Custom Testimonials Plugin
  Description: Add Feedback About Us
  Version: 0.1
  Author: Circle Group Class
  Author URI: http://circle.com.ua/
  Plugin URI: http://circle.com.ua/
*/

define('LCT_PLUGIN', 'custom_testimonial');
define('LCT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('LCT_PLUGIN_URL', plugin_dir_url(__FILE__));

include (LCT_PLUGIN_DIR . 'modules/init_post_type.php');


add_shortcode('lct_plugin_testimonials', function ( $attr ) {

  $pages = get_pages( [
    'post_type' => LCT_PLUGIN
  ] );

  $block = '<div class="row">';

  foreach(  $pages as $page )
  {
    $block.= '<div class="col-sm-6" style="border: 1px dotted red;">'.$page->post_content.'</div>';
  }

  $block.= '</div>';

//  var_dump($pages);

  return $block;
});

add_shortcode('lct_plugin_add_testimonials', function ( $attr ) {

  $content = "<hr><div>";
  $content.= "<h3>Add testimonial</h3>";
  $content.= "<form method='post' action=''>";
  $content.= wp_nonce_field( LCT_PLUGIN, LCT_PLUGIN, null, false );
  $content.= "<label for='username'>UserName</label>";
  $content.= "<input class='form-control' type='text' name='username' id='username' value='' />";
  $content.= "<label for='testimonial'>Our feedback</label>";
  $content.= "<textarea class='form-control' name='testimonial' id='testimonial'></textarea>";
  $content.= "<input type='hidden' name='action' value='add_testimonial'>";
  $content.= "<button type='submit' class='btn btn-primary'>Add Testimonil</button>";
  $content.= "</form>";
  $content.= "</div>";

  return $content;

});

function is_post_own()
{
  return LCT_PLUGIN === get_post_type( get_the_ID() );
}

function save_new_testimonial( $post_id ) {

  if ( wp_verify_nonce( $_POST[ LCT_PLUGIN ], LCT_PLUGIN ) ) {

    $username = stripslashes( $_POST['username'] );
    $testimonial = stripslashes( $_POST['testimonial'] );
    if ( trim( $testimonial ) )
    {
//      update_post_meta($post_id, 'copied', '1');

      // Create post object
      $my_post = array(
        'post_title'    => wp_strip_all_tags( "" ),
        'post_content'  => $testimonial,
        'post_status'   => 'draft',
        'post_author'   => 1,
        'post_category' => [],
        'post_type'     => LCT_PLUGIN
      );

      // Insert the post into the database
      if ( $post_id = wp_insert_post( $my_post )) {
        echo $post_id;

        add_post_meta($post_id, 'username', $username);
      }
    }

  }

}

add_action( 'init', 'save_new_testimonial' );
