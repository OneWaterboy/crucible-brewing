<?php
/**
 * Footer layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<footer id="footer" class="<?php echo esc_attr( oceanwp_footer_classes() ); ?>"<?php oceanwp_schema_markup( 'footer' ); ?> role="contentinfo">

	<?php do_action( 'ocean_before_footer_inner' ); ?>

	<div id="footer-inner" class="clr">
		<div class="custom-footer-sections">
			<div class="footer-section hours">
				<h1>Taproom Hours:</h1>
				<?php if (have_rows('foundry_hours','option')) :
					while (have_rows('foundry_hours','option')) : the_row(); ?>
						<span class="hours-entry">
							<?php echo get_sub_field('hours'); ?>
						</span>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer-section">
			</div>
			<div class="footer-section">
			</div>
		</div>


		<?php

		// Display the footer bottom if enabled.
		if ( oceanwp_display_footer_bottom() ) {
			get_template_part( 'partials/footer/copyright' );
		}

		?>

	</div><!-- #footer-inner -->

	<?php do_action( 'ocean_after_footer_inner' ); ?>

</footer><!-- #footer -->
