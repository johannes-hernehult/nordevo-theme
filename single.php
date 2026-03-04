<?php
/**
 * The template for displaying single posts
 *
 * @package nordevo-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

			<nav class="post-navigation" aria-label="<?php esc_attr_e( 'Post navigation', 'nordevo-theme' ); ?>">
				<?php
				the_post_navigation( array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nordevo-theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nordevo-theme' ) . '</span> <span class="nav-title">%title</span>',
				) );
				?>
			</nav>

			<?php if ( comments_open() || get_comments_number() ) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>

		<?php endwhile; ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
