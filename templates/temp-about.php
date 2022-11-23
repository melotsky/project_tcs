<?php
/**
 * Template Name: About us Page Template
 */

get_header(); ?>



<section id="sec-content" class="group abt_temp">
    <div id="outer" class="group">
        <div id="inner" class="group site-main">
            
            <div id="primary" class="site-content group">
                <div id="content" role="main" class="group">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'about' ); ?>
                        <?php //comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>
                </div><!--#CONTENT-->
            </div><!--#PRIMARY -->
            
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php 
$bg_image = wp_get_attachment_image_src(get_field('header_background_image'), 'full');
if( $bg_image[0] ) :
?>
<style>
.page-template-temp-about .header__about > .wrapper-inner > .wrapper-inner-blocks > .wp-block-columns > .wp-block-column:nth-child(2){
    background-image: url(<?php _e( $bg_image[0] ) ?>);
}
</style>
<?php endif; ?>
<?php get_footer(); ?>





