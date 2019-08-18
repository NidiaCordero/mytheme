
    
  <!-- Portfolio Grid Section -->	<?php
  <section class="portfolio" id="portfolio">	$args = [
    'post_type' => 'post',
    'posts_per_page' => 6,
    'category_name' => 'portfolio'
  ];
  $query = new WP_Query($args);
  ?>
  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">
    <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
      <hr class="star-dark mb-5">	        <hr class="star-dark mb-5">
      <div class="row">	        <div class="row">
        <div class="col-md-6 col-lg-4">	            <?php while ($query->have_posts()): $query->the_post(); ?>
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">	            <div class="col-md-6 col-lg-4">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">	                <a class="portfolio-item d-block mx-auto" href="<?php the_permalink(); ?>">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">	                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <i class="fas fa-search-plus fa-3x"></i>	                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
              </div>	                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>
     
            </div>
            <?php 
          </a>	          endwhile;
          // Cette fonction réactualise les $post data en fonction du context du wp hierarchie
          wp_reset_postdata();
          ?>
        </div>
     
    </div>
  </section>