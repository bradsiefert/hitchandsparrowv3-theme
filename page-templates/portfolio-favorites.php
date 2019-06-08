<?php get_header(); /* Template Name: Portfolio / Favorites */ ?>
<link href="<?= get_theme_file_uri("css/flexslider.min.css") ?>" rel="stylesheet" type="text/css" media="screen" />

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-sm-offset-1 col-sm-10">
        <div class="top-preamble">
          <h1>Portfolio Favorites</h1>
          <p>
            Enjoy some of our favorite moments and details from over the years. From Mountain resorts to the frozen 
            beauty of Toronto. From the charm and sprawl of Chicago to the vibrant culture of Nicaragua. We're thrilled 
            with where we've been and who we have had the privileged to work with—please take some time to experience 
            our couples' wedding stories.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <ul class="nav nav-pills center-pills">
          <li><a href="/portfolio/getting-ready">Getting Ready</a></li>
          <li><a href="/portfolio/editorial">Editorial</a></li>
          <li><a href="/portfolio/documentary">Documentary</a></li>
          <li><a href="/portfolio/details">Details</a></li>
          <li><a href="/portfolio/fun">Fun</a></li>
          <li><a href="/portfolio/engagements">Ceremony</a></li>
        </ul>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        
        <section class="loading">
          <div class="slider">
            <div class="flexslider">
              <ul class="slides">
                <?php get_template_part( 'partials/portfolio-favorites'); ?>
              </ul>
            </div>
          </div>
        </section>
        
        <div class="slider-mobile mb30">
          <ul class="list-unstyled">
            <?php get_template_part( 'partials/portfolio-favorites'); ?>
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
