<?php get_template_part( 'partials/header-blog'); ?>

  <div class="blog-post-contain">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  </div>

<?php get_template_part( 'partials/footer-blog'); ?>
