<?php get_template_part( 'partials/header-blog'); ?>

  <div class="blog-post-contain">
    <div class="blog-post-details">
      <p class="blog-title"><?php the_title(); ?></p>
      <p class="blog-date-location">October 2018 (Chicago, IL)</p>
      <p class="blog-text">
        Layne and Lauren’s wedding day will forever stick in our mind as one of the most beautiful. The grounds of 
        the Medinah’s peak fall colors and nature so close to the clubhouse’s stunning architecture is a the stuff of 
        dreams. The remarkable scenery continued for the St. Alphonsus church ceremony. The historic church’s 
        weathered green copper bell tower, stained glass, and bas-reliefs had us in awe every moment we were there. 
        Following the ceremony we returned to the Medinah’s clubhouse where the elegant architecture, a blend of 
        classic Byzantine, Oriental, and Italian architecture, continued to impress. Words don’t do this wedding 
        justice so check out the photographs, that’s more our thing.
      </p>
      <br/>

      <p class="blog-text">
        Church: <a target="_blank" href="https://www.stalphonsuschicago.org/">St. Alphonsus Catholic Church, Chicago</a><br>
        Venue: <a target="_blank" href="https://www.medinahcc.org">Medinah Country Club</a><br>
        Florist: <a target="_blank" href="https://myflowerstudio.com/">The Flower Studio</a><br>
        Dress: <a target="_blank" href="https://miracouture.com/">Mira Couture</a><br>
        Bakery: <a target="_blank" href="https://www.delishcakes.net/">Delish Cakes</a><br>
      </p>
    </div>
    <!-- <div class="blog-post-image-contain"> -->
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>

      <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>

      <?php endif; ?>
    <!-- </div> -->
  </div>  
<?php get_template_part( 'partials/footer-blog'); ?>
