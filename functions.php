<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
{
die ('No access!');
}

require_once( dirname(__FILE__) . '/core/fx-function-default.php'); // options theme

//TIM: data-no-lazy for notlazy images
add_filter('render_block_core/image',function($content,$params){
  if(false !== strpos($content, 'notlazy')){
    $m=[];
    $content =preg_replace_callback('/<img[^>]*>/i', function($m){
      if(false === strpos($m[0], 'data-no-lazy')){
        $m[0] = '<img data-no-lazy'.substr($m[0], 4);
      }
      return $m[0];
    }, $content);
  }
  return $content;
},10,2);


//TIM: tune autoptimize lazy
add_filter('autoptimize_filter_imgopt_lazyload_jsconfig', function($c){
  ob_start();?><script><?php ob_start();?>
    window.lazySizesConfig.ricTimeout=45;
    window.lazySizesConfig.expand=1;
    window.lazySizesConfig.expFactor=1;
    window.lazySizesConfig.hFac=1;
    window.lazySizesConfig.loadHidden=!1;
    window.lazySizesConfig.throttleDelay=30;
    window.addEventListener('lazybeforeunveil',(e)=>{
      try {
        var t=e.target;
        var u=t.getAttribute('data-bg');
//        console.log(u);
        if(u.length >0&&t.clientWidth>50){
          var U = new URL(u);
          if(U.host.endsWith('cloudinary.com')){
            U.pathname = U.pathname.replace('/f_auto,','/f_auto,w_'+t.clientWidth+',');
            if(u!=U.toString()){
              t.setAttribute('data-bg',U.toString());
            }
          }
        }
      } catch (e) {}
    });
  <?php $script=ob_get_clean();?></script><?php ob_clean();
  return str_replace('</script', $script.'</script', $c);
});
add_filter('autoptimize_filter_imgopt_lazyload_js', function($s){
  $d=[];
  preg_match( '#<script[^>]*src=("|\')([^>]*)("|\')#Usmi', $s, $d );
  $url = $d[2];
  header("link: <".$url.">; rel=prefetch;  as=script", false);
  return $s;
});
//TIM: tune autooptimize push main JS
add_filter('autoptimize_filter_js_bodyreplacementpayload', function($s){
  $d=[];
  preg_match( '#<script[^>]*src=("|\')([^>]*)("|\')#Usmi', $s, $d );
  $url = $d[2];
  header("link: <".$url.">; rel=preload;  as=script", false);
  return $s;
});
//TIM: prefeatch DNS
add_filter('send_headers', function(){
  header("link: <https://aws-origin.image-tech-storage.com/>; rel=dns-prefetch", false);
});

//TIM:cloudinary fixes
//remove clodinay galery
add_filter( 'wp_print_scripts', function(){
  wp_deregister_script([
    'cloudinary-media-library',
    'cloudinary-gallery-init',
    'cld-core',
    'cld-player',
    'cld-videoinit',
    'cld-gallery',
  ]);
}, 1 );
//fix file meta for get srcset
add_filter('wp_calculate_image_srcset_meta',function($image_meta, $size_array, $image_src, $attachment_id){
  try {
    $cloudinary = \Cloudinary\get_plugin_instance();
    $media = $cloudinary->get_component('media');
    $cloudinary_id = $media->get_cloudinary_id( $attachment_id );
    $image_meta['file']= ''
        . pathinfo( $cloudinary_id, PATHINFO_FILENAME ) . '/'
        . pathinfo( $cloudinary_id, PATHINFO_BASENAME );
    foreach ($image_meta['sizes'] as $k =>$v){
      $image_meta['sizes'][$k]['file'] = $media->convert_url($v['file'], $attachment_id);
    }
  } catch (Throwable $exc) {
  }
  return $image_meta;
},10,4);


//tim js fixer
class tim_js_fixer
{
  public $flag_remove_eventon = true;
  
  public function __construct()
  {
    add_filter('pre_do_shortcode_tag',[$this,'on_pre_do_shortcode_tag'],10,2);
    add_filter('wp_print_scripts',[$this,'on_wp_print_scripts'],9);
    add_filter('wp_print_footer_scripts',[$this,'on_wp_print_footer_scripts'],9);
    add_filter('wp_print_styles',[$this,'on_wp_print_styles'],9);
    add_filter('print_late_styles',[$this,'on_print_late_styles'],9);
  }
  
  public function on_wp_print_scripts(){
    global $wp_scripts;
    //eventon transformations general to footer
    $z= '';
  }
  public function on_wp_print_footer_scripts()
  {
    global $wp_scripts;
    if($this->flag_remove_eventon){
      wp_dequeue_script([
          'eventon_gmaps_blank',
          'evo_handlebars',
          'evo_jitsi',
          'evo_mobile',
          'evo_moment',
          'evo_mouse',
          'evcal_functions',
          'evcal_easing',
          'evcal_ajax_handle',
      ]);
    }
  }
  
  public function on_wp_print_styles()
  {
    wp_dequeue_style([
        'evcal_cal_default',
        'evo_single_event',
        'evo_font_icons',
        'evcal_google_fonts',
        'eventon_dynamic_styles',
    ]);
  }
  
  public function on_print_late_styles($value)
  {
    global $wp_styles;
    if($this->flag_remove_eventon){
      $styles = [
        'evcal_cal_default',
        'evo_single_event',
        'evo_font_icons',
        'evcal_google_fonts',
        'eventon_dynamic_styles',
      ];
      foreach($styles as $style){
        wp_enqueue_style($style);
        $wp_styles->set_group($style,false,1);
      }
    }
    
    return $value;
  }
  
  public function on_pre_do_shortcode_tag($result,$name)
  {
    if($this->flag_remove_eventon && strpos($name, '_eventon_')!== false){
      $this->flag_remove_eventon = false;
    }
    return $result;
  }
}
if(!is_admin()){
  $fixer = new tim_js_fixer();
}

//fix disable core lazy loading reason conflict cloudinary and autooptimize
add_action('wp',function(){
  remove_all_filters('wp_lazy_loading_enabled');
  add_filter( 'wp_lazy_loading_enabled', '__return_false');
},11);

//fix cloudinary_context_options related to get_the_gid
add_filter('cloudinary_context_options',function($context_options,$post){
  if(isset($context_options['guid'])&&$post->ID > 0){
    $file = get_post_meta($post->ID,'_wp_attached_file',false);
    if(is_array($file)&& count($file)>0){
      $file = $file[0];
      $context_options['guid'] = md5($file);
    }
  }
  return $context_options;
},10,2);

//TIM: schema-review
//add_filter( 'wpseo_schema_graph_pieces', 
//  function ( $pieces, $context ) {
//    require_once( dirname(__FILE__) . '/fixes/tim-schema-review.php');
//    $pieces[] = new TIM_Schema_Review( $context );
//    return $pieces;
//  } 
//, 20, 2 );

