<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-9 blog-main">
        <main class="blog-post">
          <?php while ( have_posts() ) { the_post(); ?>
            <?php do_action('theme_action'); ?>
            <h2><?php the_title(); ?></h2>
            <div>data posts: <?php the_date(); ?></div>
            <div><?php the_content(); ?></div>
            <hr />
          <?php } ?>
        </main>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>
