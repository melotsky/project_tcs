/**************************/
//SLIDE BARS SETTINGS 
/**************************/


jQuery(document).ready(function(){
	jQuery.slidebars({
			siteClose: true,
			scrollLock: true
		});
	
	
jQuery(window).resize(function(){

       if (jQuery(window).width() >= 768) {  
			jQuery.slidebars.close();
			jQuery('#resp-sidebar').addClass('xtac');

       } else{
		   jQuery('#resp-sidebar').removeClass('xtac');
		   }

});
});