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
$id = 'featured-platform-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-platform';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$platform_logo = wp_get_attachment_image_src(get_field('platform_logo_fp'), 'full');
$platform_bg = wp_get_attachment_image_src(get_field('background_image_fp'), 'full');
$platform_link = get_field('link_fp');
$platform_link_target = !empty( $platform_link['target'] ) ? $platform_link['target'] : "_self";
?>

<div id="featured__platform" class="group" style="background: <?php the_field('background_color') ?>">
    <div id="featured__platform_wrapper" class="group site-main">
        <h2 style="color: <?php the_field('title_color_fp')?>"><?php the_field('title_fp')?></h2>
        <a href="<?php _e($platform_link['url'])?>" target="<?php _e($platform_link_target)?>">
        <div id="featured__platform_box" class="group" style="background: url(<?php _e($platform_bg[0])?>) no-repeat;">
            <div id="featured__platform_logourl" class="group">
                <img src="<?php _e($platform_logo[0]) ?>" class="platform_logo" alt="<?php the_field('title_fp')?>" title="<?php the_field('title_fp')?>" />
                <div class="group platform_info">
                    <p>
                        <span><?php the_field('country_fp')?></span>
                        <span><?php the_field('link_label_fp')?></span>
                    </p>
                </div>
                <div class="group platform_content">
                    <?php the_field('content_fp')?>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>