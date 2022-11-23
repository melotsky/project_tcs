<?php

/**
 * Casino Software Table
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>

<!-- Load values and assign defaults. -->
<?php if( have_rows('table_icon') ): ?>
    <div id="casino_brandslogo__wrapper">
    <?php while( have_rows('table_icon') ): the_row(); 
        $tooltip = get_sub_field('image_tooltip');
        $image = wp_get_attachment_image_src(get_sub_field('image'), 'table_image');
        ?>
        <div class="casino_brandslogo__item">
            <div class="casino_brandslogo__item_table">
                <div class="casino_brandslogo__item_tablecell tooltip">
                    <?php if(get_sub_field('target_link_xc')):?>
                        <a href="<?php the_sub_field('target_link_xc')?>">
                    <?php endif; ?>

                    <span><?php echo $tooltip; ?></span>
                    <img src="<?php echo $image[0]; ?>">

                    <?php if(get_sub_field('target_link_xc')):?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>