<?php
/**
 * About us 3 Column Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'about-us-hp-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-us-hp';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.

$bg_image1 = wp_get_attachment_image_src(get_field('background_image_1_as'), 'block_bg_abt_us_3_cols');
$bg_image2 = wp_get_attachment_image_src(get_field('background_image_2_as'), 'block_bg_abt_us_3_cols');
$bg_image3 = wp_get_attachment_image_src(get_field('background_image_3_as'), 'block_bg_abt_us_3_cols');

$icon_image1 = wp_get_attachment_image_src(get_field('icon_image_1_as'), 'full');
$titleText1 = get_post( get_field('icon_image_1_as') ); //_e($titleText1->post_title);
$altText1 = get_post_meta( get_field('icon_image_1_as'), '_wp_attachment_image_alt', true ); 

$icon_image2 = wp_get_attachment_image_src(get_field('icon_image_2_as'), 'full');
$titleText2 = get_post( get_field('icon_image_2_as') ); //_e($titleText1->post_title);
$altText2 = get_post_meta( get_field('icon_image_2_as'), '_wp_attachment_image_alt', true ); 

$icon_image3 = wp_get_attachment_image_src(get_field('icon_image_3_as'), 'full');
$titleText3 = get_post( get_field('icon_image_3_as') ); //_e($titleText1->post_title);
$altText3 = get_post_meta( get_field('icon_image_3_as'), '_wp_attachment_image_alt', true ); 

$content_1 = get_field('content_1_as');
$content_2 = get_field('content_2_as');
$content_3 = get_field('content_3_as');



// $button_1_target = !empty( $button_1_link_hrcont['target'] ) ? $button_1_link_hrcont['target'] : "_self";
// $button_2_target = !empty( $button_2_link_hrcont['target'] ) ? $button_2_link_hrcont['target'] : "_self";
?>
<div id="abt__us3cols" class="group">
    <div id="abt__us3cols_wrapper" class="group site-main">
        <h2><?php the_field('title_as')?></h2>
        <div class="b2bflex">

            <!-- FIRST BOX START -->
            <div class="abt__us3cols_fbox">
                <div class="abt__us3cols_bgimg" style="background: url(<?php _e($bg_image1[0])?>)"></div>
                <div class="group abt__us3cols_content">
                    <div class="group abt__us3cols_content_icoimg">
                        <img src="<?php _e($icon_image1[0])?>" alt="<?php _e($altText1) ?>" title="<?php _e($titleText1->post_title) ?>"/>
                    </div>
                    <div class="group abt__us3cols_content_txt">
                        <?php _e($content_1)?>
                    </div>
                </div>
            </div>
            <!-- FIRST BOX END -->

            <!-- SECOND BOX START -->
            <div class="abt__us3cols_fbox">
                <div class="abt__us3cols_bgimg" style="background: url(<?php _e($bg_image2[0])?>)"></div>
                <div class="group abt__us3cols_content">
                    <div class="group abt__us3cols_content_icoimg">
                        <img src="<?php _e($icon_image2[0])?>" alt="<?php _e($altText2) ?>" title="<?php _e($titleText2->post_title) ?>"/>
                    </div>
                    <div class="group abt__us3cols_content_txt">
                        <?php _e($content_2)?>
                    </div>
                </div>
            </div>
            <!-- SECOND BOX END -->

            <!-- THIRD BOX START -->
            <div class="abt__us3cols_fbox">
                <div class="abt__us3cols_bgimg" style="background: url(<?php _e($bg_image3[0])?>)"></div>
                <div class="group abt__us3cols_content">
                    <div class="group abt__us3cols_content_icoimg">
                        <img src="<?php _e($icon_image3[0])?>" alt="<?php _e($altText3) ?>" title="<?php _e($titleText3->post_title) ?>"/>
                    </div>
                    <div class="group abt__us3cols_content_txt">
                        <?php _e($content_3)?>
                    </div>
                </div>
            </div>
            <!-- THIRD BOX END -->

        </div>
    </div>
</div>