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

