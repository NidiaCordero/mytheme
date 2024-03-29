<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <?php dynamic_sidebar('footer-left'); ?>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <?php 
                    <li class="list-inline-item">	                // on remplace le menu en dur par un menu dynamique
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">	                wp_nav_menu([ // n'oubliez pas d'aller sur la documentation de cette fonction pour voir quels sont tous les paramêtres que l'on peut mettre et ce à quoi ils servent
                            <i class="fab fa-fw fa-facebook-f"></i>	                    'menu_class' => 'list-inline mb-0',
                        </a>	                    'theme_location' => 'social-network-footer',
                    </li>	                    'container' => '',
                    <li class="list-inline-item">	                    'fallback_cb' => false,
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">	                ]);;
                            <i class="fab fa-fw fa-google-plus-g"></i>	                ?>
            </div>
            <div class="col-md-4">
            <?php dynamic_sidebar('footer-right'); ?>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2019</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<?php
  // Ajout de la fonction wp_footer() qui va placer les scripts js qui doivent se trouver avant la fermeture de la balise body
// https://developer.wordpress.org/reference/functions/wp_footer/
wp_footer();
?>
</body>

</html> 