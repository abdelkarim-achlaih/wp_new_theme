<?php get_header(); ?>

<section class="blog-post">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 ps-sm-0 pe-sm-0 bg-white mb-5 rounded">
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
                    <span class="post-category"><i class="fa-solid fa-tag"></i><?php the_category(', '); ?></span>
                  </div>
                  <div class="blog-post-content text-black-70 lh-lg ps-sm-5 pe-sm-5 fs-5">
                    <?php the_content(); ?>
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
        <div class="comments p-5">
          <h3 class="fw-bold fs-3">Comments</h3>
          <p class="text-balck-75">75 Réponses</p>
          <div class="comment mb-5">
            <div class="comment-data">
              <div class="row text-center text-md-start">
                <div class="col-md-1 mb-lg-auto mb-3">
                  <img src="imgs/avatar.png" alt="Comment Author" class="">
                </div>
                <div class="col-md-10 ps-md-5">
                  <h4 class="fw-bold">Abdelkarim</h4>
                  <p class="text-black-50">September 25, 2018 at 7:57 AM</p>
                </div>
              </div>
              <div class="comment-content fs-5 mb-2 text-center text-md-start">
                You are very big kings in the page builders market! Perfect post templates, thank you!
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-3 ps-sm-0 pe-sm-0 ps-lg-3 pe-lg-3">
        <div class="card">
          <div class="card-header">
            <h3 class="fw-bold">More Articles</h3>
          </div>
          <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();
                ?>
                  <div class="card-body">
                    <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn rounded-pill">Read more</a>
                  </div>
                  <?php
                }
              }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>