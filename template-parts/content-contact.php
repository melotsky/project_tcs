<?php
/**
 * Content area for Default Template
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>



  <div class="entry-content group">
    <div id="contact__pagetemp" class="b2bflex__contact">
        <div class="b2bflex__contact_item">
            <div class="group b2bflex__contact_left">

                <?php the_content() ?>

            </div>
        </div>
        <div class="b2bflex__contact_item" style="background-color: #4db549">
            <div class="group b2bflex__contact_right">
                <?php echo do_shortcode( get_field('contact_form_shortcode_cul') )?>
            </div> 
        
        </div>
    </div>


    <?php //wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>
<!-- #post -->
    <?php if( get_field('schema_script') ) : ?>
        <?php the_field('schema_script')?>
    <?php endif; ?>