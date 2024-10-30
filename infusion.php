<?php

if( infusion_mobeus_get_option('disable_infusion') == 'off'  || infusion_mobeus_get_option('disable_infusion') == '') {

$infusion_file_ver = MOBEUS_FRAMEWORK_VERSION;
if ($infusion_file_ver == null) {
$infusion_file_ver = "1.0.0";	
}
if (infusion_mobeus_get_option('infusion_skin') !== ''){	
$infusion_colour = infusion_mobeus_get_option('infusion_skin');
}
else {
$infusion_colour = "marble";
}
define(INFCOLOUR,$infusion_colour);

// Load the responsive component of InfinityFusion
require_once( plugin_dir_path(__FILE__) . 'lib/mobile/resp.php' );

// load the sticky admin menu component
require_once( plugin_dir_path(__FILE__) . 'lib/menu/menu.php' );

// register Open Sans stylesheet
add_action( 'init', 'infinityfusion_register_open_sans' );
function infinityfusion_register_open_sans() {
	wp_register_style(
		'open-sans',
		'//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,300,400,600&subset=latin-ext,latin',
		false,
		'20130605'
	);
}
	// *********************************************
	// ***********    CUSTOM INFUSION    ***********
	// *********************************************

	
	// register Dashicons stylesheet
add_action( 'init', 'infinityfusion_register_dashicons' );
function infinityfusion_register_dashicons() {
	wp_register_style(
		'dashicons',
		plugins_url( 'css/'. INFCOLOUR .'/dashicons.css', __FILE__ ),
		false,
		$infusion_file_ver
	);
}

// register InfinityFusion admin color scheme
add_action( 'admin_init', 'infinityfusion_register_admin_color_scheme' );
function infinityfusion_register_admin_color_scheme() {

	global $wp_styles, $_wp_admin_css_colors;

	// remove classic and fresh color schemes, to prevent confusion
	unset( $_wp_admin_css_colors[ 'classic' ] );
	unset( $_wp_admin_css_colors[ 'fresh' ] );

	wp_admin_css_color(
	'infinityfusion',
	 	_x( 'InfinityFusion', 'admin color scheme' ),
	 	plugins_url( 'css/infinityfusion.css', __FILE__ ),
	 	array( '#333', '#444', '#0074a2', '#2ea2cc' )
	 );
	 

	function infinityfusion_register_admin_color_scheme_admin_head() {
	echo ('<link href="'. plugins_url( 'css/'. INFCOLOUR .'/colors-infusion.php', __FILE__ ) .'" rel="stylesheet" type="text/css">');
	};add_action( 'admin_head', 'infinityfusion_register_admin_color_scheme_admin_head' );

	// set colors-infusion.css's modification time
	$wp_styles->registered[ 'colors' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'colors' ]->deps[] = 'open-sans';
	$wp_styles->registered[ 'colors' ]->deps[] = 'dashicons';
}

// load InfinityFusion css on login screen
add_action( 'login_init', 'infinityfusion_replace_wp_default_styles' );
add_action( 'login_init', 'infinityfusion_fix_login_color_scheme' );
function infinityfusion_fix_login_color_scheme() {
	global $wp_styles;
	$wp_styles->registered[ 'colors-fresh' ]->src = plugins_url( 'css/'.INFCOLOUR.'/colors-infusion.php', __FILE__ );
	$wp_styles->registered[ 'colors-fresh' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'colors-fresh' ]->deps[] = 'open-sans';
	$wp_styles->registered[ 'colors-fresh' ]->deps[] = 'dashicons';
}

// replace default admin-bar.css with InfinityFusion's
add_action( 'init', 'infinityfusion_replace_admin_bar_style' );
function infinityfusion_replace_admin_bar_style() {
	global $wp_styles;
	$wp_styles->registered[ 'admin-bar' ]->src = plugins_url( 'css/'.INFCOLOUR.'/admin-bar.css', __FILE__ );
	$wp_styles->registered[ 'admin-bar' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'admin-bar' ]->deps[] = 'open-sans';
	$wp_styles->registered[ 'admin-bar' ]->deps[] = 'dashicons';
	$wp_styles->registered[ 'admin-bar' ]->extra[ 'suffix' ] = '';
}

// replace some default css files with ours
add_action( 'admin_init', 'infinityfusion_replace_wp_default_styles' );
function infinityfusion_replace_wp_default_styles() {
	global $wp_styles;
	$wp_styles->registered[ 'buttons' ]->src = plugins_url( 'css/'.INFCOLOUR.'/buttons.css', __FILE__ );
	$wp_styles->registered[ 'buttons' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'editor-buttons' ]->src = plugins_url( 'css/'.INFCOLOUR.'/editor.css', __FILE__ );
	$wp_styles->registered[ 'editor-buttons' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'media' ]->src = plugins_url( 'css/'.INFCOLOUR.'/media.css', __FILE__ );
	$wp_styles->registered[ 'media' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'media-views' ]->src = plugins_url( 'css/'.INFCOLOUR.'/media-views.css', __FILE__ );
	$wp_styles->registered[ 'media-views' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'media-views' ]->extra[ 'suffix' ] = '';
	$wp_styles->registered[ 'wp-admin' ]->src = plugins_url( 'css/'.INFCOLOUR.'/wp-admin.php', __FILE__ );
	$wp_styles->registered[ 'wp-admin' ]->ver = $infusion_file_ver;
	$wp_styles->registered[ 'wp-admin' ]->deps[] = 'open-sans';
	$wp_styles->registered[ 'wp-admin' ]->deps[] = 'dashicons';
	$wp_styles->registered[ 'wp-admin' ]->extra[ 'suffix' ] = '';
	$wp_styles->registered[ 'wp-pointer' ]->src = plugins_url( 'css/'.INFCOLOUR.'/wp-pointer.css', __FILE__ );
	$wp_styles->registered[ 'wp-pointer' ]->ver = $infusion_file_ver;
}

// force the InfinityFusion color-scheme setting on to use the new CSS
add_filter( 'get_user_option_admin_color', 'infinityfusion_force_admin_color' );
function infinityfusion_force_admin_color( $color_scheme ) {
	return 'infinityfusion';
}

// Add an InfinityFusion body class to the front-end
add_filter( 'body_class', 'infinityfusion_add_body_class_frontend' );
function infinityfusion_add_body_class_frontend( $classes ) {
	$classes[] = 'infinityfusion';
	return $classes;
}

// Add an InfinityFusion body class to the back-end
add_filter( 'admin_body_class', 'infinityfusion_add_body_class_backend' );
function infinityfusion_add_body_class_backend( $classes ) {
	if ( is_multisite() )
		$classes .= ' multisite';
	return $classes . ' infinityfusion';
}

// override WP's default toolbar top margin
add_action( 'wp_head', 'infinityfusion_override_toolbar_margin', 11 );
function infinityfusion_override_toolbar_margin() {
	if ( is_admin_bar_showing() ) : ?>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }

	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
<?php endif;
}; } else{};