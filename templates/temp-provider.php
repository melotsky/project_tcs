<?php
/**
 * Template Name: Game Provider Review Page Template
 *
 */

get_header(); 
$image = wp_get_attachment_image_src(get_field('image_header'), 'header_image');
?>

<section id="sec-default" class="">
    <div id="sd_outer_with_image" class="">
        <div id="sd_inner" class="group site-main">
            <div id="page_header_image">
                <header class="entry-content">
                    <?php the_title("<h1>","</h1>")?>
                    <!-- AUTHOR START -->
                    <?php if ( get_field('enable_author_box_on_header') ) : ?>
                        <div id="ab__helper" class="group">
                            <?php $author_image = wp_get_attachment_image_src(get_field('author_image'), 'author_thumb'); ?>
                            <div class="rev_header__author">
                                <figure>
                                    <img src="<?php _e($author_image[0])?>" alt="<?php the_field('author_name') ?>" title="<?php the_field('author_name') ?>" width="60" height="60"/>
                                </figure>
                                <div class="rev_header__author_info">
                                    <p>
                                        <span><?php the_field('author_name') ?></span>
                                        <span><?php the_field('author_position') ?></span>
                                        <span class="last__updated"><?PHP _e("last updated: ")?> <?php echo the_time('d M Y')?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- AUTHOR END -->
                </header>
                <div class="banner_image_right">
                    <img src="<?php _e($image[0])?>" />
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec-content" class="group review_temp_content__wrapper">
    <div id="outer" class="group">
        <div id="inner" class="group">
            <div id="review_temp_inner_wrapper" class="group site-main">
                <div id="internal_nav" class="group">
                <!-- NAV LEFT START -->
                <?php if( have_rows('labels_and_target_anchor') ): ?>
                    <div id="internal_nav__links" class="group">
                        <?php while(the_repeater_field('labels_and_target_anchor')) { ?>
                            <a href="#<?php the_sub_field('target') ?>">
                                <?php the_sub_field('label') ?>
                            </a>
                        <?php } ?>
                    </div>
                <?php endif; ?>
                <!-- NAV LEFT END -->
                </div>
                <div id="primary" class="site-content group">
                    <div id="content" role="main" class="group">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'review' ); ?>
                        <?php endwhile; // end of the loop. ?>
                    </div><!--#CONTENT-->
                </div><!--#PRIMARY -->
            </div><!-- #review_temp_inner_wrapper -->
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php get_footer(); ?>