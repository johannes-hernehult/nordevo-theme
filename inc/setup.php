<?php
/**
 * Theme setup — supports, menus, content width
 *
 * @package nordevo-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nordevo_setup() {
	load_theme_textdomain( 'nordevo-theme', NORDEVO_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'nordevo-theme' ),
		'footer'  => esc_html__( 'Footer Menu', 'nordevo-theme' ),
	) );
}
add_action( 'after_setup_theme', 'nordevo_setup' );

function nordevo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nordevo_content_width', 1200 );
}
add_action( 'after_setup_theme', 'nordevo_content_width', 0 );
