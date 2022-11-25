<?php
/**
 * Template Name: Blog Summary Template
 *
 */
get_header(); ?>

<?php
// get the ID of the blog summary page
//$blog_id = get_option( 'page_for_posts' );
$blog_id = "1158";

// get the ID of the featured post set on blog summary page using acf
$post_object = get_field('target_post', $blog_id);

// Gather information
$xpost = get_post($post_object);

// Get the ID of the target post
$featured_post_ID = $xpost->ID;

wp_reset_postdata();
wp_reset_query();
?>

<section id="bsp_header" class="group bsp_header">
    <div class="group bsp_header__inner">
        <div class="bsp_header__left">
            <a href="<?php echo site_url(); ?>/how-to-start-online-casino-business/" class="allBlock"></a>
                <div class="group bsp_header__left_content">
                    <?php printf( __( '<div class="featured_article"><a href="%s">%s</a></div>', 'domain_laguage' ), get_permalink( $featured_post_ID ), 'featured article'); ?>
                    <?php printf( __( '<header><h1>%s</h1></header>', 'domain_laguage' ), blogFeaturedTitle( get_the_title( $featured_post_ID ) ) ); ?>
                    <?php $author_image = wp_get_attachment_image_src( get_field('author_image', $blog_id), 'author_thumb'); ?>
                    <div class="bsp_author">
                        <figure>
                            <img src="<?php _e( $author_image[0] ); ?>" alt="<?php the_field('author_name', $blog_id) ?>" />
                        </figure>
                        <div class="bsp_author__author_info">
                            <p>
                                <span><?php the_field('author_name', $blog_id) ?></span> 
                                <span><?php the_field('position', $blog_id) ?></span>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="just_a__bg"></div>
        <?php $bg_image = wp_get_attachment_image_src(get_field('background_image', $blog_id), 'bg_img_blogpost'); ?>
        <div class="bsp_header__right" style="background-image: url(<?php _e($bg_image[0])?>)">
            <figure>
                <img src="<?php _e($bg_image[0]) ?>" alt="<?php echo get_bloginfo( 'name' );?>" />
            </figure>
        </div>
    </div>
</section>

<section id="sec_bsp" class="group sec_bsp">
    <div class="group site-main">
        <div class="group sec_bsp__options">
            <?php printf( __( '<header><h1>%s</h1></header>', 'domain_laguage' ), get_the_title( $blog_id ) ); ?>
            <?php nav_cat() ?>
        </div>
        <?php echo do_shortcode('[ref_ajax_display]')
        wp_reset_postdata();
        wp_reset_query();
        ?>
    </div>
</section>

<?php get_footer(); ?>