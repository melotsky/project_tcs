<?php 
if ( !defined('ABSPATH')) exit;

function theFooterHook(){
    do_action('theFooterHook');
}

function footerWrapperStart(){
    echo '<section id="secFooter" class="group">';
    echo '<div id="secFooterHelper" class="group">';
    echo '<footer id="masterFooter" class="group site-main">';
}

function footerWrapperEnd(){
    $theUrl = get_site_url(); ?>
    </footer></div> 
    <div id="lastFooterWrapper" class="group">
        
    
        <div id="address_wrapper" class="site-main">
            <div class="address_content">
                <h2><?php the_field('address_title_1', 'option'); ?></h2>
                <p><?php the_field('main_address_1', 'option'); ?></p>
            </div>
            <div class="address_content">
                <h2><?php the_field('address_title_2', 'option'); ?></h2>
                <p><?php the_field('main_address_2', 'option'); ?></p>
            </div>
        </div>
        <div id="lastFooter" class="group site-main">
        <div id="lf__left" class="group">
            <?php
                $footerLogo = get_field('footer_logo', 'option'); 
            ?>
            
            <?php
                echo wp_get_attachment_image( 
                    $footerLogo['id'], 'full', 
                    false, 
                    array(
                        'title' => get_bloginfo('name'), 
                        'alt' => get_bloginfo('name'), 
                        'class' => 'the__footerlogo'
                    )
                );
            ?>            

            <div class="lf__left_content group">
                <p class="smlinkers">
                    <?php if( get_field('linked_in_url_sml', 'option') ) : ?>
                        <a href="<?php the_field('linked_in_url_sml', 'option') ?>" target="_blank">
                            <span></span>
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('twitter_url_sml', 'option') ) : ?>
                        <a href="<?php the_field('twitter_url_sml', 'option') ?>" target="_blank">
                            <span></span>
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('facebook_url_sml', 'option') ) : ?>
                        <a href="<?php the_field('facebook_url_sml', 'option') ?>" target="_blank">
                            <span></span>
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('pinterest_url_sml', 'option') ) : ?>
                        <a href="<?php the_field('pinterest_url_sml', 'option') ?>" target="_blank">
                            <span></span>
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('instagram_url_sml', 'option') ) : ?>
                        <a href="<?php the_field('instagram_url_sml', 'option') ?>" target="_blank">
                            <span></span>
                        </a>
                    <?php endif; ?>
                </p>
                <p class="the_cpyrt">Copyright &copy; <?php echo date("Y") ?> <?php echo get_bloginfo('name')?>. <?php echo date("Y") ?>. All rights reserved.</p>
                <?php 
                if( get_field('enable_18+_option', 'option') ): 
                    $image18 = get_field('18_image_logo', 'option');
                ?>
                    <p class="e18plus">
                        <?php
                            echo wp_get_attachment_image( 
                                $image18['id'], 'full', 
                                false, 
                                array(
                                    'class' => 'the18__img'
                                )
                            );
                        ?>

                        <span><?php the_field('short_text_18', 'option') ?></span>
                    </p>
                <?php endif; ?>
            </div>
        </div>


        <div id="lf__right" class="group">
            <div class="lf__right_img">
            <?php $counter=1; while(the_repeater_field('partners_logo_rep', 'option')) : ?>
                <div class="lf__right_img_itm">
                    <?php 
                    $link = get_sub_field('link_rep', 'option');
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="lf__right_img_itm__tbl">
                    <div class="lf__right_img_itm__tblcell">
                    <a href="<?php echo esc_url( $link['url'] )?>" target="<?php _e($link_target)?>">
                    <?php $partners_logo = get_sub_field('logo_rep', 'option'); ?>
                    <?php
                    echo wp_get_attachment_image( 
                        $partners_logo['id'], 'full', 
                        false, 
                        array(
                            'title' => $image[alt], 
                            'alt' => $image[alt], 
                            'class' => 'the__partnerslogo'
                        )
                    );?>                       
                    </a>
                    </div>
                    </div>    
                </div>
            <?php $counter++; endwhile; ?>
            </div>

            <p class="the_cpyrt" style="display: none">Copyright &copy; <?php echo date("Y") ?> <?php echo get_bloginfo('name')?>. <?php echo date("Y") ?>. All rights reserved.</p>
        </div>

    </div></div>
    </section>
    <!-- div id="backtotop" class="group" style="display: none"> <span></span> </div -->
    </div><!-- #the-site-holder END -->
    </div> <!-- #sb-site END -->

<?php }

function footer_navs(){ ?>
    <div id="footer_nav" class="group footer_nav__wrapper">

        <!-- NAV 1 START -->
        <div id="footer_nav__one" class="group footer_nav__helper">
            <h3><?php the_field('solutions_title', 'option')?></h3>
            <div class="group footer_nav__one__nav">
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__one group', 
                            'container_id' => 'id_footer_nav__one', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__one', 
                            'theme_location' => 'footer-position-solution'
                        ) 
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
            </div>
        </div>
        <!-- NAV 1 END -->

        <!-- NAV 2 START -->
        <div id="footer_nav__two" class="group footer_nav__helper">
            <h3><?php the_field('game_providers_title', 'option')?></h3>
            <div class="footer_nav__felxi">
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__two', 
                            'container_id' => 'id_footer_nav__two_1', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__two', 
                            'theme_location' => 'footer-position-gameproviders1'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__two', 
                            'container_id' => 'id_footer_nav__two_2', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__two', 
                            'theme_location' => 'footer-position-gameproviders2'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
               <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__two', 
                            'container_id' => 'id_footer_nav__two_3', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__two', 
                            'theme_location' => 'footer-position-gameproviders3'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
            </div>
        </div>
        <!-- NAV 2 END -->

        <div class="clearthis__area"></div>

        <!-- NAV 3 START -->
        <div id="footer_nav__three" class="group footer_nav__helper">
            <h3><?php the_field('about_us_title', 'option')?></h3>
            <div class="footer_nav__felxi">
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__three', 
                            'container_id' => 'id_footer_nav__three_1', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__three', 
                            'theme_location' => 'footer-position-aboutus1'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__three', 
                            'container_id' => 'id_footer_nav__three_1', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__three', 
                            'theme_location' => 'footer-position-aboutus2'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
            </div>
        </div>
        <!-- NAV 3 END -->


        <!-- NAV 4 START -->
        <div id="footer_nav__four" class="group footer_nav__helper">
            <h3><?php the_field('legal_title', 'option')?></h3>
            <div class="footer_nav__felxi">
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__four', 
                            'container_id' => 'id_footer_nav__four_1', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__four', 
                            'theme_location' => 'footer-position-legal1'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
                <?php 
                    ob_start();
                    wp_nav_menu( 
                        array(
                            'container' => 'div', 
                            'container_class' => 'footer_nav__four', 
                            'container_id' => 'id_footer_nav__four_2', 
                            'menu_class' => 'footer_nav_class', 
                            'menu_id' => 'idx_footer_nav__four', 
                            'theme_location' => 'footer-position-legal2'
                        )
                    );
                    $nav = ob_get_contents();
                    ob_end_clean();
                    echo $nav;
                ?>
            </div>
        </div>
        <!-- NAV 4 END -->        

    </div>
<?php }

function footerLogo(){
    
    $footerLogo = wp_get_attachment_image_src(get_field('footer_logo', 'option'), 'full'); 
    $startWrapper = '<div id="cptrFooter" class="group">';
    $startWrapper .= '<a href="'. home_url( '/' ) .'">';
    $startWrapper .= '<img id="footerLogo" src="'. $footerLogo[0] .'" alt="'. get_bloginfo('name') .'" title="'. get_bloginfo('name') .'" /></a>';
    if ( get_field('linkin_url', 'option') || get_field('twitter_url', 'option') || get_field('email_address_option', 'option') ) {
        $link_url = get_field('linkin_url', 'option');
        $tw_url = get_field('twitter_url', 'option');
        $email_add = get_field('email_address_option', 'option');
        $image_icon = wp_get_attachment_image_src(get_field('image_icon', 'option'), 'sigma_size'); 
        $image_url = get_field('image_url', 'option');

        $startWrapper .= '<p>';
        
            if ( get_field('linkin_url', 'option') || get_field('twitter_url', 'option')  ) {

                $startWrapper .= '<span class="socialmedia__links">';

                if( get_field('linkin_url', 'option') ){
                    $startWrapper .= '<a href="'.$link_url.'" target="_blank" class="socialmedia__link">';
                    $startWrapper .= '</a>';
                }
                if( get_field('twitter_url', 'option') ){
                    $startWrapper .= '<a href="'.$tw_url.'" target="_blank" class="socialmedia__tw">';
                    $startWrapper .= '</a>';
                }

                $startWrapper .= '</span>';
            }

            if ( get_field('email_address_option', 'option') ) {
                $startWrapper .= '<span class="socialmedia__email"><a href="mailto:'. $email_add .'">'. $email_add . '</a>';
                $startWrapper .= '</span>';
            }

            if ( get_field('image_icon', 'option') ) {
                $startWrapper .= '<div class="footer_icon"><a href="'. $image_url .'" target="_blank" rel="nofollow"><img src="'.$image_icon[0].'"></a>';
                $startWrapper .= '</div>';
            }

        $startWrapper .= ' </p>';
    }
    $startWrapper .= ' </div>';
    echo $startWrapper;
    //getDomain($theUrl)
}

function rightAreaStartWrap() {
    $rightAreaStartWrap = '<div id="rightFooter" class="group">';
    echo $rightAreaStartWrap;
}

function rightAreaEndWrap() {
    $rightAreaEndWrap = '</div>';
    echo $rightAreaEndWrap;
}

function mainRightFooter(){ 
    ob_start();
    dynamic_sidebar( 'footermenu1' );
    $theMenu = ob_get_contents();
    $mainRightFooter = '<div id="footer__menu1" class="group footermenu__class">';
    $mainRightFooter .= $theMenu . '</div>';
    ob_end_clean();
    echo $mainRightFooter;

    ob_start();
    dynamic_sidebar( 'footermenu2' );
    $theMenu = ob_get_contents();
    $mainRightFooter = '<div id="footer__menu2" class="group footermenu__class">';
    $mainRightFooter .= $theMenu . '</div>';
    ob_end_clean();
    echo $mainRightFooter;

    ob_start();
    dynamic_sidebar( 'footermenu3' );
    $theMenu = ob_get_contents();
    $mainRightFooter = '<div id="footer__menu3" class="group footermenu__class">';
    $mainRightFooter .= $theMenu . '</div>';
    ob_end_clean();
    echo $mainRightFooter;

    if ( is_active_sidebar( 'footermenu4' ) ) :
        //ob_start();
        //dynamic_sidebar( 'footermenu4' );
        //$theMenu = ob_get_contents();
        //$mainRightFooter = '<div id="footer__menu4" class="group footermenu__class">';
        //$mainRightFooter .= $theMenu . '</div>';
        //ob_end_clean();
        //echo $mainRightFooter;
    endif;


    $GameCare = wp_get_attachment_image_src(get_field('gamcare', 'option'), 'gamcare_size'); 
    $BeGamble = wp_get_attachment_image_src(get_field('be_gambale_aware', 'option'), 'be_gambale_aware_size');
    $GamStop = wp_get_attachment_image_src(get_field('gam_stop', 'option'), 'gam_stop_size'); 
    $plus = wp_get_attachment_image_src(get_field('18_plus', 'option'), 'plus_size'); 
    $Sigma = wp_get_attachment_image_src(get_field('image_icon', 'option'), 'sigma_size'); 

    $GameCare_url = get_field('gamcare_url', 'option');
    $BeGamble_url = get_field('be_gambale_aware_url', 'option');
    $GamStop_url = get_field('gam_stop_url', 'option');
    $Sigma_url = get_field('image_url', 'option');

    $output='<div id="footer_logos"><div class="footer_logo_wrapper"><a href="'.$GameCare_url.'" class="gamcare" target="_blank" rel="nofollow"><img src="'.$GameCare[0].'" alt="Gam Care"></a><a href="'.$BeGamble_url.'" class="begamble" target="_blank" rel="nofollow"><img src="'.$BeGamble[0].'" alt="Be Gamble Aware"></a><a href="'.$GamStop_url.'" class="gamstop" target="_blank" rel="nofollow"><img src="'.$GamStop[0].'" alt="Gam Stop"></a>  <img src="'.$plus[0].'" alt="18 plus" class="plus"> <a href="'.$Sigma_url.'" class="sigma" target="_blank" rel="nofollow"><img src="'.$Sigma[0].'" alt="sigma"></a> </div></div>';
    echo $output;

}

function popup_form() {
    global $post;
    if ( get_field('enable_popup_form', $post->ID) ) :
        $rf_title = get_field( 'title_of_the_form', $post->ID );
        $form_shortcode = get_field( 'form_shortcode', $post->ID );
        echo "<div id=\"regulator-form\" class=\"popup-form mfp-hide\">";
        echo "<div class=\"group rf_inner_wrapper\">";
        echo "<h3 class=\"rf_title\">{$rf_title}</h3>";
        echo "<div id=\"the_cf7_form\" class=\"group tcf7\">";
        echo do_shortcode( $form_shortcode );
        echo "</div>";
        echo "</div></div>";
    endif; 

}

function the_popup_box(){
    global $post;
    $box1 = get_field('content_b1', $post->ID );
    $box2 = get_field('content_b2', $post->ID );
    $box3 = get_field('content_b3y', $post->ID );
    if ( get_field('box_1', $post->ID) ) :
        echo "<div id=\"popupbox-1\" class=\"popup-form mfp-hide\">";
        echo "<div class=\"group entry-content entry-helper\">";
        echo $box1;
        echo "<div class=\"pop-linker\"><a href=\"#popupbox-2\" class=\"popup-form-toggle\">Næste</a></div>";
        echo "</div></div>";
        echo "<div id=\"popupbox-2\" class=\"popup-form mfp-hide\">";
        echo "<div class=\"group entry-content entry-helper\">";
        echo $box2;
        echo "<div class=\"pop-linker\"><a href=\"#popupbox-3\" class=\"popup-form-toggle\">Næste</a></div>";
        echo "</div></div>";
        echo "<div id=\"popupbox-3\" class=\"popup-form mfp-hide\">";
        echo "<div class=\"group entry-content entry-helper\">";
        echo $box3;
        echo "<div class=\"pop-linker\"><a href=\"#popupbox-1\" class=\"popup-form-toggle\">Næste</a></div>";
        echo "</div></div>";
    endif;
}


function blog_single_form(){
    $blog_id = get_option('page_for_posts');
    if ( is_home() or is_single() ) : ?>
        <?php if( get_field('enable_form_on_the_footer_of_blog_and_single_page', $blog_id) ) : 
            if( is_single() ){$class=" single_only";}
        ?>
        <section id="fb__footer" class="group<?php _e($class)?>">
            <div id="fb__inner" class="group site-main">
                <div id="content">
                <div class="group entry-content">
                    <div id="fb__left" class="group">
                        <?php the_field('contents_for_bottom', $blog_id) ?>
                    </div>
                    <div id="fb__right" class="group">
                        <?php $image = wp_get_attachment_image_src(get_field('image_cfb', $blog_id), 'blog_img_form'); ?>
                        <?php if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false || strpos( $_SERVER['HTTP_USER_AGENT'], ' Chrome/' ) !== false ) : ?>
                            <img src="<?php echo $image[0]; ?>.webp" alt="<?php echo get_bloginfo( 'title') ?>" title="<?php echo get_bloginfo( 'title') ?>" />
                        <?php else :  ?>
                            <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo( 'title') ?>" title="<?php echo get_bloginfo( 'title') ?>" />
                        <?php endif; ?>
                    </div>
                </div>

                    
                </div>
            </div>
        </section>
        <?php endif; ?>
    <?php endif;
}


function the_popupform(){
    if( get_field('enable_popup_form_header', 'option') ) : ?>
        <div id="target-form" class="popup-form mfp-hide">
            <div id="popupform" class="group entry-content">
                <h2><?php the_field('form_title_pff','option') ?></h2>
                <div class="group popupform__wrapper">
                    <div class="popupform__left">
                        <div class="popupform__txt">
                            <?php the_field('short_text_info_pff','option') ?>
                        </div>
                        <div id="the_popup_form" class="group">
                            <?php echo do_shortcode( get_field('from_shortcode_pff', 'option') )?>
                        </div>
                    </div>
                    <div class="popupform__right">
                        <?php 
                            $image = get_field('image_pff', 'option');
                            echo wp_get_attachment_image( 
                                $image['id'], 'full', 
                                false, 
                                array(
                                    'title' => $image[alt], 
                                    'alt' => $image[alt], 
                                    'class' => 'popup__img'
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;
}


function tcs_igaming_business_plan_form(){ 
    $source_id = "TCS iGaming Business Plan Page Form";    
    $country = \ft\yii_b2b\Main::getInstance()->visitor->getCountry();
    ?>
    <script>
        jQuery(document).ready(function($) {
            jQuery('.tibp_source_id_popupform, .tibp_country_popupform').css('display', 'none');
            setTimeout( function(){ 
                jQuery('#tibp_source_id_popupform').val('<?php _e($source_id) ?>');
                jQuery('#tibp_country_popupform').val('<?php _e($country) ?>');
                jQuery('#countrycodehomepagex span > input').val('<?php _e($country) ?>');
                jQuery('#countrycodenearfooter span > input').val('<?php _e($country) ?>');
                //jQuery('body.page-template-default #cf__wrapper #countrycodenearfooter span > input[type="text"]').val('<?php _e($country) ?>');
            //jQuery('.tibp_source_id_popupform, .tibp_country_popupform').css('display', 'none');
            }, 2000); //3 seconds


        });
    </script>
<?php }

//add_action('theFooterHook', 'popup_form', 1);
add_action('theFooterHook', 'blog_single_form', 1);
add_action('theFooterHook', 'footerWrapperStart', 2);
add_action('theFooterHook', 'footer_navs', 3);
//add_action('theFooterHook', 'footerLogo', 6);
//add_action('theFooterHook', 'rightAreaStartWrap', 3);
//add_action('theFooterHook', 'mainRightFooter', 4);
//add_action('theFooterHook', 'rightAreaEndWrap', 5);
add_action('theFooterHook', 'footerWrapperEnd', 100);
add_action('theFooterHook', 'the_popupform', 200);
add_action('theFooterHook', 'tcs_igaming_business_plan_form', 300);
//add_action('theFooterHook', 'script_for_popupheader', 300);
//add_action ('theFooterHook', 'the_popup_box', 200);