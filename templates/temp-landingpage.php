<?php
/**
 * Template Name: Landing Page Template
 */

get_header(); ?>



<?php 
    // $image = wp_get_attachment_image_src(get_field('image_header'), 'header_image');
    $image = get_field('image_header');
?>

<section id="sec-default" class="lpt__entryheader">
    <div id="sd_outer_with_image" class="">
        <div id="sd_inner" class="group site-main">
            <div id="page_header_image" class="group">
                <header class="entry-content">
                    <h1><?php the_field('title_lpt') ?></h1>
                    <div class="group lpt_entryheader__content">
                        <?php the_field('content_lpt')?>
                    </div>
                </header>
            
                <div class="banner_image_right">
                    <?php 
                    echo wp_get_attachment_image( $image['id'] , 'full' );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


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