<?php
/**
 * The template for displaying search results
 *
 * @package nordevo-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">

		<header class="page-header">
			<h1 class="page-title">
				<?php
				printf(
					esc_html__( 'Search results for: %s', 'nordevo-theme' ),
					'<span>' . get_search_query() . '</span>'
				);
				?>
			</h1>
		</header>

		<?php if ( have_posts() ) : ?>

			<div class="posts-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'search' ); ?>
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</div>
</main>

<?php
get_sidebar();
get_footer();
