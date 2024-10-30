<?php

function infusion_stickymenu_enqueue_scripts() {

	// disable floating on mobile devices, except iPads
	$ua = empty( $_SERVER[ 'HTTP_USER_AGENT' ] ) ? '' : $_SERVER[ 'HTTP_USER_AGENT' ];
	if ( wp_is_mobile() && strpos( $ua, 'iPad' ) === false )
		return;

	wp_enqueue_script( 'infusion-stickymenu', plugins_url() .'/infinityfusionlite/lib/menu/scripts.js', array( 'jquery' ) );
	wp_enqueue_style( 'infusion-stickymenu', plugins_url() .'/infinityfusionlite/lib/menu/styles.css');

}

add_action( 'admin_enqueue_scripts', 'infusion_stickymenu_enqueue_scripts' );
