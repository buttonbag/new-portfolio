<?php 
$contact_title = get_field('contact_title');
$contact_subhead = get_field('contact_subhead');
?>
<!-- Contact -->
<section class="page-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase"><?php echo $contact_title; ?></h2>
        <h3 class="section-subheading text-muted"><?php echo $contact_subhead; ?></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        
        <?php echo do_shortcode('[contact-form-7 id="144" title="Contact form 1"]'); ?>

      </div>
    </div>
  </div>
</section>