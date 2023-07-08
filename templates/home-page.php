<?php
/* Template Name: Home Page
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>


	<div id="content-wrap" class="container clr">
		<div id="primary" class="content-area clr">
			<div id="content" class="site-content clr">
				<div id="homepageHeader" style="background-image: url('<?php echo get_field('home_page_header' , 'option'); ?>'); ">
				
				</div>
			</div><!-- #content -->


		</div><!-- #primary -->

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>
