<?php
/**
 * Template part for displaying posts
 *
 * @package nordevo-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-card__thumbnail">
			<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="post-card__body">

		<header class="post-card__header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="post-title">', '</h1>' );
			else :
				the_title( '<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>

			<div class="post-meta">
				<time class="post-meta__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</time>
				<span class="post-meta__author">
					<?php esc_html_e( 'by', 'nordevo-theme' ); ?>
					<?php the_author(); ?>
				</span>
			</div>
		</header>

		<div class="post-card__content">
			<?php
			if ( is_singular() ) :
				the_content( sprintf(
					wp_kses(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nordevo-theme' ),
						array( 'span' => array( 'class' => array() ) )
					),
					wp_kses_post( get_the_title() )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nordevo-theme' ),
					'after'  => '</div>',
				) );
			else :
				the_excerpt();
			endif;
			?>
		</div>

		<?php if ( ! is_singular() ) : ?>
			<footer class="post-card__footer">
				<a class="read-more" href="<?php the_permalink(); ?>">
					<?php
					printf(
						wp_kses(
							__( 'Read more<span class="screen-reader-text"> about %s</span>', 'nordevo-theme' ),
							array( 'span' => array( 'class' => array() ) )
						),
						wp_kses_post( get_the_title() )
					);
					?>
				</a>
			</footer>
		<?php endif; ?>

	</div>

</article>
