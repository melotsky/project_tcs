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


?>


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
