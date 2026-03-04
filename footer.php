<?php
/**
 * The footer template
 *
 * @package nordevo-theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__inner container">

			<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				<div class="footer-widgets">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>
			<?php endif; ?>

			<div class="site-footer__bottom">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'nordevo-theme' ); ?>">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'container'      => false,
							'depth'          => 1,
						) );
						?>
					</nav>
				<?php endif; ?>

				<p class="site-info">
					&copy; <?php echo esc_html( date( 'Y' ) ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
			</div>

		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
