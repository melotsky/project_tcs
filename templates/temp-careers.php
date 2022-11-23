<?php
/**
 * Template Name: Careers Page Template
 *
 */

get_header(); ?>

<section id="rev_header__wrapper" class="group">
<div id="outer" class="group">
        <div id="inner" class="group site-main">
            
            <div id="primary" class="site-content group">
                <div id="content" role="main" class="group">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'careers' ); ?>
                        <?php //comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>
                </div><!--#CONTENT-->
            </div><!--#PRIMARY -->
            
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>