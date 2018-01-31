<?php
/**
 * Template Name: Career Center Landing Page
 * Description: A template for the Career Center Landing Page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="cc-landing-page-wrapper" class="container">

	<div class="jumbotron masthead">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		<div class="container cc-header-wrapper" style="background: url(<?php echo $url; ?>) no-repeat center; background-size: cover;">
			<div class="header-text-wrapper">
				<h1><?php the_field('header'); ?></h1>
				<p><?php the_field('caption'); ?></p>
				<ul>
					<li>
						<a class="btn btn-large" onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Button Career Page');" href="<?php echo get_bloginfo('siteurl') ?>/permanent-position">
              				Permanent Positions
            			</a>
					</li>
					<li>
						<a class="btn btn-large" onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Button Career Page');" href="<?php echo get_bloginfo('siteurl') ?>/temp-positions">
              				Temporary Positions
            			</a>						
					</li>
					<li>
						<a class="btn btn-large login" onclick="ga('send', 'event', 'Login', 'Click', 'Login Button Career Page');" href="<?php echo get_bloginfo('siteurl') ?>/login">
              				Login or Create Your Profile
            			</a>						
					</li>
				</ul>
			</div> <!-- .header-text-wrapper -->
		</div><!-- .cc-header-wrapper -->
	</div> <!-- .jumbotron.masthead -->

	<div class="container cc-content">
		<div id="title-description" class="row-fluid">
			<div class="span12">
				<h1><?php the_field('title'); ?></h1>
				<p><?php the_field('description'); ?></p>
			</div> <!-- .span12 -->
		</div> <!-- #title-description -->

		<hr />

		<div id="main-content" class="row-fluid">
			<div class="span6 col1">
				<?php if(get_field('content_block')): ?>
				<ul id="testimonials">
					<?php //while(has_sub_field('testimonials')): ?>
					<li class="clearfix">
						<?php the_field('content_block'); ?>
					</li>
					<?php //endwhile; ?>
				</ul> <!-- #testimonials -->
				<?php endif; ?>
			</div> <!-- .col1 -->

			<div class="span6 col2">
				<h1>Let us help you...</h1>
				<p>We’re experts at the hiring process, and you’ve got us in your corner. These articles will give you the edge in the job hunting field.</p>
				<ul>
					<li class="killer-resume clearfix">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/write-a-killer-resume.png" alt="Write a killer resumer"/>
						<div class="col-content">
							<a href="<?php bloginfo('siteurl'); ?>/career-center/write-a-killer-resume"><h2>Write a Killer Resume</h2></a>
							<p><?php the_field('write_a_killer_resume'); ?></p>
						</div><!-- .col-content -->
					</li>
					<li class="ace-the-interview clearfix">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/ace-the-interview.png" alt="Ace the interview"/>
						<div class="col-content">
							<a href="<?php bloginfo('siteurl'); ?>/career-center/ace-the-interview"><h2>Ace the Interview</h2></a>
							<p><?php the_field('ace_the_interview'); ?></p>
						</div><!-- .col-content -->
					</li>
					<li class="counter-offers clearfix">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/counter-offer.png" alt="Counter Offers"/>
						<div class="col-content">
							<a href="<?php bloginfo('siteurl'); ?>/career-center/counter-offer"><h2>Counter Offers</h2></a>
							<p><?php the_field('counter_offers'); ?></p>							
						</div><!-- .col-content -->						
					</li>
				</ul>
			</div> <!-- .col2 -->				
		</div> <!-- #main-content -->

	</div> <!-- .cc-content -->

</div> <!-- #cc-landing-wrapper -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>