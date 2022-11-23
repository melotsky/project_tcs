<?php
/**
 * Payment Banner Manager Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'payment-child-pages_' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'payment-child-pages';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}?>
<?php if( get_field('enable_payment_child_pages') == "1" ) : ?> 
<div class="solutions-child-pages_wrapper" id="<?php _e($id)?>">
    <?php wp_reset_postdata(); // reset the query ?>
    <?php $loop = new WP_Query( array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => 6683, 'orderby' => 'date', 'order' => 'ASC'  ) ); ?>
    <?php if ( $loop->have_posts() ) : ?>
        <div class="wp-block-group review__sol">
            <div class="wp-block-group__inner-container">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                    $theID = get_the_ID(); 
                    $image = get_field('pay_summary_image_ssp', $theID);
                    // $icon_image = get_field('icon_image_ssp', $theID);
                    $title = get_field('pay_title_ssp',  $theID)
                ?>

                    <div class="wp-block-group review__sol__item">
                        <div class="wp-block-group__inner-container">
                            <figure class="wp-block-image size-large">
                            
                                <a href="<?php the_permalink()?>">
                                    <?php
                                    echo wp_get_attachment_image( 
                                        $image['id'], 'full', 
                                        false, 
                                            array(
                                                'title' => $title, 
                                                'alt' => $title, 
                                                'class' => 'solutions__fimg'
                                            )
                                        );
                                    ?>                                    
                                </a>
                            </figure>
<!-- 
                            <figure class="wp-block-image size-large">
                                <?php
                               // echo wp_get_attachment_image( 
                                 //   $icon_image['id'], 'full', 
                                 //   false, 
                                   //     array(
                                       //     'title' => $title, 
                                      //      'alt' => $title, 
                                         //   'class' => 'solutions__fimg'
                                      //  )
                                  //  );
                                ?>
                            </figure> -->

                            <h3><a href="<?php the_permalink()?>"><?php the_field('pay_title_ssp',  $theID) ?></a></h3>

                            <p><?php the_field('pay_description_ssp',  $theID) ?></p>

                            <p><a href="<?php the_permalink()?>">Read more</a></p>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>