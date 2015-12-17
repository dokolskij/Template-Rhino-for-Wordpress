<?php

if( post_password_required() ){
  return;
}
?>
<div id="comments">
<?php if ( have_comments() ) : ?>
  <h3 id="comments-title"><?php printf( _n( 'Комментариев к записи "%2$s" - 1', 'Комментариев к записи "%2$s" - %1$s', get_comments_number(), 'rhino' ),
  number_format_i18n( get_comments_number() ),  get_the_title());
  ?></h3>
  <div class="hrline"></div>

  <ol class="commentlist">
  <?php
    wp_list_comments( array(
    'avatar_size' => 32
    ));
  ?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Если есть постраничная навигация комментариев ?>
<div class="navigation">
  <div class="nav-previous fl"><?php previous_comments_link('<span class="meta-nav">«</span>'. __( 'Old Comment', 'rhino' ) ); ?></div>
  <div class="nav-next fr"><?php next_comments_link( __( 'The following comments ', 'rhino' ).'<span class="meta-nav">»</span>' ); ?></div>
</div><!-- .navigation -->
<?php endif; // постраничная навигация комментариев ?>

<?php else : // Если нет комментариев
 
  /* 
   * Если комментариев нет и они закрыты
   */
  if ( ! comments_open() ) :
?>
  <p class="nocomments"><?php _e( 'Comments are closed.', 'rhino' ); ?></p>
<?php endif; // end ! comments_open() ?>
 
<?php endif; // end have_comments() ?>
 
<?php comment_form(); ?>
 
</div><!-- end #comments -->