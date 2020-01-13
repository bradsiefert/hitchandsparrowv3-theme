<?php get_header(); ?>
<link href="<?= get_theme_file_uri("css/flexslider.min.css") ?>" rel="stylesheet" type="text/css" media="screen" />

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="dn">Chicago Wedding Photography Company</h1>
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

<div class="container-fluid main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center mb30">
        <div id="wp-ratedWA">
          <a 
            href="https://www.weddingwire.com/biz/hitch-sparrow-wedding-photography-chicago/65f4d10c1068848e.html" 
            title="WeddingWire Couples' Choice Award Winner 2020"
          >
            <img 
              width="128" 
              height="128" 
              alt="Hitch & Sparrow Wedding Photography" 
              id="wp-ratedWA-img-2020" 
              src="https://cdn1.weddingwire.com/img/badges/2020/badge-weddingawards_en_US.png"
            />
          </a>
        </div>
        <!-- <script type="text/javascript" src="https://cdn1.weddingwire.com/_js/wp-rated.js?v=4"></script>
        <script>wpShowRatedWAv3('473104','2020');</script> -->
      </div>
    </div>

    <div class="row">
      <div class="col-sm-offset-2 col-sm-8 text-center mb30">
        <h1>
          We're a Denver and Chicago based wedding photography team who specialize in editorial and documentary 
          style photography.
        </h1>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        <h2>
          Add-ons to your special day
        </h2>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12 mb30">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="circles engagements">
              <div class="caption">Engagement Sessions</div>
              <div class="details">Make memories before your wedding day.</div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-6">
            <div class="circles instagram">
              <div class="caption">Beautiful Photo Albums</div>
              <div class="details">Enjoy your photos for years to come with intentionally layed out albums.</div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-12">
            <div class="circles photobooth">
              <div class="caption">Book Our Photobooth</div>
              <div class="details">An extremely fun addition to any wedding day. Affordable packages available.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php get_template_part( 'partials/featured-on'); ?>
  </div>
</div>

<?php get_footer(); ?>
