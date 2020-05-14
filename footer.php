<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iambuttonbag
 */

?>

	</div><!-- #content -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; IamButtonbag <?php echo date("Y"); ?></span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
			
        			<?php $loop = new WP_Query( array('post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

        			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

              <li class="list-inline-item">
                <a href="<?php the_field('soc_link') ?>">
                  <i class="<?php the_field('soc_icon'); ?>"></i>
                </a>
              </li>

              <?php endWhile; ?>

          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#page-top" class="js-scroll-trigger">back to top <i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php get_template_part('content', 'modals'); ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/jqBootstrapValidation.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/agency.min.js"></script>

</body>
</html>
