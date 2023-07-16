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
} else {

}