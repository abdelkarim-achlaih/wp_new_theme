<?php get_header(); ?>

<section class="blog-post">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 ps-sm-0 pe-sm-0 ps-lg-3 pe-lg-3 bg-white mb-5">
        <div class="blog-post-item">
          <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                ?>
                  <div class="blog-post-img">
                    <?php the_post_thumbnail('', ['class' => 'img-fluid rounded', 'alt' => 'Blog-post-img']); ?>
                  </div>
                  <div class="blog-post-author text-center">
                    <img src="imgs/avatar.png" alt="avatar" class="img-fluid rounded-circle">
                    <span class="fs-4"></i><?php the_author(); ?></span>
                  </div>
                  <div class="blog-post-title d-flex justify-content-center">
                    <h1 class="text-center fs-1 w-75"><?php the_title(); ?></h1>
                  </div>
                  <div class="blog-post-data d-flex justify-content-evenly mb-5">
                    <span><i class="fa-solid fa-clock"></i><?php the_time('F j, Y'); ?></span>
                    <span><i class="fa-solid fa-comment"></i><?php comments_number(); ?></span>
                    <span class="text-end"><i class="fa-solid fa-tag"></i><?php the_category(', '); ?></span>
                  </div>
                  <div class="blog-post-content">
                    <p class="text-black-70 lh-lg p-sm-5">
                      <?php the_content(); ?>
                    </p>
                  </div>
                  <?php
                }
              }
            ?>
        </div>
        <div class="pagination pt-4 pb-5 d-flex justify-content-evenly">
          <?php
            if (get_previous_post_link()) {
              previous_post_link('%link', '« Prev Article');
            } else {
              ?>
                <span class="btn rounded-pill">« Prev Article</span>
              <?php
            }
            if (get_next_post_link()) {
              next_post_link('%link', 'Next Article »');
            } else {
              ?>
                <span class="btn rounded-pill">Next Article »</span>
              <?php
            }
          ?>
    </div>
      </div>


      <div class="col-lg-3 ps-sm-0 pe-sm-0 ps-lg-3 pe-lg-3">
        <div class="card">
          <div class="card-header">
            <h3 class="fw-bold"><?php the_author(); ?></h3>
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content...</p>
            <a href="#" class="btn rounded-pill">Read more</a>
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content...</p>
            <a href="#" class="btn rounded-pill">Read more</a>
          </div>
          <div class="card-body">
            <h5 class="card-title fw-bold">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content...</p>
            <a href="#" class="btn rounded-pill">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>