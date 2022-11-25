<?php
/**
 * Template for 404
 */

get_header(); ?>

<section id="sec-default" class="">
    <div id="sd_outer" class="" style="display: none !important">
        <div id="sd_inner" class="group site-main">
            <header class="entry-content">
                <h1><?php _e("Sorry, Page not found...") ?></h1>
            </header>
        </div>
    </div>
</section>

<section id="sec-content" class="group def_temp" style="background-color: #ededed;">
    <div id="outer" class="group">
        <div id="inner" class="group site-main">
            <div id="primary" class="site-content group">
                <div id="content" role="main" class="group">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
                        <div class="entry-content group">
                            <h1 style="text-align: center"><?php _e("Sorry, Page not found...") ?></h1>
                            <div class="group wrapper__404">
                                <img src="<?php _e( get_stylesheet_directory_uri() );?>/assets/css/images/404-bg.png" class="bg__404" alt="<?php echo get_bloginfo( 'name' );?>" />
                                <p>
                                    <a href="<?php _e( get_bloginfo('home') ) ?>"><?php _e('To the main page', 'fx_lang')?></a>
                                </p>
                            </div>
                        </div><!-- .entry-content -->
                    </article>
                </div><!--#CONTENT-->
            </div><!--#PRIMARY -->
        </div><!--#INNER-->
    </div><!--#OUTER-->
</section>

<?php get_footer(); ?>