<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 11/30/16
 * Time: 18:24
 */
?>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <?php get_sidebar(); ?>
    </div>

    <div class="col-sm-9">
      <?php if ( have_posts() ) :
        // Start the loop.
        while ( have_posts() ) : the_post();
          ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="border: 1px dotted green;">
            <div class="entry-header">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
            <div><a href="<?php echo get_permalink(); ?>"> Link More </a></div>

          </article>

          <?php
          // End the loop.
        endwhile;
      endif;
      ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>
