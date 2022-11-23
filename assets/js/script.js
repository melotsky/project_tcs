// Custom Scripts
function openSourceId(sourceid, country){
    jQuery.magnificPopup.open({
        items:{type:'inline',src:'#target-form'},
        callbacks:{
          open:function(){
            jQuery('#target-form #source_id_popupform').val(sourceid);
            jQuery('#target-form #country_popupform').val(country);
            jQuery('#target-form .source_id_popupform, #target-form .country_popupform').css('display', 'none');
          }
        }
    });
}


jQuery(document).ready(function($) {

    // jQuery("select").change(function(){
    //     if (jQuery(this).val()=="") $(this).css({color: "#aaa"});
    //     else jQuery(this).css({color: "#000"});
    // });

    // jQuery('#uploadbrowsebutton').click(function(){
    //     jQuery('#fileuploadfield').click();
    // });

    jQuery('.btn_text').click(function(){
        jQuery('#fileuploadfield').click();
        

        $('#fileuploadfield').change(function(e){
            var fileName = e.target.files[0].name;
            jQuery('#output').text(fileName);
            console.log("test output" + fileName);
        });

    });


	jQuery('.popup-form-toggle').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: ''
	});

    // ALL PDF FILE OPEN INTO NEW TAB
    jQuery(this).scrollTop(0);
    jQuery('a[href$=".pdf"]').prop('target', '_blank');

    var faqs = jQuery('.wp-block-yoast-faq-block > .schema-faq-section > .schema-faq-answer').hide();
    
    // jQuery('.wp-block-yoast-faq-block > .schema-faq-section > .schema-faq-question').click(function() {
    //     faqs.slideUp();
    //     jQuery(this).next().slideDown();
    //     return false;
    // });

    jQuery('.wp-block-yoast-faq-block > .schema-faq-section > .schema-faq-question').click(function() {
        $this = jQuery(this);
        $target =  $this.next();
        $btn =  $this;
  
        if(!$target.hasClass('active')){
            faqs.removeClass('active').slideUp();
            jQuery('.wp-block-yoast-faq-block .aktibo').removeClass('aktibo');
           $btn.addClass('aktibo');
           $target.addClass('active').slideDown();
        }else if(jQuery(this).hasClass('aktibo')){
            jQuery(this).removeClass('aktibo');
            faqs.removeClass('active').slideUp();
        }
        
      return false;
    });    
});


jQuery("#backtotop").click(function () {
    jQuery("html, body").animate({scrollTop: 0}, 1000);
 });

jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 200) {
        jQuery("#backtotop").fadeIn('fast');
    }else {
		jQuery("#backtotop").fadeOut('fast');
	}
});

// STICK HEADER
jQuery(window).scroll(function() {
    // change the 50 into value you like eg: 300
    if (jQuery(this).scrollTop() > 50){  
        jQuery('body').addClass("sticky");
    }else{
        jQuery('body').removeClass("sticky");
    }
    //FOR LEFT NAV ANCHOR LINKS
    if (jQuery(this).scrollTop() > 650){  
        jQuery('#internal_nav').addClass("go__fix");
    }else{
        jQuery('#internal_nav').removeClass("go__fix");
    }
});

//OPEN ALL PDF FILE INTO NEW TAB... IT WILL DETECT THE PDF LINK AND ADD TARGET IS EQUAL TO BLANK.
// jQuery(document).ready(function($) {
//    jQuery('a[href*="pdf"]').attr('target', '_blank');
// });

function copyToClipboard(element) {
    var $temp = jQuery("<input>");
    jQuery("body").append($temp);
    $temp.val(jQuery(element).html()).select();
    document.execCommand("copy");
    $temp.remove();
}

 var $container = jQuery('.sec_bsp__inner');

//  jQuery(window).on('load', function () {
//     // Fire Isotope only when images are loaded
//     $container.imagesLoaded(function () {
//         $container.isotope({
//             itemSelector: '.blog-item',
//         });

//         jQuery(".pagination").hide();
//     });

//     // Filter
//     jQuery('.portfolio-menu').on('click', 'button', function () {
//         var filterValue = jQuery(this).attr('data-filter');
//         $container.isotope({filter: filterValue});
//         jQuery('.portfolio-menu .selected').removeClass('selected');
//         jQuery(this).addClass('selected');
//     });

//     // Infinite Scroll
//     jQuery('.sec_bsp__inner').infiniteScroll({
//             navSelector: 'div.pagination',
//             nextSelector: 'div.pagination a:last-child',
//             path: 'div.pagination a:last-child',
//             append: '.blog-item',
//             //itemSelector: '.blog-item',
//             bufferPx: 200,
//             loading: {
//                 finishedMsg: 'We\'re done here.',
//                 //img: +templateUrl+'ajax-loader.gif'
//             },
//         },
        
//         // Infinite Scroll Callback
//         function (newElements) {
//             var $newElems = jQuery(newElements).hide();
            
//             $newElems.imagesLoaded(function () {
//                 //$container.isotope('destroy');
//                 $newElems.fadeIn();
//                 //$container.isotope('appended', $newElems);
//                 $container.isotope('appended', $newElems);
//                 //$container.isotope('reloadItems', $newElems);
                
//             });
//         },

//         //$container.isotope('destroy');
        
//     );

//     $container.on( 'load.infiniteScroll', function( event, response, path ) {
//         var $items = jQuery( response ).find('.blog-item');
//         // append items after images loaded
//         $items.imagesLoaded( function() {
//           $container.append( $items );
//           $container.isotope( 'insert', $items );
//         });
//       });

// });


// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// ga('create', 'UA-210723791-Y', 'auto');
// ga('send', 'pageview');