<?php /* Template Name: Blog Page */ ?>
<?php get_template_part( 'partials/header-blog'); ?>

<div class="blog-contain">
  <h1 class="hidden">Blog</h1>
  
  <div class="blog-featured">
    <div class="blog-featured-details">
      <div class="blog-post-featured-image">
        <a href="">
          <img src="http://hitchandsparrow.com/storage/app/uploads/public/5cf/7e3/f7c/5cf7e3f7cbfee527653980.jpg">
        </a>
      </div>
      
      <div class="blog-title">
        <a href="http://hitchandsparrow.com/blog/weddings/tyler-and-emily/">Tyler &amp; Emily</a>
      </div>
      <div class="blog-date-location">
        Posted on: Jun 05, 2019
      </div>
      
      <a href="http://hitchandsparrow.com/blog/weddings/tyler-and-emily/" class="btn btn-primary btn-sm">View Post</a>
    </div>
  </div>
  
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