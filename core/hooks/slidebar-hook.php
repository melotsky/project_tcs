<?php 


if ( !defined('ABSPATH')) exit;

/*************************/
/* FOR SLIDEBAR AREA START */
/*************************/

function my_slidebar() {
    do_action('my_slidebar');
}

function sliderbarWrapperStart(){
    // Responsive Slidedrbar Start
    $sliderbarWrapperStart = '<!--RESPONSIVE SLIDE BAR WITH RESPONSIVE MENU SLICK NAV -->';
    $sliderbarWrapperStart .= '<div id="resp-sidebar" class="sb-slidebar sb-right group">';
    $sliderbarWrapperStart .= '<div class="group resp-sidebar-main-wrapper"><div id="wrapper_sb" class="group">';
    echo $sliderbarWrapperStart;
}

function sliderbarWrapperEnd(){
    // Responsive Slidedrbar End    
    $sliderbarWrapperEnd = '</div></div></div>'; 
    $sliderbarWrapperEnd .= '<!--RESPONSIVE SLIDE BAR WITH RESPONSIVE MENU SLICK NAV -->';
    $sliderbarWrapperEnd .= '<!-- HOLDER OF SITE -->';
    $sliderbarWrapperEnd .= '<div id="sb-site" class="group">';
    $sliderbarWrapperEnd .= '<div id="the-site-holder" class="group" style="position: relative;">';
    echo $sliderbarWrapperEnd;
  }

function theResponsiveLogo(){
    $image = wp_get_attachment_image_src(get_field('logo', option), 'full');
    $logoholder = '<a href="'.esc_url( home_url( '/' ) ).'">';
    $logoholder .= '<img id="slidebar_logo" src="'. $image[0] .'" alt="'. get_bloginfo('name') .'" title="' . get_bloginfo('name') . '" />';
    $logoholder .= '</a>';
    echo $logoholder;
}

function responsiveMenu(){
    echo '<div id="responsive-menu" class="group"></div>';
}

function other_contact_info(){ ?>
<div id="sb__others">
    <p class="sb__others_smi">

        <?php if( get_field('linked_in_url_sml', 'option') ) : ?>
            <a href="<?php the_field('linked_in_url_sml', 'option') ?>" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>                
            </a>
        <?php endif; ?>
        <?php if( get_field('twitter_url_sml', 'option') ) : ?>
            <a href="<?php the_field('twitter_url_sml', 'option') ?>" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        <?php endif; ?>
        <?php if( get_field('facebook_url_sml', 'option') ) : ?>
            <a href="<?php the_field('facebook_url_sml', 'option') ?>" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>                
            </a>
        <?php endif; ?>
        <?php if( get_field('pinterest_url_sml', 'option') ) : ?>
            <a href="<?php the_field('pinterest_url_sml', 'option') ?>" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span>                
            </a>
        <?php endif; ?>
        <?php if( get_field('instagram_url_sml', 'option') ) : ?>
            <a href="<?php the_field('instagram_url_sml', 'option') ?>" target="_blank">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span>                
            </a>
        <?php endif; ?>    
    </p>
</div>
<?php }

function respCopyRight(){
    $theUrl = get_site_url();
    $startWrapper = '<div id="respCptrFooter" class="group sbH_helper">';
    $startWrapper .= '<p>Copyright &copy; ' .  get_bloginfo('name') . ' '.date("Y").'.<br /> All rights reserved</p>';
    $startWrapper .= '</div>';
    echo $startWrapper;
}

function contact_information_slide_bar(){
    ob_start();
    dynamic_sidebar( 'cisb' );
    $cisb = ob_get_contents();
    $cisb_content  = '<div id="cisb" class="group">';
    $cisb_content .= $cisb . '</div>';
    ob_end_clean();
    echo $cisb_content;
}

add_action('my_slidebar', 'sliderbarWrapperStart', 1);
add_action('my_slidebar', 'theResponsiveLogo', 1 );
add_action('my_slidebar', 'responsiveMenu', 3);
add_action('my_slidebar', 'other_contact_info', 4);

add_action('my_slidebar', 'contact_information_slide_bar', 8);
add_action('my_slidebar', 'respCopyRight', 9);
add_action('my_slidebar', 'sliderbarWrapperEnd', 100);