<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 12/2/16
 * Time: 21:34
 * Template Name: Test template
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 blog-main">
      <?php if (!dynamic_sidebar('Simple Widget')) :?> <?php endif;?>
      <main class="blog-post">
        <?php while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <div><?php the_excerpt(); ?></div>
          <a class="btn btn-sm btn-primary" href="<?php echo get_permalink(); ?>"> Read more </a>
          <hr/>
        <?php endwhile; ?>
      </main>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer('static'); ?>



