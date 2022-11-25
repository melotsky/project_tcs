<?php
/**
 * Content area for Careers Page Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
    <div class="entry-content group">
      <?php the_content(); ?>
      <?php if( get_field('schema_script') ) : ?>
          <?php the_field('schema_script')?>
      <?php endif; ?>    
    </div><!-- .entry-content -->
</article><!-- #post --> 