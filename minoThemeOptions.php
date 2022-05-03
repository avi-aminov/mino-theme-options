<?php
/**
 * Plugin Name: Mino Theme Options FrameWork
 * Plugin URI: https://minopress.com
 * Description: Theme Options FrameWork.
 * Version: 1.0.0
 * Author: Avi Aminov
 * Author URI: https://minopress.com
 * Text Domain: mino-theme-press
 * Domain Path: /languages/
 */


// Constants
define( 'MINO_THEME_OPTIONS_PATH', trailingslashit(plugin_dir_path(__FILE__)) );
define( 'MINO_THEME_OPTIONS_URL', trailingslashit(plugins_url('/', __FILE__)) );
define( 'MINO_THEME_OPTIONS_PREFIX', 'mino_options_' );

/**
 * Require Autoloader
 */
require_once __DIR__ . '/vendor/autoload.php';


// create instance of builder class
$minoOptionsBuilder = MinoOptionsBuilder::getInstance();



// DEMO DATA FOR TESTING
include_once 'include/demo-data.php';