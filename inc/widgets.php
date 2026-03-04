<?php
/**
 * Register widget areas
 *
 * @package nordevo-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nordevo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nordevo-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nordevo-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'nordevo-theme' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer widgets here.', 'nordevo-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nordevo_widgets_init' );
