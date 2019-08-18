<?php
  <section class="bg-primary text-white mb-0" id="about">	// https://developer.wordpress.org/reference/functions/get_theme_mod/
    <div class="container">	// Attention dans ce template on utilise un raccourci pour <?php echo par <?= ceci n'est possible que si la config php.ini le permet short_open_tag. À ne faire que si vous avez le control de la config php.ini
      <h2 class="text-center text-uppercase text-white">About</h2>	$text_column_left = get_theme_mod('coding-about-text-left', __('Texte about gauche'));
      <hr class="star-light mb-5">	$text_column_right = get_theme_mod('coding-about-text-right', __('Texte about Droit'));
      <div class="row">	?>
        <div class="col-lg-4 ml-auto">	<!-- About Section -->
          <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>	<section class="bg-primary text-white mb-0" id="about">
        </div>	  <div class="container">
        <div class="col-lg-4 mr-auto">	    <h2 class="text-center text-uppercase text-white">About</h2>
          <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>	    <hr class="star-light mb-5">
        </div>	    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead"><?= $text_column_left; ?></p>
      </div>	      </div>
      <div class="text-center mt-4">	      <div class="col-lg-4 mr-auto">
        <a class="btn btn-xl btn-outline-light" href="#">	        <p class="lead"><?= $text_column_right; ?></p>
          <i class="fas fa-download mr-2"></i>	
          Download Now!	
        </a>	
      </div>	      </div>
    </div>	    </div>
  </section> 	    <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
        <i class="fas fa-download mr-2"></i>
        Download Now!
      </a>
    </div>
  </div>
</section> 
