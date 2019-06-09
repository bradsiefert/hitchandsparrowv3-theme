<?php /* Template Name: Blog Page */ ?>
<?php get_template_part( 'partials/header-blog'); ?>

<div class="blog-contain">
  <h1 class="hidden">Blog</h1>
  
  
    <?php $wp_query->query('posts_per_page=15&order=DESC'.'&paged='.$paged); while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
      <div class="blog-featured">
        <div class="blog-featured-details">
          <div class="blog-post-featured-image">
            <a href="">
              <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
              <!-- <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']); ?> -->
            </a>
          </div>
          
          <div class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="blog-date-location">
            Posted on: Jun 05, 2019
          </div>
          
          <a href="http://hitchandsparrow.com/blog/weddings/tyler-and-emily/" class="btn btn-primary btn-sm">View Post</a>
        </div>
      </div>
    
    <?php endwhile; ?>
  
  
  
  
  
  <div class="archive-tile">
    <p>To see more of our work, please check out our Archives.</p>
    <ul class="pagination">
      <li class="active">
        <button class="btn btn-primary btn-sm" href="/blog?page=2">More Posts</button>
      </li>
     </ul>
  </div>
</div>

<?php get_template_part( 'partials/footer-blog'); ?>