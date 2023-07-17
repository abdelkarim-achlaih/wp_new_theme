<?php
if (comments_open()) {
  ?>
    <div class="mt-5 comments-holder">
  <?php
  $comments_args = array (
    'style' => 'div',
    'max_depth' => 3,
    'type' => 'comment',
    'avatar_size' => 55,
    'reverse_top' => true,
    'callback' => 'mytheme_comment'
  );
  wp_list_comments($comments_args);
  ?>
    </div>
  <?php
  $comments_form_args = array (
    'fields' => array(
      'author' => '<label for="author" class="form-label">Author Name</label><input type="text" class="form-control mb-4" id="author" name="author" autocomplete="name" required value="'.$commenter['comment_author'].'">',
      'email' => '<label for="email" class="form-label">Email (Your email address will not be published.)</label><input type="email" class="form-control mb-4" id="email" name="email" autocomplete="email" required value="'.$commenter['comment_author_email'].'">',
      'url' => '<label for="url" class="form-label">Website</label><input type="url" class="form-control mb-4" id="url" name="url" autocomplete="url" value="'.$commenter['comment_author_url'].'">',
      'cookies' => '<input class="form-check-input mb-4 me-3" id="check" name="wp-comment-cookies-consent" type="checkbox" value="yes" checked="checked""><label class="form-check-label" for="check">Save my name, email, and website in this browser for the next time I comment.</label>'
    ),
    'comment_field' => '<label for="comment" class="form-label">Comment</label><textarea class="form-control mb-4" id="comment" rows="3" name="comment"></textarea>',
    'title_reply_before' => '<h3 class="fw-bold fs-3">',
    'title_reply' => 'Submit A New Comment',
    'title_reply_after' => '</h3>',
    'comment_notes_before' => '',
    'format' => 'html5',
    'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn rounded-pill" value="%4$s" />'
  );
  comment_form($comments_form_args);
}