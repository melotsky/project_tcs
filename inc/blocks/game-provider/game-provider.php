<?php
/**
 * Featured Platform Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'game-providers-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-platform';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( get_field('enable_game_provider') == "1" ) :
?>
<div id="top_review_hp" class="top_review top_review__flex software_archive">


    <?php while(the_repeater_field('game_provider')) : ?>
        <div class="top_review__item gp__holder">
        <div class="top_review__wrapper">
            <div class="group top_review__header">
                <div class="top_review__title_stars">
                    <h3><?php the_sub_field('title_gp')?></h3>
                    <div class="gp__logo group">
                    <div class="gp__logo_t group">
                    <div class="gp__logo_c group">
                    <?php $image = wp_get_attachment_image_src(get_sub_field('logo_gp'), 'game_provider_logo'); ?>
                    <img src="<?php _e($image[0])?>" class="logo_gp" />
                    </div></div></div>

                    <div class="group top_review__starsholder">

                    <!-- START -->

                    <div class="top_review__stars"> 
                    <?php if( get_sub_field('stars_gp') == "01" ) :?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star-o"></span> 
                        <span class="fa rating-star-3 fa-star-o"></span> 
                        <span class="fa rating-star-4 fa-star-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif ( get_sub_field('stars_gp') == "15") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star-half-o"></span> 
                        <span class="fa rating-star-3 fa-star-o"></span> 
                        <span class="fa rating-star-4 fa-star-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "02") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star-o"></span> 
                        <span class="fa rating-star-4 fa-star-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "25") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star-half-o"></span> 
                        <span class="fa rating-star-4 fa-star-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "03") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star"></span> 
                        <span class="fa rating-star-4 fa-star-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "35") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star"></span> 
                        <span class="fa rating-star-4 fa-star-half-o"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "04") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star"></span> 
                        <span class="fa rating-star-4 fa-star"></span> 
                        <span class="fa rating-star-5 fa-star-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "45") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star"></span> 
                        <span class="fa rating-star-4 fa-star"></span> 
                        <span class="fa rating-star-5 fa-star-half-o"></span>
                    <?php elseif (get_sub_field('stars_gp') == "05") : ?>
                        <span class="fa rating-star-1 fa-star"></span> 
                        <span class="fa rating-star-2 fa-star"></span> 
                        <span class="fa rating-star-3 fa-star"></span> 
                        <span class="fa rating-star-4 fa-star"></span> 
                        <span class="fa rating-star-5 fa-star"></span>
                    <?php endif; ?>
                    </div>
                    <!-- END -->
                </div>

                <?php if( get_sub_field('enable_game_type') == "1" )  : ?>
                    <?php if( get_sub_field('bingo_gp') == "1" or get_sub_field('bonus_gp') == "1" or get_sub_field('cards_gp') == "1" or get_sub_field('jackpots_gp') == "1" or get_sub_field('live_casino_gp') == "1" or
                    get_sub_field('lotto_gp') == "1" or get_sub_field('other_gp') == "1" or get_sub_field('slot_gp') == "1" or get_sub_field('table_gp') == "1"   )  : ?>
                    <div class="gt_icons group">
                     

                    <?php if( get_sub_field('bingo_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__bingo" alt="Bingo"> <span class="tooltiptext">Bingo</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('bonus_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__bonus" alt="Bonus"> <span class="tooltiptext">Bonus</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('cards_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__cards" alt="Cards"> <span class="tooltiptext">Cards</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('jackpots_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__jackpots" alt="Jackpots"> <span class="tooltiptext">Jackpots</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('live_casino_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__livecasino" alt="Live Casino"> <span class="tooltiptext">Live Casino</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('lotto_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__lotto" alt="Lotto"> <span class="tooltiptext">Lotto</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('other_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__other" alt="Other"> <span class="tooltiptext">Other</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('slot_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__slot" alt="Slot"> <span class="tooltiptext">Slot</span> </span>                    
                    <?php endif; ?>
                    <?php if( get_sub_field('table_gp') == "1" ) : ?>
                        <span class="tooltip gt_iconsx gt_icons__table" alt="Table"> <span class="tooltiptext">Table</span> </span>                    
                    <?php endif; ?>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>                
            </div>

            <?php if(get_sub_field('enable_license_gp') == "1" ) :?>
            <div class="group top_review__license_logo">
                <div class="group top_review__lgtable">
                    <div class="group top_review__lgtablecell">
                
                    <?php while(the_repeater_field('license_gp')) : ?>
                    <?php $image_lic = wp_get_attachment_image_src(get_sub_field('image_lic_gp'), 'game_provider_logo_lic'); ?>
                    <div class="group top_review__lgitem tooltip"> <span class="tooltiptext"><?php the_sub_field('license_title_gp') ?></span>
                        <img src="<?php _e($image_lic[0])?>" alt="<?php the_sub_field('license_title_gp') ?>" title="<?php the_sub_field('license_title_gp') ?>" class="" />
                    </div>
                    <?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="top_review__urls"> 
	            <a href="#target-form<?php //the_permalink( '1159' )?>" class="get__started popup-form-toggle">Request a Quote</a> 
                <a href="<?php the_sub_field('review_target_page_pg')?>" class="read_review">More Info</a>
            </div>


            </div>
        </div>
        </div>
    <?php endwhile; ?>

</div>
<?php endif; ?>