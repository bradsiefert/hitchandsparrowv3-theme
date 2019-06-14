<?php /* Template Name: Blog Page */ ?>
<?php get_template_part( 'partials/header-blog'); ?>

<div class="blog-contain">
  <h1 class="hidden">Blog</h1>
  
  <?php
    $wp_query->query('posts_per_page=7&order=DESC'.'&paged='.$paged);
    while ($wp_query->have_posts()) :
    $wp_query->the_post(); 
  ?>
    <div class="blog-featured">
      <div class="blog-featured-details">
        <div class="blog-post-featured-image">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
          </a>
        </div>

        <div class="blog-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="blog-date-location">
          Posted on: Jun 05, 2019
        </div>
        
        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">View Post</a>
      </div>
    </div>
  <?php endwhile; ?>

  <?php if ($paged > 1) { ?>
    <div class="archive-tile">
      <p>No more blog posts to show.</p>
      <ul class="pagination">
        <li class="active">
          <a class="btn btn-primary btn-sm" href="/blog">Go back home</a>
        </li>
      </ul>
    </div>
  <?php } else { ?>
    <div class="archive-tile">
      <p>To see more of our work, please check out our Archives.</p>
      <ul class="pagination">
        <li class="active">
          <?php next_posts_link('More Posts >'); ?>
        </li>
      </ul>
    </div>
  <?php } ?>
</div>

<?php get_template_part( 'partials/footer-blog'); ?>