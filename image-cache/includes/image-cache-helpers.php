<?php
/**
 * Utilidades auxiliares para Image Cache.
 *
 * @package Image_Cache
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function image_cache_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
