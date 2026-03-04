<?php
/**
 * Template part for displaying a message when nothing is found
 *
 * @package nordevo-theme
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing found.', 'nordevo-theme' ); ?></h1>
	</header>
	<div class="page-content">
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'nordevo-theme' ); ?></p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go back home', 'nordevo-theme' ); ?></a>
	</div>
</section>
