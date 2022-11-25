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
$id = 'popupvideo_' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'popupvideo_class';
if( !empty($block['className']) ) {
    $className .= ' ' . esc_html(strip_tags($block['className']));
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( get_field('enable_popup_video') == "1" ) :
$img = get_field('image_pv');
$link = get_field('youtube_url_pv');
?>
<div class="<?php echo $className ?>" id="<?php _e($id)?>">

<div class="group vp__wrapper">
    <a class="vp-a" href="<?php echo $link; ?>">
    <div class="vp_img">
        <?php 
            echo wp_get_attachment_image( 
                $img['id'], 'full', 
                false, 
                array(
                    'title' => $image[alt], 
                    'alt' => $image[alt], 
                    'class' => 'vp_imgtag'
                )
            );
        ?>
    </div>
    <div class="vthumb_btn">
        <div class="vthumb_btn_table">
            <div class="vthumb_btn_table_cell">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/css/images/play-btn.png" class="playbtn">
            </div>
        </div>
    </div>
    </a>
</div>

</div>
<?php endif; ?>