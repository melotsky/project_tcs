<?php
/**
 * Contact us HP Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'contact-us-hp-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-us-hp';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load values and assign defaults.
$tel = get_field('phone_number_cuhp');
$tel_for_link = str_replace(' ', '', $tel);
$tel_for_link = str_replace('(', '', $tel_for_link);
$tel_for_link = str_replace(')', '', $tel_for_link);
$tel_for_link = str_replace('-', '', $tel_for_link);
?>
<div id="contactus__hp" class="group" style="background: <?php the_field('background_color_cuhp') ?>">
    <div id="contactus__hp_wrapper" class="group site-main">
        <h2 style="color: <?php the_field('title_color')?>"><?php the_field('title_cuhp')?></h2>
        <div class="group contactus__hp_left">
            <div class="group contactus__hp_tcontent">
                <?php the_field('content_cuhp') ?>
            </div>
            <div class="group contactus__hp_cinfo">
                <p class="contactus__hp_address">
                    <?php the_field('address_cuhp')?>
                </p>
                <p class="contactus__hp_telemail">
                    <span><a href="tel:<?php _e($tel_for_link)?>"><?php _e($tel) ?></a></span>
                    <span><a href="maitlo:<?php the_field('email_address_cuhp') ?>"><?php the_field('email_address_cuhp') ?></a></span>
                </p>
            </div>
        </div>
        <div class="group contactus__hp_right">
            <?php echo do_shortcode( get_field('contact_form_shortcode_cuhp') )?>
        </div>
    </div>
</div>
