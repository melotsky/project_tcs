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
$id = 'latest-posts-masonry-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'latest-posts-masonry';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load values and assign defaults.
$blogID = get_option( 'page_for_posts' );
?>

<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6) ); ?>
<?php if ( $loop-> have_posts() ) : ?>
    <div id="latest__post" class="group" style="background: <?php the_field('background_color_lp') ?>">
        <div id="latest__post_wrapper" class="group site-main">
            <div id="latest__post_header" class="group">
                <h2 style="color: <?php the_field('title_color_lp')?>"><?php the_field('title_lp')?></h2>
                <p><a href="<?php echo get_permalink( $blogID )?>"><?php the_field('button_label_lp')?></a></p>
            </div>

            <div class="grid">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                //$id = get_the_ID();
                ?>
    
                <div class="latest__post_grid grid-item">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <div class="group latest__post_img">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post_thumb_masonry' ); ?>
                            <?php $thumb_id = get_post_thumbnail_id( $post->ID ); // GET THE TITLE TAG OF THE FEATURED IMAGE?>
                            <a href="<?php the_permalink()?>"><img class="iso__img" src="<?php echo $image[0]; ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>" /></a>
                        </div>
                        <p class="group latest__post_cat">
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $category){
                                $category->name; //category name
                                $cat_link = get_category_link($category->cat_ID);
                                echo '<a href="#" onclick="return false;" style="cursor: context-menu;">'.$category->name.'</a>'; // category link
                            }
                            ?>
                        </p>
                        <div class="group latest__post_content">
                            <?php printf( __( '<h3><a href="%s">%s</a></h3>', 'b2b' ), get_the_permalink(), get_the_title()); ?>
                            <?php $the_excerpt = ShortenText(get_the_excerpt()) ?>
                            <?php printf( __('<p>%s</p>', 'b2b'), $the_excerpt )?>
                            <?php printf( __('<p class="blog__linker"><a href="%s">%s</a></p>', 'b2b'), get_the_permalink(),"Read more" )?>
                        </div>
                        
                    <?php endif; ?>
                </div>
    
                <?php endwhile; ?>
            </div>

            <p id="latest__post_footer"><a href="<?php echo get_permalink( $blogID )?>"><?php the_field('button_label_lp')?></a></p>

        </div>
    </div>
<?php endif; ?>

<?php wp_reset_postdata(); // reset the query ?>