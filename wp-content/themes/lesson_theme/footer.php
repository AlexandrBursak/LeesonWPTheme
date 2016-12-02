  <footer>Footer</footer>

  <div class="navbar-collapse collapse">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'secondly',
      'menu_class'     => 'nav navbar-nav'
    ) );
    ?>
  </div>

</div>

<?php wp_footer(); ?>

</body>
</html>