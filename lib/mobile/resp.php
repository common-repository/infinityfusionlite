<?php
function resp_init() {
	// Add mobile headers for wp-admin
	add_action( 'admin_head', 'resp_add_mobile_headers' );

	// Add CSS/JS for wp-admin
	add_action( 'admin_print_styles', 'resp_add_css' );
	add_action( 'admin_print_scripts', 'resp_add_js' );

	// Add toolbar CSS
	add_action( 'admin_print_styles', 'resp_add_toolbar_css' );
	add_action( 'wp_enqueue_scripts', 'resp_add_toolbar_css' );

	add_filter( 'shortcut_link', 'resp_enlarge_pressthis' );
}
add_action( 'init', 'resp_init' );

function resp_add_mobile_headers() {
	echo '';
}
if( infusion_mobeus_get_option('custom_infusion') == 'on' ) {
function resp_add_css() {
	$modtime = $infusion_file_ver;
	wp_enqueue_style( 'resp', plugins_url() .'/infinityfusionlite/lib/mobile/css/custom/resp.php', false, $modtime );
}

function resp_add_toolbar_css() {
	$modtime = $infusion_file_ver;
	wp_enqueue_style( 'resp-admin-bar', plugins_url() .'/infinityfusionlite/lib/mobile/css/custom/admin-bar.php', false, $modtime );
}

function resp_add_js() {
	$modtime = $infusion_file_ver;
	wp_enqueue_script( 'resp', plugins_url() .'/infinityfusionlite/lib/mobile/js/resp.js', array( 'jquery', 'backbone' ), $modtime );
	wp_enqueue_script( 'resp-jq-mobile', plugins_url() .'/infinityfusionlite/lib/mobile/js/jquery.mobile.custom.min.js', array( 'jquery', 'backbone' ), '1.3.1' );
}
}

if( infusion_mobeus_get_option('custom_infusion') == 'off'  || infusion_mobeus_get_option('custom_infusion') == '') {
function resp_add_css() {
	$modtime = $infusion_file_ver;
	wp_enqueue_style( 'resp', plugins_url() .'/infinityfusionlite/lib/mobile/css/'. INFCOLOUR . '/resp.php', false, $modtime );
}

function resp_add_toolbar_css() {
	$modtime = $infusion_file_ver;
	wp_enqueue_style( 'resp-admin-bar', plugins_url() .'/infinityfusionlite/lib/mobile/css/' . INFCOLOUR . '/admin-bar.css', false, $modtime );
}

function resp_add_js() {
	$modtime = $infusion_file_ver;
	wp_enqueue_script( 'resp', plugins_url() .'/infinityfusionlite/lib/mobile/js/resp.js', array( 'jquery', 'backbone' ), $modtime );
	wp_enqueue_script( 'resp-jq-mobile', plugins_url() .'/infinityfusionlite/lib/mobile/js/jquery.mobile.custom.min.js', array( 'jquery', 'backbone' ), '1.3.1' );
}
}

function resp_enlarge_pressthis( $link ) {
	return str_replace( 'width=720,height=570', 'width=770,height=570', $link );
}