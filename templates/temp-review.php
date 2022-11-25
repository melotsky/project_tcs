<?php
/**
 * Template Name: Review Page Template
 *
 */

get_header(); ?>

<section id="rev_header__wrapper" class="group">
    <div id="rev_header__inner" class="rev_header__flex">
        <!-- LEFT START -->
        <div class="rev_header__flex_item">
            <div class="group rev_header__left">
                <?php 
                $check_link = get_field('next_review_page_link');
                if( get_field('next_review_page_link') ) :
                ?>
                <!-- NEXT START -->
                <div class="group rev_header__next">
                    <a href="<?php the_field('next_review_page_link')?>"><?php _e("next review") ?></a>
                </div>
                <!-- NEXT END -->
                <?php endif; ?> -->
                <!-- TITLE START -->
                <?php  $check_next_link = !empty( $check_link ) ? "" : " no_link"; ?>
                <div class="group review_title<?php _e( $check_next_link )?>">
                    <header>
                        <?php the_title( '<h1 >', '</h1>' ); ?>
                    </header>
                </div>
                <!-- TITLE END -->
                <!-- AUTHOR START -->
                <?php if ( get_field('enable_author_box_on_header') ) : ?>
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
                <?php endif; ?>
                <!-- AUTHOR END -->
            </div>
        </div>
        <!-- LEFT END -->
        <div class="rev_header__flex_item">
            <?php if(get_field('enable_top_widget')) {
                echo do_shortcode('[ft_yii_widget widget_class=OperatorSingleTopReview use_post_item="true"]');
            } ?>
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
                            <?php //comments_template( '', true ); ?>
                        <?php endwhile; // end of the loop. ?>
                    </div><!--#CONTENT-->
                </div><!--#PRIMARY -->
            </div><!-- #review_temp_inner_wrapper -->
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php get_footer(); ?>