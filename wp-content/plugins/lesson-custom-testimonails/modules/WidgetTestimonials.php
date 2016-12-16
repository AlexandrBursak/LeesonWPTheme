<?php

class WidgetTestimonials extends WP_Widget
{

  function __construct()
  {
    parent::__construct(
      LCT_PLUGIN,
      __("Custom Testimonial"),
      array("description" => __("Show testimonial") )
    );
  }

  function update( $new_instance, $old_instance )
  {
    $values = [];
    $values["title"] = htmlentities($new_instance["title"]);
    $values["counter"] = htmlentities($new_instance["counter"]);
    $values["order_by"] = htmlentities($new_instance["order_by"]);
    return $values;
  }

  function widget( $args, $instance )
  {
    $body = $args['before_widget'];
    $body.= $args['before_title'];
    $body.= $instance['title'];
    $body.= $args['after_title'];
    $body.= '[lct_plugin_testimonials_widget counter="'.$instance['counter'].'" order_by="'.$instance['order_by'].'"]';
    $body.= $args['after_widget'];
    echo do_shortcode($body);
  }

  function form( $instance )
  {
    $titleId = $this->get_field_id( "title" );
    $titleName = $this->get_field_name( "title" );
    $content = '<div><label for="counter">Title</label><br>';
    $content.= '<input type="text" name="'.$titleName.'" id="'.$titleId.'" value="'.$instance['title'].'"></div>';
    $counterId = $this->get_field_id( "counter" );
    $counterName = $this->get_field_name( "counter" );
    $content.= '<div><label for="counter">Counter</label><br>';
    $content.= '<input type="text" name="'.$counterName.'" id="'.$counterId.'" value="'.$instance['counter'].'"></div>';
    $order_byId = $this->get_field_id( "order_by" );
    $order_byName = $this->get_field_name( "order_by" );
    $content.= '<div><label for="order_by">Order</label><br>';
    $content.= '<input type="text" name="'.$order_byName.'" id="'.$order_byId.'" value="'.$instance['order_by'].'"></div>';
    echo $content;
  }

}