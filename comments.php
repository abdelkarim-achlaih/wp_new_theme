<?php
if (comments_open()) {
  foreach($comments as $comment) {
    ?>
      <div class="comment mb-5">
        <div class="comment-data">
          <div class="row text-center text-md-start">
            <div class="col-md-1 mb-lg-auto mb-3">
              <?php echo get_avatar($comment, 55) ?>
            </div>
            <div class="col-md-10 ps-md-5">
              <h4 class="fw-bold"><?php comment_author()?></h4>
              <p class="text-black-50"><?php comment_date()?> at <?php comment_time()?></p>
            </div>
          </div>
          <div class="comment-content fs-5 mb-2 text-center text-md-start">
            <?php comment_text()?>
          </div>
        </div>
      </div>
    <?php
  }
}