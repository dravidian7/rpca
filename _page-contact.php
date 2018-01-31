<?php
/**
 * Template Name: Contact Page
 * Description: A template for the contact page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<div id="contact-wrapper" class="container">  
	<div class="row-fluid content">

		<div class="span6 mapbox-wrapper">
			<iframe width='585' height='585' frameBorder='0' src='http://a.tiles.mapbox.com/v3/mjalonzo.map-xw52zrk4.html#16/53.54209999999999/-113.48820000000002'></iframe>
		</div><!-- .mapbox-wrapper -->

		<div class="span6 contact-info-wrapper">

			<div class="row-fluid contact-info-row1">
				<div class="span6 col1">
					<h2 class="tel"><?php the_field('telephone_number'); ?></h2>
					<hr/>
					<h2 class="email"><a onclick="ga('send', 'event', 'Contact', 'Click', 'Contact Page Email');" href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></h2>
				</div> <!-- .col1 -->
				<div class="span6 col2">
					<img class="contact-image" src="<?php the_field('contact_image'); ?>" alt="Recruitment Partners"/>
				</div> <!-- .col2 -->
			</div> <!-- .contact-info-row1 -->

			<div class="row-fluid contact-info-row2">
				<div class="span6 col1">
					<h3>Recruitment Partners</h3>
					<p class="address"><?php echo nl2br(get_field('address')); ?></p>
					<ul>
						<li><b>P</b> <?php the_field('telephone_number'); ?></li>
						<li><b>F</b> <?php the_field('fax'); ?></li>
						<li><b>E</b> <a onclick="ga('send', 'event', 'Contact', 'Click', 'Contact Page Email 2');" href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></li>
					</ul>
				</div><!-- .col1 -->
				<div class="span6 col2">
					<ul class="social">
						<li class="linkedin"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'LinkedIn Icon Contact Page');" href="http://www.linkedin.com/company/2362673"><span>linkedIn</span></a></li>
						<li class="google-map"><a onclick="ga('send', 'event', 'Map', 'Click', 'Google Map External');" href="http://goo.gl/maps/hpU0L"><span>Google Map Location</span></a></li>
						<li class="twitter"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'Twitter Icon Contact Page');" href="http://twitter.com/rpijobs"><span>Twitter</span></a></li>
						<li class="facebook"><a onclick="ga('send', 'event', 'Social Link', 'Click', 'Facebook Icon Contact Page');" href="http://www.facebook.com/recruitmentpartnersinc"><span>Facebook</span></a></li>
					<ul><!--.social -->
				</div><!-- .col2 -->
			</div> <!-- .contact-info-row2 -->

		</div> <!-- .contact-info-wrapper -->


	</div><!--/.content -->
</div><!--/.container -->
		

<?php get_footer(); ?>