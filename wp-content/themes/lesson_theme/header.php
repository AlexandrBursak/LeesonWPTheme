<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo( 'name' ); ?></title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <?php wp_head(); ?>
</head>
<body>

<div>

  <header>
    <div> <a href="<?php home_url( '/' ); ?>"> <?php bloginfo( 'name' ); ?> </a> </div>
    <menu class="navbar-collapse collapse">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class' => 'nav navbar-nav'
      ) );
      ?>
    </menu>
  </header>