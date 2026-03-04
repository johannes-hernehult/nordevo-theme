<?php
/**
 * Enqueue scripts and styles
 *
 * @package nordevo-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nordevo_scripts() {
	wp_enqueue_style(
		'nordevo-main',
		NORDEVO_URI . '/assets/css/main.css',
		array(),
		NORDEVO_VERSION
	);

	wp_enqueue_script(
		'nordevo-main',
		NORDEVO_URI . '/assets/js/main.js',
		array(),
		NORDEVO_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'nordevo_scripts' );
