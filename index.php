<?php
/**
 * Fallback template — required by WordPress
 *
 * @package nordevo-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	</div>
</main>

<?php
get_footer();
