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
$id = 'icon-box-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'the_icon__box';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if ( get_field('enable_icon_boxes') == 1 ) : 

?>

    <div id="<?php _e($id)?>" class="<?php _e($className)?>">
        <div class="theiconbox__wrapper">
            <?php while(the_repeater_field('icon_boxes')) : 
                $image = get_sub_field('icon_image');
            ?>
                <div class="theiconbox__item">
                    <div class="theiconbox__content">
                        <?php
                            $iconbox_title = get_sub_field('title_ib');
                            // Image Icon
                            echo wp_get_attachment_image( 
                                $image['id'], 'full', 
                                false, 
                                array(
                                    'title' => $iconbox_title, 
                                    'alt' => $iconbox_title, 
                                    'class' => 'theiconbox__img'
                                )
                            );
                        ?>
                        <h3><?php _e($iconbox_title)?></h3>
                        <p><?php the_sub_field('sub_title_ib')?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

<?php endif;?>