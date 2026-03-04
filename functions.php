<?php
/**
 * Nordevo Theme — entry point
 *
 * Loads modular files from inc/. Add new modules here.
 *
 * @package nordevo-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NORDEVO_VERSION', '1.0.0' );
define( 'NORDEVO_DIR', get_template_directory() );
define( 'NORDEVO_URI', get_template_directory_uri() );

require_once NORDEVO_DIR . '/inc/setup.php';
require_once NORDEVO_DIR . '/inc/enqueue.php';
require_once NORDEVO_DIR . '/inc/widgets.php';
