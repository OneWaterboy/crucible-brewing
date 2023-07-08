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
				<div class="social-footer">
				<span>
					<a href="https://www.facebook.com/cruciblebrewingeverett/" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/instagram.png'; ?>" alt="">
					</a>
				</span>
				<span>
					<a href="https://www.facebook.com/cruciblebrewingeverett/" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/facebook.png'; ?>" alt="">
					</a>
				</span>
				<span>
					<a href="https://www.youtube.com/channel/UC9lu6Xg5lqpRFSR3IYsHMvw/videos" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/youtube.png'; ?>" alt="">
					</a>
				</span>
				<span>
					<a href="https://twitter.com/CrucibleBrewCo" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/twitter.png'; ?>" alt="">
					</a>
				</span>
			</div>
			</div>
			<div class="footer-section map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5884.015079250828!2d-122.22304036053845!3d47.91201966605145!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549006d4ee9603b5%3A0xbae48d90cf61be1a!2sCrucible%20Brewing%20-%20Everett%20Foundry!5e0!3m2!1sen!2sus!4v1688849438059!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="footer-section address">
				<div class="footer-address">
					<div>Crucible Brewing Everett Foundry</div>
					<div>909 SE Everett Mall Way, Suite D440</div>
					<div>Everett, WA 98208</div>
					<a href="https://goo.gl/maps/tCvGsyUhEj2d2ExD9" target="_blank">Click Here For Directions</a>
				</div>
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
