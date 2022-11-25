<?php
/**
 * Content area for Game Provider Review Page Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
    <div class="entry-content group">
          <?php the_content(); ?>
          <?php if( get_field('review_contact_form') ) : ?>
              <div id="cf__wrapper" class="group">
                  <?php the_field('review_contact_form') ?>
              </div>
          <?php endif; ?>
          <?php if( get_field('schema_script') ) : ?>
              <?php the_field('schema_script')?>
          <?php endif; ?>
    </div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post --> 