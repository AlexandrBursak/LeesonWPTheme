<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 blog-main">
        <main class="blog-post">
          <?php do_action('wp_footer'); ?>
          <?php while ( have_posts() ) { the_post(); ?>
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
            <?php do_action('the_content_from_plugin'); ?>
            <hr />
          <?php } ?>
        </main>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>
