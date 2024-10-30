<?php

/*
Plugin Name: InfinityFusionLite
Plugin URI: http://codecanyon.net/item/infinityfusion-responsive-wordpress-admin-skins/5100919?ref=InfinityCode
Description: Change the way that you use Wordpress with a complete admin UI overhaul and impress both your customers and users. This the 'Lite' Verrsion of the full version of InfinityFusion by InfinitryCode.
Version: 1.0.3
Author: Harri Bell-Thomas
Author URI: http://harri.bell-thomas.com
License: GPL2

Copyright 2013  Harri Bel-Thomas  (email : contact@harri.bell-thomas.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
* @since 1.0.0
* Includes
*/
define(INFUSION_DIR, plugin_dir_path(__FILE__) . '/infinityfusionlite/');
require_once(dirname(__FILE__) .'/framework/_init.php');
require_once(dirname(__FILE__) .'/infusion.php');

add_action('admin_head', 'inf_admin_append');
function inf_admin_append() {
    echo('<meta content="yes" name="apple-mobile-web-app-capable"><meta name="viewport" content="height=device-height, user-scalable=0, initial-scale=1.0"><meta name="apple-mobile-web-app-status-bar-style" content="black"><meta name="apple-mobile-web-app-title" content="'. get_bloginfo('name') .'"><link rel="apple-touch-icon-precomposed" sizes="512x512" href="'. plugins_url() . '/infinityfusionlite/images/inf.jpg"><script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>');}
	
	function infusion_settings_link($links) { 
  $settings_link = '<a href="admin.php?page=infinity-fusion">Configure</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'infusion_settings_link' );

?>