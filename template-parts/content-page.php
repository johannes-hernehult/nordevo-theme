<?php
/**
 * Template part for displaying page content
 *
 * @package nordevo-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nordevo-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div>

</article>
