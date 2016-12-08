<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo( 'name' ); ?></title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <?php wp_head(); ?>
</head>
<body>

<div>

  <div> <a href="<?php home_url( '/' ); ?>"> <?php bloginfo( 'name' ); ?> </a> </div>
  <header class="blog-masthead">
    <div class="container">
      <menu class="navbar-collapse collapse">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class' => 'blog-nav',
          'fallback_cb' => 'rewrite_class_name_for_class'
        ) );
        ?>
      </menu>
    </div>
  </header>