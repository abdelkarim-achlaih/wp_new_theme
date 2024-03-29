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
  // comment_reply_link();
  ?>
    </div>
    <div class="text-center text-md-start">
  <?php
  $comments_form_args = array (
    'fields' => array(
      'author' => '<label for="author" class="form-label">Nom</label><input type="text" class="form-control mb-4" id="author" name="author" autocomplete="name" required value="'.$commenter['comment_author'].'">',
      'email' => '<label for="email" class="form-label">Email (Votre adresse électronique ne sera pas publiée.)</label><input type="email" class="form-control mb-4" id="email" name="email" autocomplete="email" required value="'.$commenter['comment_author_email'].'">',
      'url' => '<label for="url" class="form-label">Siteweb</label><input type="url" class="form-control mb-4" id="url" name="url" autocomplete="url" value="'.$commenter['comment_author_url'].'">',
      'cookies' => '<div class="text-start mb-4"><input class="form-check-input me-3" id="check" name="wp-comment-cookies-consent" type="checkbox" value="yes" checked="checked""><label class="form-check-label d-inline lh-sm" for="check">Enregistrer mon nom, mon adresse électronique et mon site web dans ce navigateur pour la prochaine fois que je ferai un commentaire.</label></div>'
    ),
    'comment_field' => '<label for="comment" class="form-label">Commentaire</label><textarea class="form-control mb-4" id="comment" rows="3" name="comment"></textarea>',
    'title_reply_before' => '<h3 class="fw-bold fs-3">',
    'title_reply' => 'Envoyer un nouveau commentaire',
    'title_reply_to' => 'Rejoignez la conversation',
    'title_reply_after' => '</h3>',
    'cancel_reply_before' => '<span class="discard">',
    'cancel_reply_link' => 'Rejeter le commentaire',
    'cancel_reply_after' => '</span>',
    'comment_notes_before' => '',
    'format' => 'html5',
    'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s btn rounded-pill" value="Poster un commentaire" />'
  );
  comment_form($comments_form_args);
  ?>
    </div>
  <?php
}