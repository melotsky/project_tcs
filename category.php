<?php
/**
 * Template for Category View
 */

get_header(); 
wp_redirect( home_url(), '302' ); 
exit;
?>

<?php
// get the ID of the blog summary page
$blog_id = get_option( 'page_for_posts' );
//$blog_id = "1158";

// get the ID of the featured post set on blog summary page using acf
$post_object = get_field('target_post', $blog_id);

// Gather information
$xpost = get_post($post_object);

// Get the ID of the target post
$featured_post_ID = $xpost->ID;


?>
<?php
    wp_reset_postdata();
    wp_reset_query();
?>


<section id="bsp_header" class="group bsp_header">
    <div class="group bsp_header__inner">
        <div class="bsp_header__left">
            <div class="group bsp_header__left_content">

                <?php printf( __( '<div class="featured_article"><a href="%s">%s</a></div>', 'domain_laguage' ), get_permalink( $featured_post_ID ), 'featured article'); ?>
                <?php printf( __( '<header><h2>%s</h2><h2 style="display: none">%s</h2></header>', 'domain_laguage' ), blogFeaturedTitle( get_the_title( $featured_post_ID ) ), get_the_title( $featured_post_ID ) ); ?>

                

                <?php $author_image = wp_get_attachment_image_src( get_field('author_image', $featured_post_ID), 'author_thumb'); ?>
                <div class="bsp_author">
                    <figure>
                        <img src="<?php _e( $author_image[0] ); ?>" />
                    </figure>
                    <div class="bsp_author__author_info">
                        <p>
                            <span><?php the_field('author_name', $featured_post_ID) ?></span> 
                            <span><?php the_field('position', $featured_post_ID) ?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="just_a__bg"></div>

        <?php $bg_image = wp_get_attachment_image_src(get_field('background_image', $blog_id), 'bg_img_blogpost'); ?>
        <div class="bsp_header__right" style="background-image: url(<?php _e($bg_image[0])?>)">
            <figure>
                <img src="<?php _e($bg_image[0]) ?>" />
            </figure>
        </div>
    </div>
</section>


<section id="sec_bsp" class="group sec_bsp">
    <div class="group site-main">
        <div class="group sec_bsp__options">
            <?php printf( __( '<header class="cat__title"><h1>%s</h1></header>', 'domain_laguage' ), get_the_archive_title() ); ?>
            <?php //nav_cat() ?>
        </div>
            <?php //echo do_shortcode('[ref_ajax_display]')?>

        <div id="sec_bsp__posts" class="group sec_bsp__posts">
            
            <?php 
            //query_posts('posts_per_page: 6');
            if ( have_posts() ) : ?>

                <div class="sec_bsp__inner">

                <?php while ( have_posts() ) : the_post(); ?>

                <?php // get the categories of current post
                    $categories = get_the_category();
                    $the_permalink = get_permalink();
                    $post_slug="";
                    foreach($categories as $category){
                        $post_slug .= $category->slug . " ";
                    }
                    $the_image = featured_img();
                    ?>
                    <div class="blog-item <?php _e($post_slug)?>"><div class="blog-item_inner">

      
                    <div class="sec_bsp__posts_img"><figure>
                        <a href="<?php the_permalink() ?>">
                            <?php _e($the_image)?>
                        </a>
                    </figure></div>

                    <?php $thepost_title = get_the_title();
                            $post_excerpt = get_the_excerpt();
                            ?>
                    <p class="group latest__post_cat">
                    <?php 
                        $categories = get_the_category();
                        foreach($categories as $category){
                            $cat_name = $category->name;
                            $cat_link = get_category_link($category->cat_ID);
                            //echo "<span>".$cat_name."</span>";
                            echo '<a href="'.$cat_link.'">'.$category->name.'</a>'; // category link
                        }
                    ?>
                    </p>
          
                    <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
                    <p class="the__excerpt"><?php echo get_the_excerpt(); ?></p>
                </div></div>

			    <?php endwhile; ?>

                </div>

                <div class="pagination">
                    <?php previous_posts_link( '« Newer posts' ); ?>
                    <?php next_posts_link( 'Older posts »', $query->max_num_pages ); ?>

                    <?php if (function_exists("pagination")) {
                        //pagination($additional_loop->max_num_pages);
                    } ?>
                </div>

            <?php else : ?>

                <?php // do soemthing if no posts ?>

            <?php endif; ?>

        </div>

    </div>
</section>


<?php // get_sidebar(); ?>
<?php get_footer(); ?>