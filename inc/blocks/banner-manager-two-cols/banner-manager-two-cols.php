<?php
/**
 * Banner Manager Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'banner-manager_' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'game-providers-single';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}?>
<?php if( get_field('randomize_the_banners_bbx') == "1" ) : ?> 
<div class="banner_manager" id="<?php _e($id)?>">
        <?php 
            $target_id = get_field('select_banner_bbx1'); 
            $link = get_field('link_bo', $target_id );
            $link_url = $link['url'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <div class="banner_manager__img bm2cols">
            <div class="bm2cols__img">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="nofollow">
                <?php 
                    $image = get_field('smaller_banner_image', $target_id);
                    $title = get_the_title($target_id);
                    echo wp_get_attachment_image( 
                        $image['id'], 'full', 
                        false, 
                        array(
                            'title' => $title, 
                            'alt' => $title, 
                            'class' => 'img__banner_manager'
                        )
                    );
                ?>
                </a>
            </div>
            <?php 
                $target_id = get_field('select_banner_bbx2'); 
                $link = get_field('link_bo', $target_id );
                $link_url = $link['url'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>     
            <div class="bm2cols__img">
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" rel="nofollow">
                <?php 
                    $image = get_field('smaller_banner_image', $target_id);
                    $title = get_the_title($target_id);
                    echo wp_get_attachment_image( 
                        $image['id'], 'full', 
                        false, 
                        array(
                            'title' => $title, 
                            'alt' => $title, 
                            'class' => 'img__banner_manager'
                        )
                    );
                ?>
                </a>
            </div>        
        </div>
    
</div>
<?php endif; ?>