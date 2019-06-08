<div class="container-fluid footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 mb20">
        <h4>Social Media</h4>
        <ul class="list-inline social">
          <li>
            <a target="_new" href="https://www.instagram.com/hitchandsparrow/">
              <img src="<?= get_theme_file_uri("images/social-instagram.svg") ?>" alt="Social Media, Instagram"/>
            </a>
          </li>
          <li>
            <a target="_new" href="https://www.facebook.com/hitchandsparrow">
              <img src="<?= get_theme_file_uri("images/social-facebook.svg") ?>" alt="Social Media, Facebook"/>
            </a>
          </li>
          <li>
            <a target="_new" href="https://www.pinterest.com/hitchandsparrow/">
              <img src="<?= get_theme_file_uri("images/social-pinterest.svg") ?>" alt="Social Media, Pinterest"/>
            </a>
          </li>
          <li>
            <a target="_new" href="http://www.yelp.com/biz/hitch-and-sparrow-wedding-co-chicago-2">
              <img src="<?= get_theme_file_uri("images/social-yelp.svg") ?>" alt="Social Media, Yelp"/>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="col-sm-4 mb20">
        <h4>Copyright</h4>
        Images & thoughts &copy; 
        <script type="text/javascript">
        <!--
        var currentTime = new Date()
        var year = currentTime.getFullYear()
        document.write(year)
        --></script>
        Hitch & Sparrow<br />All Rights Reserved.
      </div>
      
      <div class="col-sm-4 mb20">
        <h4>Site Map</h4>
        <ul class="list-inline site-map">
          <li><a href="/">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="portfolio">
              Portfolio <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="portfolio/getting-ready">Getting Ready</a></li>
              <li><a href="portfolio/editorial">Editorial</a></li>
              <li><a href="portfolio/documentary">Documentary</a></li>
              <li><a href="portfolio/details">Details</a></li>
              <li><a href="portfolio/fun">Fun</a></li>
              <li><a href="portfolio/ceremony">Ceremony</a></li>
              <li><a href="portfolio/engagements">Engagements</a></li>
              <li><a href="portfolio/favorites">All Time Favorites</a></li>
            </ul>                    
          </li>
          <li><a href="blog">Blog</a></li>
          <li><a href="about-us">About H&amp;S</a></li>
        </ul>
        <a href="http://hitchandsparrow.com/book-us" class="btn btn-primary outline mt10">Book H&S</a>
      </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?= get_theme_file_uri("js/bootstrap.min.js") ?>"></script>
<script src="<?= get_theme_file_uri("js/retina.earlybird.min.js") ?>"></script>

<!-- FlexSlider -->
<script defer src="<?= get_theme_file_uri("js/jquery.flexslider-min.js") ?>"></script>
<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    touch: true,
    slideshow: false,
    controlNav: true,
    slideshowSpeed: 7000,
    animationSpeed: 600,
    initDelay: 0,
    animation: "slide",
    start: function(slider) { // Fires when the slider loads the first slide
      var slide_count = slider.count - 1;
      $('section').removeClass('loading');
      
      $(slider)
      .find('img.lazy:eq(0)')
      .each(function() {
        var src = $(this).attr('data-src');
        $(this).attr('src', src).removeAttr('data-src');
      });
    },
    before: function(slider) { // Fires asynchronously with each slider animation
      var slides     = slider.slides,
      index      = slider.animatingTo,
      $slide     = $(slides[index]),
      $img       = $slide.find('img[data-src]'),
      current    = index,
      nxt_slide  = current + 1,
      prev_slide = current - 1;
      
      $slide
      .parent()
      .find('img.lazy:eq(' + current + '), img.lazy:eq(' + prev_slide + '), img.lazy:eq(' + nxt_slide + ')')
      .each(function() {
        var src = $(this).attr('data-src');
        $(this).attr('src', src).removeAttr('data-src');
      });
    }
  });
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29479671-1', 'hitchandsparrow.com');
  ga('send', 'pageview');
</script>
</body>
</html>
