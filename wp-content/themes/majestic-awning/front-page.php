<?php get_header(); ?>

  <div class="hero">
    <?php echo do_shortcode("[metaslider id=10]"); ?>
    <!-- <img style="width: 100%; height: auto;" src="http://placehold.it/1800x800" alt=""> -->
    <!-- <img style="width: 100%; height: auto;" src="<?php echo get_template_directory_uri() ?>/images/hotel.jpg" alt="">
    <div class="caption">
      <em>Hotel La Rose, Santa Rosa CA</em>
    </div> -->
  </div>

  <div class="contact-bar">
    <div class="container">
      <h2>Have questions? Call us at <a href="tel:707-528-3277">707-528-3277</a></h2>
    </div>
  </div>

  <div class="welcome">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php echo get_post_field('post_content', $post_id); ?>
        </div>
        <div class="col-md-4">
          <h2 class="text-center">Contact Us</h2>
          <p><a href="/contact/"><img src="<?php echo get_template_directory_uri() ?>/images/radius.png" alt=""></a></p>
        </div>
        <div class="col-md-4">
          <h2 class="text-center">Reviews</h2>
          <p class="text-center"><a href="https://goo.gl/yLq3Sr" target="_blank"><button type="button" class="btn btn-lg btn-success"><i class="fa fa-star-o" aria-hidden="true"></i> Read our Reviews</button></a></p>
          <p class="text-center"><a href="https://goo.gl/Kmqn5p" target="_blank"><button type="button" class="btn btn-lg btn-success"><i class="fa fa-comment-o" aria-hidden="true"></i> Write a review!</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="reviews">
    <div class="container">
      <div class="row">
        <blockquote cite="https://goo.gl/maps/qHRdwEsJV732">
          <h2 class="stars">★★★★★</h2>
          <p>Great service, Doug had to customize the awning to allow access above. Everything turned out great, very professional job.
          on time on budget.</p>
          <footer>Mike B.</footer>
        </blockquote>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
