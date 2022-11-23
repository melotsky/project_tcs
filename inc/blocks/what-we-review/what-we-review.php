<?php
/**
 * What do we review Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'what-we-review-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'what-we-review';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load values and assign defaults.

?>

<div id="whatdowe__review" class="group" style="background: <?php the_field('background_color_wr') ?>">
    <div id="whatdowe__review_wrapper" class="group site-main">
        <h2 style="color: <?php the_field('title_color_wr')?>"><?php the_field('title_wr')?></h2>
        <div class="group whatdowe__review_info">
            <?php the_field('content_wr') ?>
        </div>
    </div>
    <?php if( have_rows('other_information_rep') ) : ?>
        <div id="whatdowe__other_wrapper" class="group site-1244px">
            <div class="b2bflex_2">
                <?php while(the_repeater_field('other_information_rep')) : ?>
                    <div class="wdw__other">
                        <div class="group wdw__other_content">
                            <?php the_sub_field('content_rep')?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    <?php endif; ?>

    <?php 
            if( get_field('short_text_cta') ) :
            $xtra_link = get_field('link_cta');
            $xtra_link_target = !empty( $xtra_link['target'] ) ? $xtra_link['target'] : "_self";
            ?>
                <div id="whatdowe__other_xtra" class="group site-main">
                    <h3><?php the_field('short_text_cta') ?></h3>
                    <p>
                        <a href="<?php echo $xtra_link['url'] ?>" target="<?php _e($xtra_link_target)?>"><?php the_field('button_label_cta')?></a>
                    </p>
                </div>
    <?php endif; ?>


</div>