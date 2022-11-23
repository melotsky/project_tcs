<?php

/**
 * Banner Image Mobile/Desktop
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'banner-image-' . $block['id'];
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

$target_link = get_field('target_link');
$link = $target_link['url'];
$link_target = $target_link['target'] ? $target_link['target'] : '_self';

$desktop_banner = wp_get_attachment_image_src(get_field('banner_image_desktop'), 'banner_desktop');
$mobile_banner = wp_get_attachment_image_src(get_field('banner_image_mobile'), 'banner_desktop');


$button_1_target = !empty( $button_1_link_hrcont['target'] ) ? $button_1_link_hrcont['target'] : "_self";
$button_2_target = !empty( $button_2_link_hrcont['target'] ) ? $button_2_link_hrcont['target'] : "_self";

if ( get_field('enable_banner_image_mobiledeskto') == 1 ) :
    $detect = new Mobile_Detect;
?>
<div class="group bi__wrapper" id="<?php _e($id) ?>">
    <div class="bi__holder">
    <a href="<?php echo esc_url( $link ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php if ( $detect->isMobile() ) { ?>
            <img src="<?php _e($mobile_banner[0])?>" />
        <?php }else{?>
            <img src="<?php _e($desktop_banner[0])?>" />
        <?php } ?>
    </a>
    </div>
</div>
<?php endif; ?>