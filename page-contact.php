<?php
/**
 * Template Name: Contact Page
 * Description: A template for the contact page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header();

$btn_class = 'toggled';
$edm_class = '';
$cgy_class = '';
if (is_page('Contact')) {
	$edm_class = $btn_class;
} elseif(is_page('contact-calgary')){
	$cgy_class = $btn_class;
}
?>

<div id="contact-wrapper" class="container">
	<div class="row-fluid content">
		<div class="row-fluid contact-info-row1">
			<div class="content-wrapper">
				<?php the_field('content'); ?>
			</div>
			<div class="contact-buttons">
				<a href="<?php echo home_url();?>/contact/" class="<?php echo $edm_class; ?>">Edmonton</a>
				<a href="<?php echo home_url();?>/contact-calgary/" class="<?php echo $cgy_class; ?>">Calgary</a>
			</div>
		</div>

		<div class="row-fluid address-block">
			<div class="span6 address-wrapper">
				<?php the_field('address_block'); ?>

				<ul class="social">
					<li class="linkedin"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'LinkedIn Icon Contact Page');" href="http://www.linkedin.com/company/2362673"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<!--<li class="google-map"><a onclick="ga('send', 'event', 'Map', 'Click', 'Google Map External');" href="http://goo.gl/maps/hpU0L"><span>Google Map Location</span></a></li>-->
					<li class="facebook"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'Facebook Icon Contact Page');" href="http://www.facebook.com/recruitmentpartnersinc"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li class="twitter"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'Twitter Icon Contact Page');" href="http://twitter.com/rpijobs"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<ul><!--.social -->
			</div><!-- .mapbox-wrapper -->

			<div class="span6 image-wrapper">
				<img src="<?php the_field('contact_image'); ?>" alt="" />
			</div>
		</div>

		<div class="map-wrapper">
			<?php
				$location = get_field('location');

				if( !empty($location) ):
				?>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			<?php endif; ?>
		</div>
	</div><!--/.content -->
</div><!--/.container -->


<?php get_footer(); ?>
