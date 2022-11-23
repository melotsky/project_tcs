<?php
/**
 * Template for Default Template
 */

get_header(); ?>


<?php if (get_field('enable_header_image') ): ?>
<?php 
    $image = wp_get_attachment_image_src(get_field('image_header'), 'header_image');
?>

<section id="sec-default" class="xxx">
    <div id="sd_outer_with_image" class="">
        <div id="sd_inner" class="group site-main">
            <div id="page_header_image">
                <header class="entry-content">
                    <?php the_title("<h1>","</h1>")?>

                    <!-- AUTHOR START -->
                    <?php if ( get_field('enable_author_box_on_header') ) : ?>
                        <div id="ab__helper" class="group">
                            <?php $author_image = wp_get_attachment_image_src(get_field('author_image'), 'author_thumb'); ?>
                            <div class="rev_header__author">
                                <figure>
                                <img src="<?php _e($author_image[0])?>" alt="<?php the_field('author_name') ?>" title="<?php the_field('author_name') ?>" width="60" height="60"/>
                                </figure>
                                <div class="rev_header__author_info">
                                    <p>
                                    <span><?php the_field('author_name') ?></span>
                                    <span><?php the_field('author_position') ?></span>
                                    <span class="last__updated"><?PHP _e("last updated: ")?> <?php echo the_time('d M Y')?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- AUTHOR END -->
                    
                </header>
            
                <div class="banner_image_right">
                    <img src="<?php _e($image[0])?>" />
                </div>
            </div>
        </div>
    </div>
</section>





<?php else: ?>



<section id="sec-default" class="">
    <div id="sd_outer" class="">
        <div id="sd_inner" class="group site-main">
            <header class="entry-content">
                <?php the_title("<h1>","</h1>")?>
            </header>
            <?php if( get_field('enable_introduction') ) : ?>
                <div id="default_intro" class="group entry-content">
                    <?php the_field( 'content_intro' )?>

                    <?php 
                        $intro_image = wp_get_attachment_image_src(get_field('image_intro'), 'intro_img');
                        if ( $intro_image[0] ) :
                            $the_title = get_the_title();
                            $intro_image_var  = "<div class=\"group intro_image\">";
                            $intro_image_var .= "<img src=\"$intro_image[0]\" alt=\"{$the_title}\" title=\"{$the_title}\" />";
                            $intro_image_var .= "</div>";
                            echo $intro_image_var;
                        endif;
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php endif; ?>

<section id="sec-content" class="group def_temp">
    <div id="outer" class="group">
        <div id="inner" class="group site-main">
            
            <div id="primary" class="site-content group">
                <div id="content" role="main" class="group">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'page' ); ?>
                        <?php //comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>
                </div><!--#CONTENT-->
            </div><!--#PRIMARY -->
            
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>