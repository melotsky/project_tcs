<?php
/**
 * Template Name: Home Template
 *
 */

get_header(); ?>
<section id="sec-content" class="group">
    <div id="outer" class="group">
        <div id="inner" class="group">
            <div id="primary" class="site-content group">
                <div id="content" role="main" class="group">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'template-parts/content', 'home' ); ?>
                    <?php endwhile; // end of the loop. ?>
                </div><!--#CONTENT-->
            </div><!--#PRIMARY -->
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php get_footer(); ?>





