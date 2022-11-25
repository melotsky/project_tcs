<?php
/**
 * Dummy Casino Toplist Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'dummy-casino-toplist-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'dummy-casino-toplist';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$bg_color = get_field('baackground_dct');
?>
<div id="dummy__casinotoplist" class="group" style="background: <?php _e($bg_color)?>">
    <div id="adummy__casinotoplist_wrapper" class="group site-main">
        <h2 style="color: <?php the_field('title_color_dct')?>"><?php the_field('title_dct')?></h2>
        <div class="group adummy__casinotoplist_imgs">
            <?php 
                while(the_repeater_field('banners_dct')) : 
                $img = wp_get_attachment_image_src(get_sub_field('image'), 'full');
            ?>
                <img src="<?php _e($img[0])?>" />  
            <?php endwhile; ?>
        </div>
    </div>
</div>