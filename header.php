<?php
/**
 * Header Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" maximum-scale=1.0, />
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php
if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' );
wp_head();
?>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  ga('send', 'event', 'Contact Form', 'submit');
}, false );
</script>

<?php // cookieconsent + clarity?>
<script>
  (function(){
    var loaded = false;
    window.addEventListener("load", ()=>setTimeout(()=>{
      if(loaded) return;
      loaded = true;

      //clarity
      (function(c,l,a,r,i,t,y){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);})(window, document, "clarity", "script", "4ae1du30t5");

      //add link
      var link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = 'https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css';
      document.head.appendChild(link);
      //addscript
      var script = document.createElement('script');
      script.onload = function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#f6f6f6","text":"#000000","border":"#555555"},"button":{"background":"#555555","text":"#ffffff"}},"position":"bottom","content":{"href":"https://www.topcasinosolutions.com/privacy-policy/"}})};
      script.src = 'https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js';
      document.head.appendChild(script);


      //intercom
      window.intercomSettings = {app_id: "kmfjmfmv"};
      //(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/kmfjmfmv';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      setTimeout(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/kmfjmfmv';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};l()}},7000);

    },10));
  })()
</script>
<?php // .cookieconsent?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MFMCTMK');</script>
<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFMCTMK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php 
my_slidebar(); 
my_header();