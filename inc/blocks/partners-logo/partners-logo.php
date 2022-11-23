<?php
/**
 * Partners Logo Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'partner-logo-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'partners__logo';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

if ( get_field('enable_partners_logo') == 1 ) : 

?>

    <div id="<?php _e($id)?>" class="<?php _e($className)?>">
        <div class="partnerslogo__title">
            <h2><?php the_field('title_pl') ?></h2>
        </div>
        <div class="partnerslogo__wrapper">
            <div class="partnerslogo__table">
                <div class="partnerslogo__cell">
                    <?php while(the_repeater_field('partners_logo')) { 
                    $image = get_sub_field('logo_pl');
                    // Image Icon
                    echo wp_get_attachment_image( 
                        $image['id'], 'full', 
                        false, 
                        array(
                            'title' => $image[title], 
                            'alt' => $image[alt], 
                            'class' => 'partnerslogo__logo'
                        )
                    );
                    } ?>
                </div>
            </div>
        </div>
    </div>

<?php endif;?>