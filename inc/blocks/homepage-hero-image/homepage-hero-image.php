<?php

/**
 * Homepage Hero Image Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'homepage-hero-image-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'homepage-hero-image';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = wp_get_attachment_image_src(get_field('background_image_hrcont'), 'full');
$title_hrcont = get_field('title_hrcont');
$content_hrcont = get_field('content_hrcont');
$button_label_1_hrcont = get_field('button_label_1_hrcont');
$button_label_2_hrcont = get_field('button_label_2_hrcont');
$button_1_link_hrcont = get_field('button_1_link_hrcont');
$button_2_link_hrcont = get_field('button_2_link_hrcont');



$button_1_target = !empty( $button_1_link_hrcont['target'] ) ? $button_1_link_hrcont['target'] : "_self";
$button_2_target = !empty( $button_2_link_hrcont['target'] ) ? $button_2_link_hrcont['target'] : "_self";
?>
<div id="homepage__hero" class="group" style="background-image: url(<?php _e($image[0])?>) ">
    <div id="homepage__hero__img" class="group site-main">
        <div class="group homepage__hero__img_content1">
            <h1><?php _e($title_hrcont)?></h1>
            <div class="group homepage__hero__img_content">
                <?php _e($content_hrcont) ?>
                <div class="group homepage__hero__img_links">
                    <p>
                        <a href="<?php _e($button_1_link_hrcont['url'])?>" target="<?php _e($button_1_target)?>" class="homepage__hero__img_links_left"><?php _e($button_label_1_hrcont)?></a>
                    </p>
                </div>        
            </div>
        </div>

        <?php if( have_rows('green_bpx') ): ?>
        <div id="homepage__hero__greenbox" class="group">
            <?php 
            while( have_rows('green_bpx') ): the_row();
                $title_gb = get_sub_field('title_gb');
                $sub_title_gb = get_sub_field('sub_title_gb');
                $link_gb = get_sub_field('link_gb');
                $link_gb_target = !empty( $link_gb['target'] ) ? $link_gb['target'] : "_self";
            ?>
            <p>
                <a href="<?php _e($link_gb['url'])?>" target="<?php _e($link_gb_target)?>">
                    <span class="homepage__hero__greenbox_span1"><?php _e($title_gb)?></span>
                    <span class="homepage__hero__greenbox_span2"><?php _e($sub_title_gb)?></span>
                </a>
            </p>

            <?php endwhile; ?>
        </div>
        <?php endif?>
    </div>
</div>
