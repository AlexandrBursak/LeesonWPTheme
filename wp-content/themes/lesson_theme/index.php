<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 blog-main">
      <main class="blog-post">
        <?php while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php
          if ( has_post_thumbnail() )
          {
            ?>
            <div class="picture">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php
          }
          ?>
          <div><?php the_excerpt(); ?></div>
          <a class="btn btn-sm btn-primary" href="<?php echo get_permalink(); ?>"> Read more </a>
          <hr/>
        <?php endwhile; ?>

      </main>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
