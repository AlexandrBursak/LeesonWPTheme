<?php

function add_meta_boxes()
{
  $post_types = [ LCT_PLUGIN ];
  if ( in_array( get_current_screen()->post_type, $post_types ) )
  {
    // Generate Meta Form
    add_meta_box( 'LCT_PLUGIN_USERNAME',
      __( 'User name' ),
      'render_meta_block',
      LCT_PLUGIN,
      'side'
    );
  }
}

function render_meta_block ( $post )
{
  $username = get_post_meta($post->ID, 'username');
  $content = '<label for="username">Username</label><br>';
  $content.= '<input type="text" id="username" name="username" value="'. $username[0] .'">';
  echo $content;
}

function save_post_meta_data ( $post_id )
{
  if ( !empty($_POST) && $_POST['post_type'] == LCT_PLUGIN ) {
    update_post_meta($post_id, 'username', sanitize_text_field($_POST['username']));
  }
}

function add_post_type()
{
  $labels = [
    'name' => 'Testimonial',
    'singular_name' => 'Testimonials', // админ панель Добавить->Функцию
    'add_new' => 'Add Testimonial',
    'add_new_item' => 'Add newTestimonial', // заголовок тега <title>
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'all_items' => 'All Testimonial',
    'view_item' => 'View the all Testimonial',
    'search_items' => 'Search Testimonial',
    'not_found' =>  'Testimonial did not find',
    'not_found_in_trash' => 'Cart is empty',
    'menu_name' => 'Custom Testimonials' // ссылка в меню в админке
  ];
  $args = [
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, // показывать интерфейс в админке
    'has_archive' => true,
    'hierarchical' => true,
    'register_meta_box_cb' => 'add_meta_boxes' ,
    'menu_position' => 20, // порядок в меню
    'supports' => array( 'editor', 'revisions' )
  ];
  register_post_type( LCT_PLUGIN, $args );
}

add_action('init', 'add_post_type');

add_action( 'save_post', 'save_post_meta_data' );