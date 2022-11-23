<?php
/**
 * Featured Platform Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'top-review-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'top-review';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load values and assign defaults.
$tr_logo_1 = wp_get_attachment_image_src(get_field('logo_1'), 'top_review_logo');
$tr_logo_2 = wp_get_attachment_image_src(get_field('logo_2'), 'top_review_logo');
$tr_logo_3 = wp_get_attachment_image_src(get_field('logo_3'), 'top_review_logo');

$tr_link_1 = get_field('link_tr_1');
$tr_link_2 = get_field('link_tr_2');
$tr_link_3 = get_field('link_tr_3');

$tr_link_1_target = !empty( $tr_link_1['target'] ) ? $tr_link_1['target'] : "_self";
$tr_link_2_target = !empty( $tr_link_1['target'] ) ? $tr_link_1['target'] : "_self";
$tr_link_3_target = !empty( $tr_link_1['target'] ) ? $tr_link_1['target'] : "_self";
?>
<div id="top__review" class="group" style="background: <?php the_field('background_color_tr') ?>">
    <div id="top__review_wrapper" class="group site-main">
        <h2 style="color: <?php the_field('title_color_tr')?>"><?php the_field('title_tr')?></h2>
        <div class="b2bflex">
            
            <!-- FIRST BOX START -->
            <div class="top__review_cols">
                <p class="date_year"><?php the_field('date_and_year_1')?></p>
                <div class="group top__review_content">
                    <?php the_field('content_tr1')?>
                </div>
                <div class="group top__review_links">
                    <a href="<?php _e($tr_link_1['url'])?>" target="<?php _e($tr_link_1_target)?>">
                        <img src="<?php _e($tr_logo_1[0])?>" alt="<?php _e($tr_link_1['title'])?>" title="<?php _e($tr_link_1['title'])?>" />
                    </a>
                    <p>
                        <span><?php the_field('country_ts_1') ?></span>
                        <span>
                            <a href="<?php _e($tr_link_1['url'])?>" target="<?php _e($tr_link_1_target)?>">
                                <?php _e($tr_link_1['title'])?>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
            <!-- FIRST BOX END -->

            <!-- SECOND BOX START -->
            <div class="top__review_cols">
                <p class="date_year"><?php the_field('date_and_year_2')?></p>
                <div class="group top__review_content">
                    <?php the_field('content_tr2')?>
                </div>
                <div class="group top__review_links">
                    <a href="<?php _e($tr_link_2['url'])?>" target="<?php _e($tr_link_2_target)?>">
                        <img src="<?php _e($tr_logo_2[0])?>" alt="<?php _e($tr_link_2['title'])?>" title="<?php _e($tr_link_2['title'])?>" />
                    </a>
                    <p>
                        <span><?php the_field('country_ts_2') ?></span>
                        <span>
                            <a href="<?php _e($tr_link_2['url'])?>" target="<?php _e($tr_link_2_target)?>">
                                <?php _e($tr_link_2['title'])?>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
            <!-- SECOND BOX END -->

            <!-- THIRD BOX START -->
            <div class="top__review_cols">
                <p class="date_year"><?php the_field('date_and_year_3')?></p>
                <div class="group top__review_content">
                    <?php the_field('content_tr3')?>
                </div>
                <div class="group top__review_links">
                    <a href="<?php _e($tr_link_3['url'])?>" target="<?php _e($tr_link_3_target)?>">
                        <img src="<?php _e($tr_logo_3[0])?>" alt="<?php _e($tr_link_3['title'])?>" title="<?php _e($tr_link_3['title'])?>" />
                    </a>
                    <p>
                        <span><?php the_field('country_ts_3') ?></span>
                        <span>
                            <a href="<?php _e($tr_link_3['url'])?>" target="<?php _e($tr_link_3_target)?>">
                                <?php _e($tr_link_3['title'])?>
                            </a>
                        </span>
                    </p>
                </div>
            </div>
            <!-- THIRD BOX END -->


        </div>
    </div>
</div>