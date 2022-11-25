<?php
/**
 * Template For Single Blog Page
 *
 */

get_header(); ?>

<section id="rev_header__wrapper" class="group">
    <div id="rev_header__inner" class="rev_header__flex single_post__page">
        <!-- LEFT START -->
        <div class="rev_header__flex_item">
            <div class="group rev_header__left">
                <!-- NEXT START -->
                <div class="group rev_header__next">
                    <?php 
                    // get the next post link if existing or not
                    $prev_post = get_previous_post();
                    if (!empty( $prev_post )): 
                    ?>
                        <a href="<?php echo get_the_permalink( $prev_post->ID )  ?>"><?php _e("next story") ?></a>
                    <?php endif; ?>
                </div>
                <!-- NEXT END -->
                <!-- TITLE START -->
                <div class="group review_title single_post__title">
                    <header>
                        <?php the_title( '<h1 >', '</h1>' ); ?>
                    </header>
                </div>
                <!-- TITLE END -->
                <!-- AUTHOR START -->
                <?php $author_image = wp_get_attachment_image_src(get_field('author_image'), 'author_thumb'); ?>
                <div id="spab__helper">
                    <div class="rev_header__author">
                        <figure>
                            <img src="<?php _e($author_image[0])?>" alt="<?php the_field('author_name') ?>" />
                        </figure>
                        <div class="rev_header__author_info">
                            <p>
                                <span><?php the_field('author_name') ?></span>
                                <span><?php the_field('position') ?></span>
                                <span class="last__updated"><?PHP _e("last updated: ")?> <?php echo the_time('d M Y')?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- AUTHOR END -->
            </div>
        </div>
        <!-- LEFT END -->
        <?php $other_option_image = wp_get_attachment_image_src(get_field('background_image'), 'bg_single_temp'); ?>
        <?php if( $other_option_image[0] ) : ?>
            <div class="rev_header__flex_item option_image" style="background: url(<?php _e($other_option_image[0])?>)"></div>
        <?php else: ?>
            <div class="rev_header__flex_item no_option_image"></div>
        <?php endif; ?>
    </div>
</section>

<section id="sec-content" class="group review_temp_content__wrapper">
    <div id="outer" class="group">
        <div id="inner" class="group">
            <?php $full_width_class = !empty( get_field( 'enable_internal_navigation' ) ) ? "" : " fullwidth"; ?>
            <div id="review_temp_inner_wrapper" class="group site-main<?php _e( $full_width_class ) ?>">
                <?php if( get_field( 'enable_internal_navigation' ) ) : ?>
                    <div id="internal_nav" class="group">
                        <!-- NAV LEFT START -->
                        <?php if( have_rows('labels_and_target_anchor') ): ?>
                            <div id="internal_nav__links" class="group">
                                <?php while(the_repeater_field('labels_and_target_anchor')) 
                                { ?>
                                    <a href="#<?php the_sub_field('target') ?>">
                                        <?php the_sub_field('label') ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php endif; ?>
                        <!-- NAV LEFT END -->
                    </div>
                <?php endif; ?>
                <div id="primary" class="site-content group<?php _e( $full_width_class ) ?>">
                    <div id="content" role="main" class="group">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'post' ); ?>
                            <?php //comments_template( '', true ); ?>
                        <?php endwhile; // end of the loop. ?>
                    </div><!--#CONTENT-->
                </div><!--#PRIMARY -->
            </div><!-- #review_temp_inner_wrapper -->
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php get_footer(); ?>





