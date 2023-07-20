<?php get_header(); ?>
<section class="request">
  <div class="container p-0">
    <h1 class="text-center mb-5"><i class="fa-solid fa-calculator me-3"></i>Demander Un Devis</h1>
    <div class="row align-items-start">
      <div class="col-lg-6 form-holder ps-4 pe-4">
        <?php echo do_shortcode('[wpforms id="86"]');?>
      </div>
      <div class="col-lg-6">
        <div class="image-background d-none d-lg-block">
          <img src="<?php echo get_stylesheet_directory_uri() . '/imgs/request.jpg' ?>" alt="Request" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>