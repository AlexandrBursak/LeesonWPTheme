<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 11/30/16
 * Time: 18:43
 */?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <?php wp_head(); ?>
</head>
<body>

<header>
  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'menu_class'     => 'primary-menu',
    ) );
    ?>
  </nav>
</header>

<div class="main_content">