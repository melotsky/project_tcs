<?php
/**
 * Game Provider Single Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'game-providers-single' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'game-providers-single';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( get_field('enable_game_provider_s') == "1" ) :
?>
<div class="ft-yii-widget ft-yii-widget-featured-summary-platform">
    <div class="ft-yii-widget fywfss">
        <p><?php _e("featured")?></p>
        <div class="fywfss__wrapper">
            <div class="fywfss__inner_wrapper">
                
                <!-- HEDEAR AREA START -->
                <div class="group fywfss__header_link">
                    <?php  
                    $image = wp_get_attachment_image_src(get_field('logo_gp_s'), 'game_provider_logo_single'); 
                    $img_logo = $image[0];
                    //$img_logo = $operator->getLogoUrl(242,60, "featuredsummary242x60");
                    //$img_logo = $img_logo;
                    
                    if($img_logo) :?>
                        <img src="<?php _e($img_logo)?>" class="otp__logo" alt="<?php the_field('title_gp_s')?>" title="<?php the_field('title_gp_s')?>" />
                    <?php else :?>
                        <img src="<?php _e(get_template_directory_uri())?>/assets/css/images/nologo-359x130.png" class="top_review__logo" alt="<?php the_field('title_gp_s')?>" title="<?php the_field('title_gp_s')?>" />
                    <?php endif; ?>
                    
                </div>
                <!-- HEDEAR AREA END -->
                
                <!-- AREA OF CONTENT START -->
                <div class="fywfss__content group">
                    
                    <!-- ICONS START -->
                    <div class="fywfss__icons">

                        <!-- STAR SCORE START -->
                        <div class="group fywfss__stars"> 
                            <div class="group featured_platform_content__icont fpc__stars">
                            <h4 class="fptitle__h4">Rating</h4>
                            <div class="group featured_platform_content__stars fpright">
                                <div class="brand-rating-stars">
                        <?php if( get_field('stars_gp_s') == "01" ) :?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star-o"></span> 
                            <span class="fa rating-star-3 fa-star-o"></span> 
                            <span class="fa rating-star-4 fa-star-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif ( get_field('stars_gp_s') == "15") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star-half-o"></span> 
                            <span class="fa rating-star-3 fa-star-o"></span> 
                            <span class="fa rating-star-4 fa-star-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "02") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star-o"></span> 
                            <span class="fa rating-star-4 fa-star-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "25") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star-half-o"></span> 
                            <span class="fa rating-star-4 fa-star-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "03") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star"></span> 
                            <span class="fa rating-star-4 fa-star-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "35") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star"></span> 
                            <span class="fa rating-star-4 fa-star-half-o"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "04") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star"></span> 
                            <span class="fa rating-star-4 fa-star"></span> 
                            <span class="fa rating-star-5 fa-star-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "45") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star"></span> 
                            <span class="fa rating-star-4 fa-star"></span> 
                            <span class="fa rating-star-5 fa-star-half-o"></span>
                        <?php elseif (get_field('stars_gp_s') == "05") : ?>
                            <span class="fa rating-star-1 fa-star"></span> 
                            <span class="fa rating-star-2 fa-star"></span> 
                            <span class="fa rating-star-3 fa-star"></span> 
                            <span class="fa rating-star-4 fa-star"></span> 
                            <span class="fa rating-star-5 fa-star"></span>
                        <?php endif; ?>                            
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- STAR SCORE START -->
                        
                        <!-- GAMING PRODUCTS START -->
                        <div class="group fywfss__gamingproducts">
                            <div class="group featured_platform_content__icont fpc__products">
                                <h4 class="fptitle__h4">Products</h4>
                                <div class="group featured_platform_content__products fpright">

                                    <?php if( get_field('enable_game_type_s') == "1" )  : ?>
                                        <?php 
                                        if( 
                                        get_field('slots_gp_s') == "1" 
                                        or get_field('bingo_gp_s') == "1" 
                                        or get_field('betting_gp_s') == "1" 
                                        or get_field('poker_casino_gp_s') == "1" 
                                        or get_field('live_gp_s') == "1" 
                                        or get_field('casinogames_gp_s') == "1" 
                                        )  : ?>

                                            <?php if( get_field('slots_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_slots" alt="Bingo"> <span class="tooltiptext">Slots</span> </span>                    
                                            <?php endif; ?>
                                            <?php if( get_field('bingo_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_bingo" alt="Bonus"> <span class="tooltiptext">Bonus</span> </span>                    
                                            <?php endif; ?>
                                            <?php if( get_field('betting_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_betting" alt="Cards"> <span class="tooltiptext">Betting</span> </span>                    
                                            <?php endif; ?>
                                            <?php if( get_field('poker_casino_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_poker" alt="Jackpots"> <span class="tooltiptext">Poker</span> </span>                    
                                            <?php endif; ?>
                                            <?php if( get_field('live_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_live" alt="Live Casino"> <span class="tooltiptext">Live Casino</span> </span>                    
                                            <?php endif; ?>
                                            <?php if( get_field('casinogames_gp_s') == "1" ) : ?>
                                                <span class="tooltip fppicon fppicon_casinogames" alt="Lotto"> <span class="tooltiptext">Casino Games</span> </span>                    
                                            <?php endif; ?>
                                    
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- GAMING PRODUCTS END -->
                    </div>
                    <!-- ICONS END -->
                    
                    <!-- LICENSES and CTA END -->
                    <div class="fywfss__licbta group">
                        <!-- LICESNSES START -->
                        <div class="fywfss__licenses">
                            <div class="fywfss__licenses_table">
                                <div class="fywfss__licenses_tablecell">

                                <?php if(get_field('enable_license_gp_s') == "1" ) :?>
                                    <?php while(the_repeater_field('license_gp_s')) : ?>
                                    <?php $image_lic = wp_get_attachment_image_src(get_sub_field('image_lic_gp'), 'game_provider_logo_single_license'); ?>
                                    <span class=" tooltip fpl__img"><img src="<?php _e($image_lic[0])?>" alt="<?php the_sub_field('license_title_gp') ?>">
                                        <span class="tooltiptext"><?php _e( $license->name ) ?></span>
                                    </span>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                </div>					
                            </div>	
                        </div>
                        <!-- LICESNSES END -->
                    
                        <!-- BUTTONS AREA START -->
                        <?php 
                        $source_id = get_field('title_gp_s'); 
                        $country   = \ft\yii_b2b\Main::getInstance()->visitor->getCountry();
                        ?>                    
                        <div class="fywfss__cta">
                            <div class="group fp_licenses_btns">
                                <a href="#target-form" onclick="openSourceId('<?=$source_id?>', '<?=$country?>'); return false" class="get__started gp popup-form-toggle">Request a Quote</a>
                                <a href="<?php the_field('review_target_page_pg_s') ?>" class="read__review gp"><span style="font-family: fontawesome"></span> Read Review</a>
                            </div>
                        </div>
                        <!-- BUTTONS AREA END -->
                    </div>
                    <!-- LICENSES and CTA END -->
                    <!-- AREA OF CONTENT END -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>