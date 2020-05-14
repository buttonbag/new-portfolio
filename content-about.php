<?php  
$about_title = get_field('about_title');
$about_subhead = get_field('about_subhead');
$about_image = get_field('about_image');
$about_name = get_field('about_name');
$about_position = get_field('about_position');
$about_copy = get_field('about_copy');
?>
<!-- About -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"><?php echo $about_title; ?></h2>
        <!-- if there is text entered in services section body -->
        <?php if ( !empty($about_subhead)) : ?>
          <h3 class="section-subheading text-muted"><?php echo $about_subhead; ?></h3>
        <?php endif; ?>
        <!-- end if -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="<?php echo $about_image; ?>" alt="">
          <h4><?php echo $about_name; ?></h4>
          <p class="text-muted"><?php echo $about_position; ?></p>
          <ul class="list-inline social-buttons">

            <?php $loop = new WP_Query( array('post_type' => 'social_media', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

            <?php 
            while( $loop->have_posts() ) : $loop->the_post(); 
              $soc_link = get_field('soc_link');
              $soc_icon = get_field('soc_icon'); ?>

              <li class="list-inline-item">
                <?php if( !empty($soc_link) ) : ?>
                  <a href="<?php echo $soc_link; ?>">
                    <i class="<?php echo $soc_icon; ?>"></i>
                  </a>
                <?php endif; ?>
              </li>

              <?php endWhile; wp_reset_query(); ?>

            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted"><?php echo $about_copy; ?></p>
        </div>
      </div>
    </div>
</section>