
<!-- Portfolio Grid -->
<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Portfolio</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <?php $num=1; $loop = new WP_Query( array('post_type' => 'work', 'orderby' => 'post_date', 'order' => 'ASC') ); ?>

      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $num++; ?>">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php the_field('work_image'); ?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4><!-- Threads --><?php the_title(); ?></h4>
            <p class="text-muted">
              <?php foreach((get_the_category()) as $category){
                echo $category->name."<br>";
              } ?>
            </p>
          </div>
        </div>

        <?php endWhile; wp_reset_query(); ?>

      </div>
    </div>
</section>

<!-- edit pop up modals in footer -->