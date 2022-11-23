jQuery(function($){
    jQuery('#cpt_loadmore').click(function(){
      var button = jQuery(this),
          currentPaged = parseInt(button.attr('data-current-paged')),
          maxNumPage = parseInt(button.attr('data-max-num-page')),
          dataPosts = {
            'action' : 'THE_PARAMETER_NAME',
            'paged' : currentPaged,
            'posts_per_page' : button.attr('data-posts-per-page')
          };
          
  
      jQuery.ajax({
        url : THE_PARAMETER_NAME_params.ajaxurl,
        data : dataPosts,
        type : 'POST',
        beforeSend : function ( xhr ) {
          button.text('Loading...');
          jQuery('#preLoader').prepend('<div class="loader">Loading...</div>')
        },
        success : function( data ){
          if( data ) {
            button.text('load more');
            jQuery('#preLoader .loader').remove();
            jQuery('.sec_bsp__inner').append(data);
            jQuery('.sec_bsp__inner').imagesLoaded( function() {
                jQuery('.sec_bsp__inner').isotope('destroy');
                jQuery('.sec_bsp__inner').isotope({
                    itemSelector: '.blog-item',
                    percentPosition:  true,
                    masonry: {
                       columnwidth: 1
                    }
                });
            });
  
            currentPaged++;
            button.attr('data-current-paged', currentPaged);
  
            if( currentPaged == maxNumPage ) {
              //button.text('Alle lastet').attr('disabled', 'true');
              button.remove();
              jQuery('#preLoader .loader').remove();
            }
  
          } else {
            //button.text('Alle er vist').attr('disabled', 'true');
            button.remove();
            jQuery('#preLoader .loader').remove();
          }
        }
      });
    });
  });