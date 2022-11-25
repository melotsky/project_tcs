<?php
/**
 * Contact us page Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'contact-us-left-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-us-left';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<div id="contact__pagetemp" class="b2bflex__contact">
    <div class="b2bflex__contact_item">
        <div class="group b2bflex__contact_left">
            <h1><?php the_field('title_cul')?></h1>
            <div class="group b2bflex__contact_left_content">
                <?php the_field('content_cul')?>
                <p class="b2bflex__contact_footer">
                    <?php the_field('footer_text_cul')?>
                </p>
            </div>
        </div>
    </div>
    <div class="b2bflex__contact_item" style="background-color: <?php the_field('background_color_cul')?>">
        <div class="group b2bflex__contact_right">
            <?php echo do_shortcode( get_field('contact_form_shortcode_cul') )?>
        </div> 
    </div>
</div>