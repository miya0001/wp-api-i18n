<?php
/**
 * Plugin Name:     Rest Api I18n
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     rest-api-i18n
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rest_Api_I18n
 */


load_textdomain( "default", basename( dirname( plugin_dir_path( __FILE__ ) ) ) . "/langs/rest-api-$locale.mo" );
