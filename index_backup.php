<?php
/**
 * Template for Default Template
 */

get_header(); ?>

<?php
// get the ID of the blog summary page
$blog_id = get_option( 'page_for_posts' );

// get the ID of the featured post set on blog summary page using acf
$post_object = get_field('target_post', $blog_id);

// Gather information
$xpost = get_post($post_object);

// Get the ID of the target post
$featured_post_ID = $xpost->ID;


?>

<section id="bsp_header" class="group bsp_header">
    <div class="group bsp_header__inner">
        <div class="bsp_header__left">
            <div class="group bsp_header__left_content">

                <?php printf( __( '<div class="featured_article"><a href="%s">%s</a></div>', 'domain_laguage' ), get_permalink( $featured_post_ID ), 'featured article'); ?>
                <?php printf( __( '<header><h1>%s</h1></header>', 'domain_laguage' ), blogFeaturedTitle( get_the_title( $featured_post_ID ) ) ); ?>

                

                <?php $author_image = wp_get_attachment_image_src( get_field('author_image', $blog_id), 'author_thumb'); ?>
                <div class="bsp_author">
                    <figure>
                        <img src="<?php _e( $author_image[0] ); ?>" />
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
                <img src="<?php _e($bg_image[0]) ?>" />
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


        <div id="sec_bsp__posts" class="group sec_bsp__posts">
            
            <?php if ( have_posts() ) : ?>

                <div class="sec_bsp__inner">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                        // get the categories of current post
                        $categories = get_the_category();
                        $post_slug="";
                        foreach($categories as $category){
                            $post_slug .= $category->slug . " ";
                        }
                    ?>

                    <div id="post-<?php the_ID(); ?>" class="blog-item <?php _e($post_slug)?>">
                        <div class="sec_bsp__posts_img">
                            <figure>
                                <?php featured_img() ?>
                            </figure>
                        </div>
                        <p class="group latest__post_cat">
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $category){
                                $category->name; //category name
                                $cat_link = get_category_link($category->cat_ID);
                                //echo '<a href="'.$cat_link.'">'.$category->name.'</a>'; // category link
                                echo '<span>'.$category->name.'</span>';
                            }
                            ?>
                        </p>
                        <?php the_title("<h1>", "</h1>")?> 
                        <p class="the__excerpt"><?php echo get_the_excerpt()?></p>
                    </div>
			    <?php endwhile; ?>

                </div>

                <div class="pagination">;
                    <?php previous_posts_link( '« Newer posts' ); ?>
                    <?php next_posts_link( 'Older posts »', $query->max_num_pages ); ?>
                </div>

            <?php else : ?>

                <?php // do soemthing if no posts ?>

            <?php endif; ?>

        </div>



    </div>
</section>





<div id="primary" class="site-content">
  <div id="content" role="main">


	


            
            <?php 
            // PAGINATION
            // if (function_exists("pagination")) {
            //     pagination($additional_loop->max_num_pages);
            // } 
            ?>









  </div>
  <!-- #content --> 
</div>
<!-- #primary -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>