<?php get_header(); /* Template Name: Book Us Page */ ?>

<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 col-md-6 col-sm-offset-1 col-sm-10">
        <div class="top-preamble">
          <h1>Book Us for Your Wedding</h1>
          <p>
            Being married ourselves, we understand how complicated and difficult the process of putting together a 
            wedding can be. It is our goal to help make that process as easy and painless as possible. From inquiry to 
            the wedding day, we'll work with you to help you create a day that you'll never forget. Before the wedding, 
            we'll discuss your preference and vision of how you'd like the day to go and offer any creative insights to 
            help make sure the day goes as smoothly as possible.
          </p>
          
          <p>
            If you're interested in booking us, please complete the form below or email us at: 
            <a href="mailto:booking@hitchandsparrow.com">booking@hitchandsparrow.com</a> and we'll send over our 
            contract and pricing information for you to review.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Contact Us</h2>
      </div>
      
      <div class="col-lg-offset-1 col-lg-5 col-md-6">
        <div class="confirm-container">
          <div class="row">
            <div class="col-sm-12">
              <form role="form" data-request="onContactSent" data-request-update="'confirm': '.confirm-container'" data-request-success="$('#form-contact').slideUp(1000)" id="form-contact">
                
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="nameForm" placeholder="Name">
                </div>
                
                <div class="form-group">
                  <input type="text" name="email" class="form-control" id="emailForm" placeholder="Email Address">
                </div>
                
                <div class="form-group">
                  <input type="text" name="location" class="form-control" id="locationForm" placeholder="Wedding Location (and venue, if known)">
                </div>
                
                <div class="form-group">
                  <input type="text" name="weddingdate" class="form-control" id="weddingdateForm" placeholder="Wedding Date (if known)">
                </div>
                
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <select class="form-control" name="budget" id="budgetForm">
                        <option value="Unanswered">Photography Budget</option>
                        <option value="$3500 and under">$3500 and under</option>
                        <option value="$3500 to $5000">$3500 to $5000</option>
                        <option value="$5000 and up">$5000 and up</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input class="form-control" type="text" id="findusForm" name="findus" value="" placeholder="How did you find us?">
                    </div>
                  </div>
                  
                </div>
                
                <div class="form-group">
                  <input class="form-control" type="text" id="messageForm" name="body" value="" placeholder="Anything else we should know?">
                </div>
                
                <div class="form-group">
                  <label>I'm interested in photos for:</label><br />
                  <label class="checkbox-inline">
                    <input class="booking-check" type='checkbox' id="CheckboxWeddingPhotos" name="CheckboxWeddingPhotos"/><label for="CheckboxWeddingPhotos"></label>
                    <div class="form-checkbox-label">Wedding</div>
                  </label>
                  
                  <label class="checkbox-inline">
                    <input class="booking-check" type='checkbox' id="CheckboxEngagementPhotos" name="CheckboxEngagementPhotos"/><label for="CheckboxEngagementPhotos"></label>
                    <div class="form-checkbox-label">Engagement</div>
                  </label>
                  
                  <label class="checkbox-inline">
                    <input class="booking-check" type='checkbox' id="CheckboxPhotoboothPhotos" name="CheckboxPhotoboothPhotos"/><label for="CheckboxPhotoboothPhotos"></label>
                    <div class="form-checkbox-label">Photobooth</div>
                  </label>
                </div>
                
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-default btn-lg btn-block mb30">Send Inquiry</button>
                  </div>
                </div>
                
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <div class="col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-5 col-sm-12">
        <div class="quote">
          "Marriage has the power to set the course of your life as a whole. If your marriage is strong, even if all 
          the circumstances in your life around you are filled with trouble and weakness, it won't matter. You will be 
          able to move out into the world in strength."
          
          <div class="testimonial-author">Tim Keller (Meaning of Marriage)</div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<?php get_footer(); ?>
