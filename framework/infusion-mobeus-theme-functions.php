<?php
function infusion_mobeus_add_option( $name, $value ){
  infusion_mobeus_update_option( $name, $value );
}

function infusion_mobeus_update_option($name, $value){
  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  $infusion_mobeus_values[$name] = $value;
  update_option('infusion_mobeus_framework_values', $infusion_mobeus_values);
}

function infusion_mobeus_remove_option($name){
  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  unset($infusion_mobeus_values[$name]);
  update_option('infusion_mobeus_framework_values', $infusion_mobeus_values);
}

function infusion_mobeus_get_option($name){
  $infusion_mobeus_values = get_option( 'infusion_mobeus_framework_values' );
  if( @array_key_exists( $name, $infusion_mobeus_values ) ) return $infusion_mobeus_values[$name];
  return false;
}

// Add version information to head
//function infusion_mobeus_add_version_meta(){
//  echo '<meta name="generator" content="'. INFUSION_MOBEUS_THEME_NAME .' '. INFUSION_MOBEUS_THEME_VERSION .'" />'."\n";
// echo '  <meta name="generator" content="StagFramework '. INFUSION_MOBEUS_FRAMEWORK_VERSION .'" />'."\n";
//}
//add_action('infusion_mobeus_meta_head', 'infusion_mobeus_add_version_meta');


// Add featured image to RSS feed
function infusion_mobeus_add_featured_image_to_rss($content){
  global $post;
  if(has_post_thumbnail($post->ID)){
    $content = '<div style="float:left;">' . get_the_post_thumbnail($post->ID, 'archive-thumb') . '</div>'.$content;
  }
  return $content;
}
add_filter('the_excerpt_rss', 'infusion_mobeus_add_featured_image_to_rss');
add_filter('the_content_feed', 'infusion_mobeus_add_featured_image_to_rss');



// Get CatID from cat name
if ( !function_exists( 'get_category_id' ) ) {
  function get_category_id( $cat_name )
  {
    $term = get_term_by( 'name', $cat_name, 'category' );
    return $term->term_id;
  }
}

if ( !function_exists( 'infusion_mobeus_blog_url' ) ) {
  function infusion_mobeus_blog_url(){
    if( $posts_page_id = get_option('page_for_posts') ){
      return home_url(get_page_uri($posts_page_id));
    } else {
      return home_url();
    }
  }
}

add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
remove_action( 'wp_head', 'wp_generator' );



if(!function_exists('infusion_mobeus_do_contextual_hook')){
  function infusion_mobeus_do_contextual_hook($tag = '', $args = ''){
    if (!$tag){
      return false;
    }
    do_action( $tag, $args );
    foreach( (array) infusion_mobeus_get_query_context() as $context ) {
      do_action( "{$tag}_{$context}", $args );
    }
  }
}

if( !function_exists('infusion_mobeus_get_query_context')){
  function infusion_mobeus_get_query_context(){
    global $wp_query, $query_context;

    if(isset($query_context->context) && is_array($query_context->context)){
      return $query_context->context;
    }else{
      $query_context = new stdClass;
    }

    $query_context->context = array();

    if(is_front_page()){$query_context->context[] = 'home';}

    if(is_home() && is_front_page()){
      $query_context->context[] = 'blog';
    }elseif(is_singular()){
      $query_context->context[] = 'singular';
      $query_context->context[] = "singular-{$wp_query->post->post_type}";
      if(is_page_template()){
        $skip = array('page', 'post');
        $page_template = basename(get_page_template());
        $page_template = str_replace('.php', '', $page_template);
        $page_template = str_replace('.', '-', $page_template);

        if($page_template && !in_array($page_template, $skip)){
          $query_context->context[] = $page_template;
        }
      }
      $query_context->context[] = "singular-{$wp_query->post->post_type}-{$wp_query->post->ID}";
    }elseif(is_archive()){
      $query_context->context[] = 'archive';

      if(is_tax() || is_category() || is_tag()){
        $term = $wp_query->get_queried_object();
        $query_context->context[] = 'taxonomy';
        $query_context->context[] = $term->taxonomy;
        $query_context->context[] = "{$term->taxonomy}-" . sanitize_html_class( $term->slug, $term->term_id );
      }elseif(is_author()){
        $query_context->context[] = 'user';
        $query_context->context[] = 'user-' . sanitize_html_class( get_the_author_meta( 'user_nicename', get_query_var( 'author' ) ), $wp_query->get_queried_object_id() );
      }else{
        if ( is_date() ) {
          $query_context->context[] = 'date';
          if ( is_year() )
            $query_context->context[] = 'year';
          if ( is_month() )
            $query_context->context[] = 'month';
          if ( get_query_var( 'w' ) )
            $query_context->context[] = 'week';
          if ( is_day() )
            $query_context->context[] = 'day';
        }
        if ( is_time() ) {
          $query_context->context[] = 'time';
          if ( get_query_var( 'hour' ) )
            $query_context->context[] = 'hour';
          if ( get_query_var( 'minute' ) )
            $query_context->context[] = 'minute';
        }
      }
    }elseif(is_search()){
      $query_context->context[] = 'search';
    }elseif(is_404()){
      $query_context->context[] = 'error-404';
    }
    return $query_context->context;
  }
}

/**
* Adding browser name to body class
* @return array new body Class
* @since v1.0.0
*/
function infusion_mobeus_body_classes($classes){
  global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

  if($is_lynx) $classes[] = 'lynx';
  elseif($is_gecko) $classes[] = 'gecko';
  elseif($is_opera) $classes[] = 'opera';
  elseif($is_NS4) $classes[] = 'ns4';
  elseif($is_safari) $classes[] = 'safari';
  elseif($is_chrome) $classes[] = 'chrome';
  elseif($is_chrome){
    $classes[] = 'ie';
    if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version )){
      $classes[] = 'ie'.$browser_version[1];
    }else{
      $classes[] = 'unknown';
    }
  }

  if(isset($_COOKIE['retina']) && $_COOKIE['retina'] > 1) $classes[] = 'retina';

  if(wp_is_mobile()) $classes[] = 'mobile';

  if($is_iphone) $classes[] = 'iphone';

  if(stristr($_SERVER['HTTP_USER_AGENT'], "mac")){
    $classes[] = 'mac';
  }elseif(stristr($_SERVER['HTTP_USER_AGENT'], "linux")){
    $classes[] = 'linux';
  }elseif(stristr($_SERVER['HTTP_USER_AGENT'], "windows")){
    $classes[] = 'windows';
  }

  // array_push($classes, 'infusion_mobeus');
  return $classes;
}
add_filter('body_class','infusion_mobeus_body_classes');



/**
* Fixes the wrong language problem with twitter embeds
*/
if ( !function_exists( 'ucc_oembed_twitter_lang' ) ) {
function ucc_oembed_twitter_lang( $provider, $url, $args ) {
  if ( 'twitter.com' == parse_url( $url, PHP_URL_HOST ) ) {
    if ( defined( 'WPLANG' ) )
      $lang = strtolower( WPLANG );
    if ( empty( $lang ) )
      $lang = 'en';

    $args['lang'] = $lang;
    $provider = add_query_arg( 'lang', urlencode( $lang ), $provider );
  }
  return $provider;
} }
add_filter( 'oembed_fetch_url', 'ucc_oembed_twitter_lang', 10, 3 );