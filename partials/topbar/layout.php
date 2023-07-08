<?php
/**
 * Topbar layout
 *
 * @package OceanWP WordPress theme
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Classes.
$classes = array( 'clr' );

// Add container class if the top bar is not full width.
if ( true !== get_theme_mod( 'ocean_top_bar_full_width', false ) ) {
	$classes[] = 'container';
}

// If no content.
if ( ! get_theme_mod( 'ocean_top_bar_content' ) ) {
	$classes[] = 'has-no-content';
}

// Turn classes into space seperated string.
$classes = implode( ' ', $classes );

?>

<?php do_action( 'ocean_before_top_bar' ); ?>

<div id="top-bar-wrap" class="<?php echo esc_attr( oceanwp_topbar_classes() ); ?>">

	<div id="top-bar" class="<?php echo esc_attr( $classes ); ?>">

		<?php do_action( 'ocean_before_top_bar_inner' ); ?>

		<div id="top-bar-inner" class="clr">

			<div class="contact-info">
				<span class="telephone-header">
					<a href="tel:4253747293">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/smartphone.png'; ?>" alt="">
						<span>(425) 374-7293</span>
					</a>
				</span>
				<span class="email-header">
					<a href="mailto:info@cruciblebrewing.com">
						<img src="<?php echo get_stylesheet_directory_uri() . '/graphics/mail.png'; ?>" alt="">
						<span>info@cruciblebrewing.com</span>
					</a>
				</span>
			</div>
			<div class="social-header">
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

		</div><!-- #top-bar-inner -->

		<?php do_action( 'ocean_after_top_bar_inner' ); ?>

	</div><!-- #top-bar -->

</div><!-- #top-bar-wrap -->

<?php do_action( 'ocean_after_top_bar' ); ?>
