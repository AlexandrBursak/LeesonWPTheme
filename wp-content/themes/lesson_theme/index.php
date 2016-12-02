<?php get_header(); ?>

<div class="container">
  <?php get_sidebar(); ?>
  <div class="col-sm-9">
    <main>

      <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_excerpt(); ?></div>
        <a class="btn btn-sm btn-primary" href="<?php echo get_permalink(); ?>"> Read more </a>
        <hr/>
      <?php endwhile; ?>

    </main>
  </div>

</div>

<?php get_footer(); ?>
