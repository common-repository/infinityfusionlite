<?php

// INITIAL SETUP
function infusion_mobeus_admin_init(){



  $data = get_option('infusion_mobeus_framework_options');
  $data['plugin_version'] = INFUSION_MOBEUS_VERSION;
  $data['plugin_name'] = INFUSION_MOBEUS_PLUGIN_NAME;
  $data['theme_version'] = 'N/A';
   $data['theme_name'] = 'N/A';
  $data['mobeus_framework_version'] = INFUSION_MOBEUS_FRAMEWORK_VERSION;
  $data['infusion_mobeus_framework'] = array();
  update_option('infusion_mobeus_framework_options', $data);

  $infusion_mobeus_values = get_option('infusion_mobeus_framework_values');
  if( !is_array($infusion_mobeus_values) ) update_option( 'infusion_mobeus_framework_values', array() );
}
add_action('admin_init', 'infusion_mobeus_admin_init', 2);


// ADMIN STYLES
function infusion_mobeus_admin_styles(){
  wp_enqueue_style('infusion_mobeus_admin_css', plugins_url().'/infinityfusionlite/framework/css/infusion_mobeus-admin.css');
  wp_enqueue_style('wp-color-picker');
  wp_enqueue_style('redactor', plugins_url().'/infinityfusionlite/framework/css/redactor.css');
  wp_enqueue_style('infusion_mobeus-datepicker', plugins_url().'/infinityfusionlite/framework/css/datepicker.css');
}
add_action('admin_print_styles', 'infusion_mobeus_admin_styles');


function infusion_mobeus_admin_scripts(){
  wp_enqueue_media(); //required for WP media uploader to work, uncomment if not required
  wp_enqueue_script('infusion_mobeus-ajaxupload', plugins_url() .'/infinityfusionlite/framework/js/ajax-upload.js', array('jquery'));
  wp_enqueue_script('infusion_mobeus-admin-js', plugins_url() .'/infinityfusionlite/framework/js/infusion_mobeus-admin.js', array('jquery', 'wp-color-picker', 'infusion_mobeus-datepicker'));
  wp_enqueue_script('redactor', plugins_url().'/infinityfusionlite/framework/js/jquery.redactor.min.js', array('jquery', 'infusion_mobeus-admin-js'));
  wp_enqueue_script('infusion_mobeus-datepicker', plugins_url().'/infinityfusionlite/framework/js/datepicker.js', array('jquery'));
}
if(isset($_GET) && @$_GET['page'] == 'infusion_mobeusframework'){
  add_action('admin_enqueue_scripts', 'infusion_mobeus_admin_scripts');
}

function infusion_mobeus_wp_media(){
  wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'infusion_mobeus_admin_scripts');



// ADMIN MENU
function infusion_mobeus_advanced_menu(){
	require_once('infusion-mobeus-advanced.php');
	infusion_mobeus_advanced();
}

function infusion_mobeus_docs(){
	echo ('
	<script type="text/javascript">
        //<![CDATA[
            window.location.replace("http://docs.pristinethemes.co.uk/docs/infinityfusion/");
        //]]>
    </script>
	');
}

function infusion_mobeus_upgrade(){
	echo ('
	<script type="text/javascript">
        //<![CDATA[
            window.location.replace("http://codecanyon.net/item/infinityfusion-responsive-wordpress-admin-skins/5100919?ref=InfinityCode");
        //]]>
    </script>
	');
}

 $infusion_mobeus_options = get_option('infusion_mobeus_framework_options');
     
function infinity_fusion_menu() {
	add_menu_page( 'InfinityFusion', 'InfinityFusion', 'administrator', 'infinity-fusion', 'infusion_mobeus_options_page', 'div', '2.1' );
	add_submenu_page( 'infinity-fusion', 'UPGRADE', 'UPGRADE', 'administrator', 'infinity-fusion-upgrade', 'infusion_mobeus_upgrade' );
	add_submenu_page( 'infinity-fusion', 'Documentation', 'Documentation', 'administrator', 'infinity-fusion-docs', 'infusion_mobeus_docs' );
	add_submenu_page( 'infinity-fusion', 'Advanced', 'Advanced', 'administrator', 'infinity-fusion-advanced', 'infusion_mobeus_advanced_menu' );
}
add_action( 'admin_menu', 'infinity_fusion_menu' );
function infinity_fusion_admin_append() {
    echo(
	'<style>
	
	.wp-menu-name { 
	
	background:none !important;
	}
	
	#toplevel_page_infinity-fusion div { 
	
	background-image:url(' . plugins_url() . '/infinityfusionlite/images/if_swirl.svg);
	background-repeat:no-repeat;
	background-position:center;
	background-size:20px 20px;
	}
	
	</style>
	<!--[if lt IE 8]>
	<style>#infusion_mobeus-admin-wrap .infusion_mobeus-content .infusion_mobeus-main-content .page{
  display: block !important;
}</style>
	<![endif]-->
	<!--[if gte IE 8]>
	<style>#infusion_mobeus-admin-wrap .infusion_mobeus-content .infusion_mobeus-main-content .page{
  display: block !important;
}</style>
	<![endif]-->'
	);}
add_filter('admin_head', 'infinity_fusion_admin_append');

// OUTPUT CUSTOM CSS FILE
function infusion_mobeus_link_custom_styles(){
  $output = '';
  if(apply_filters('infusion_mobeus_custom_styles', $output)){
    $perma_structure = get_option('permalink_structure');
    $url = home_url(). '/infusion_mobeus-custom-styles.css?'.time();
    if(!$perma_structure) $url = home_url(). '?page_id=infusion_mobeus-custom-styles.css';
    echo '<link rel="stylesheet" href="'.$url.'" type="text/css" media="screen" />';
  }
}
add_action('wp_head', 'infusion_mobeus_link_custom_styles', 10);

// CREATE CUSTOM CSS FILE
function infusion_mobeus_create_custom_styles(){
  $perma_structure = get_option('permalink_structure');
  $show_css = false;

  if($perma_structure){
    if(!isset($_SERVER['REQUEST_URI'])){
      $_SERVER['REQUEST_URI'] = substr($_SERVER['PHP_SELF'], 1);
      if(isset($_SERVER['QUERY_STRING'])){$_SERVER['REQUEST_URI'].='?'.$_SERVER['QUERY_STRING'];}
    }
    $url = (isset($GLOBALS['HTTP_SERVER_VARS']['REQUEST_URI'])) ? $GLOBALS['HTTP_SERVER_VARS']['REQUEST_URI'] : $_SERVER['REQUEST_URI'];
    if(preg_replace('/\\?.*/', '', basename($url)) == 'infusion_mobeus-custom-styles.css') $show_css = true;
  }else{
    if(isset($_GET['page_id']) && $_GET['page_id'] == 'infusion_mobeus-custom-styles.css' ) $show_css =  true;
  }
  if($show_css){
    $output = '';
    header('Content-Type: text/css');
    echo apply_filters('infusion_mobeus_custom_styles', $output);
    exit;
  }
}
add_action('init', 'infusion_mobeus_create_custom_styles');