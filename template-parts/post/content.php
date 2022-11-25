<?php 
// get the categories of current post
$categories = get_the_category();
$the_permalink = get_permalink();
$post_slug="";
foreach($categories as $category)
{
    $post_slug .= $category->slug . " ";
}
$the_image = featured_img();
?>
<div class="blog-item <?php _e($post_slug)?>">
    <div class="blog-item_inner">
        <div class="sec_bsp__posts_img">
            <figure>
                <a href="<?php the_permalink() ?>">
                    <?php _e($the_image)?>
                </a>
            </figure>
        </div>
        <?php 
        $thepost_title = get_the_title();
        $post_excerpt = get_the_excerpt();
        ?>
        <p class="group latest__post_cat">
            <?php 
            $target = 1;
            $categories = get_the_category();
            $counter = 0;
            foreach($categories as $category)
            {
                $cat_name = $category->name;
                $cat_link = get_category_link($category->cat_ID);
                echo '<a href="#" onclick="return false;" style="cursor: context-menu;">'.$category->name.'</a>'; // category link
                $counter++;
                if ( $target === $counter){break;}
            }
            ?>
        </p>
        <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
        <?php $the_excerpt = ShortenText(get_the_excerpt()) ?>
        <?php printf( __('<p class="the__excerpt">%s</p>', 'b2b'), $the_excerpt )?>
        <?php printf( __('<p class="blog__linker"><a href="%s">%s</a></p>', 'b2b'), get_the_permalink(),"Read more" )?>
    </div>
</div>