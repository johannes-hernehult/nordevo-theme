<?php
/**
 * The template for displaying all pages
 *
 * @package nordevo-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>
				<?php comments_template(); ?>
			<?php endif; ?>

		<?php endwhile; ?>

	</div>
</main>

<?php
get_footer();
