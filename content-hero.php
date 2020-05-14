<?php 
/* ACF variables */
$hero_headline = get_field('hero_headline');
$hero_copy = get_field('hero_copy');
$hero_btn_txt = get_field('hero_btn_txt');
$background_image = get_field('background_image');
?>

<!-- hero -->
<header class="masthead" style="background: center / cover no-repeat url('<?php echo $background_image; ?>');">
  <div class="container">
    <div class="intro-text">
      <h1 class="intro-lead-in"><?php echo $hero_headline; ?></h1>
      <p class="lead"><?php echo $hero_copy; ?></p>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services"><?php echo $hero_btn_txt; ?></a>
    </div>
  </div>
</header>
