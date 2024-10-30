<?php
/**
* @since 1.0.0
* Defining constants
*/
define('INFUSION_MOBEUS_DIR', dirname(__FILE__));
define('INFUSION_MOBEUS_URL', dirname(__FILE__));
define('INFUSION_MOBEUS_FRAMEWORK_VERSION', '1.0.0.0');
define('INFUSION_MOBEUS_VERSION', '1.0.0');
define('INFUSION_MOBEUS_DEBUG', false);
define('INFUSION_MOBEUS_PLUGIN_TYPE', 'free');
define('INFUSION_MOBEUS_PLUGIN_NAME', 'InfinityFusionLite');

require_once(INFUSION_MOBEUS_DIR. '/infusion-mobeus-admin-functions.php');
require_once(INFUSION_MOBEUS_DIR. '/infusion-mobeus-admin-init.php');
require_once(INFUSION_MOBEUS_DIR. '/infusion-mobeus-admin-page-options.php');
require_once(INFUSION_MOBEUS_DIR. '/infusion-mobeus-advanced.php');
require_once(INFUSION_MOBEUS_DIR. '/infusion-mobeus-theme-functions.php');

/* Include Theme Options -------------------------------------------------------------------------*/
require_once('options/general-settings.php');
require_once('options/skin-settings.php');
require_once('options/login-settings.php');
?>