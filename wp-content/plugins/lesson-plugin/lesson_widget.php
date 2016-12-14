<?php

class lesson_widget extends WP_Widget
{

  public function __construct() {
    parent::__construct(
      "lesson_text_widget",
      __("Lesson Text Widget 1"),
      array("description" => __("A lesson widget to show how WP Plugins work") )
    );
  }

  public function form( $instance ) {
    $title = $text = "";
    // если instance не пустой, достанем значения
    if ( !empty( $instance ) ) {
      $title = $instance["title"];
      $text = $instance["text"];
    }
    $tableId = $this->get_field_id( "title" );
    $tableName = $this->get_field_name( "title" );
    echo '<label for="' . $tableId . '">Title</label><br>';
    echo '<input id="' . $tableId . '" type="text" name="' . $tableName . '" value="' . $title . '"><br>';
    $textId = $this->get_field_id( "text" );
    $textName = $this->get_field_name( "text" );
    echo '<label for="' . $textId . '">Text</label><br>';
    echo '<textarea id="' . $textId . '" name="' . $textName . '">' . $text . '</textarea>';
  }

  public function update($newInstance, $oldInstance) {
    $values = array();
    $values["title"] = htmlentities($newInstance["title"]);
    $values["text"] = htmlentities($newInstance["text"]);
    return $values;
  }

  public function widget($args, $instance) {
    $title = $instance["title"];
    $text = $instance["text"];
    echo "<h2>$title</h2>";
    echo "<p>$text</p>";
  }

}