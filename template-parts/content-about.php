<?php
/**
 * Content area for Default Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
    <div class="entry-content group">
      <?php the_content(); ?>
    </div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>

<!-- #post -->
<?php if( get_field('schema_script') ) : ?>
    <?php the_field('schema_script')?>
<?php endif; ?>