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

load_plugin_textdomain(
	"rest-api",
	false,
	dirname( plugin_basename( __FILE__ ) ).'/languages'
);

add_filter( "gettext", "translate_rest_api", 10, 3 );

function translate_rest_api( $translations, $text, $domain ) {
	if ( "default" === $domain && translate( $text, "rest-api" ) ) {
		return translate( $text, "rest-api" );
	} else {
		return $translations;
	}
}
