<?php
/**
	Template Name: Home Page
 */

// $twitter_url = get_field('twitter_url');
// $codepen_url = get_field('codepen_url');
// $linkedin_url = get_field('linkedin_url');


get_header();
?>
  
  <?php get_template_part('content', 'hero'); ?>

  <?php get_template_part('content', 'services'); ?>

  <?php get_template_part('content', 'portfolio'); ?>  


  <!-- About -->
  <?php get_template_part('content', 'about'); ?>

  <!-- team -->
  

  <!-- Contact -->
  <?php get_template_part('content', 'contact'); ?>


<?php
get_footer(); ?>
