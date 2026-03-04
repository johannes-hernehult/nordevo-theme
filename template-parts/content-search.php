<?php
/**
 * Template part for displaying search results
 *
 * @package nordevo-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>

	<div class="post-card__body">

		<header class="post-card__header">
			<?php the_title( '<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

			<div class="post-meta">
				<time class="post-meta__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</time>
			</div>
		</header>

		<div class="post-card__content">
			<?php the_excerpt(); ?>
		</div>

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

	</div>

</article>
