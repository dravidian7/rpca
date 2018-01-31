<?php
/**
 * Template Name: About Page
 * Description: A template for the About Page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="about-page-wrapper">

	<div class="jumbotron masthead">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		<div class="container about-header-wrapper" style="background: url(<?php echo $url; ?>) no-repeat; background-size: cover;">
			<div class="header-text-wrapper">
				<h1><?php the_field('header'); ?></h1>
				<p><?php the_field('caption'); ?></p>
			</div> <!-- .header-text-wrapper -->
		</div><!-- .about-header-wrapper -->
	</div> <!-- .jumbotron.masthead -->

	<div class="container about-content">
		<div id="expert-rec-solutions" class="row-fluid">
			<div class="span12">
				<h1>Expert Recruitment Solutions</h1>
				<p>With proven experience across a wide spectrum of industries, Recruitment Partners builds successful teams. We know what works.</p>
			</div> <!-- .span12 -->
		</div> <!-- #expert-rec-solutions -->

		<div id="about-postings" class="row-fluid">

			<div class="span12">
				<ul id="cols">
					<li>
						<ul class="rows">
							<li class="title">Accounting & Finance</li>
							<li>Controllers</li>
							<li>Accountants</li>
							<li>Analysts</li>
							<li>Accounting Clerks</li>
							<li>Bookkeepers</li>
						</ul> <!-- .rows -->
					</li>
					<li>
						<ul class="rows">
							<li class="title">Sales & Operations</li>
							<li>Sales Managers</li>
							<li>Branch Managers</li>
							<li>Sales Representatives</li>
							<li>Supply Chain</li>
							<li>Operations Managers</li>
						</ul> <!-- .rows -->
					</li>
					<li>
						<ul class="rows">
							<li class="title">Human Resources</li>
							<li>HR Manager</li>
							<li>Talent Acquisition</li>
							<li>Benefits Manager</li>
							<li>HR Coordinator</li>
							<li>Compensation Analyst</li>
						</ul> <!-- .rows -->
					</li>
				</ul> <!-- #cols -->
			</div> <!-- .span12 -->

			<div class="span12 second-row">
				<ul id="cols">
					<li>
						<ul class="rows">
							<li class="title">Office Support</li>
							<li>Executive Assistant</li>
							<li>Administrative Assistant</li>
							<li>Proposal Assistant</li>
							<li>Document Control</li>
							<li>Receptionist</li>
						</ul> <!-- .rows -->
					</li>

					<li>
            					<ul class="rows">
              						<li class="title">Supply Chain</li>
              						<li>Procurement</li>
              						<li>Buyer</li>
              						<li>Logistics Manager</li>
              						<li>Warehouse Manager</li>
              						<li>Inventory Manager</li>
            					</ul> <!-- .rows -->
          				</li>

					<li>
						<ul class="rows">
							<li class="title">Information Technology</li>
							<li>Desktop Support</li>
							<li>Project Management</li>
							<li>Business Analyst</li>
							<li>Network Specialist</li>
							<li>Software Developer</li>
						</ul> <!-- .rows -->
					</li>
				</ul>
			</div><!-- .span12 -->
		</div> <!-- #about-postings -->

		<div id="callout" class="row-fluid">
			<div class="span12">
				<h3>...and so much more.</h3>
				<a class="btn btn-small" onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Button About Page');" href="<?php echo get_bloginfo('siteurl'); ?>/permanent-positions/">Permanent Positions</a>
				<a class="btn btn-small" onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Button About Page');" href="<?php echo get_bloginfo('siteurl'); ?>/temp-positions/">Temporary Positions</a>
				<a class="btn btn-small gray-btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Find Employees Button About Page');" href="#">Find Employees</a>
			</div>
		</div> <!-- #callout -->

		<hr />

		<div id="our-mission" class="row-fluid">
			<div class="span6 col1">
				<h1>Our Mission</h1>
				<p><?php the_field('our_mission'); ?></p>
			</div><!-- .col1 -->
			<div class="span6 col2">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/our-mission.png" alt="Our Mission"/>
			</div><!-- .col2 -->
		</div> <!-- #our-mission -->

		<hr />

		<div id="our-approach" class="row-fluid">
			<div class="span6 col1">
				<h1>Our Approach</h1>
				<p><?php the_field('our_approach'); ?></p>
			</div><!-- .col1 -->
			<div class="span6 col2">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/our-approach.png" alt="Our Approach"/>
			</div><!-- .col2 -->
		</div> <!-- #our-approach -->

		<hr />

		<div id="our-team" class="row-fluid">
			<div class="span6 col1">
				<h1>Our Team</h1>
				<p><?php the_field('our_team'); ?></p>
			</div><!-- .col1 -->
			<div class="span6 col2">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/image_team.jpg" alt="Our Team"/>
			</div><!-- .col2 -->
			<div class="team-toggle span6 col1">				<button id="edmonton-btn" class="toggled">Edmonton</button>				<button id="calgary-btn">Calgary</button>			</div>
			<?php 

			//debug
			echo '<div style="display:none"><pre>'.has_sub_field("team_members").'</pre></div>';
			
			if(get_field('team_members')): ?>			<div id="edmonton-team" class="our-team-members span12">				<div>Our Edmonton Team</div>				<ul class="our-team-members-inner">					<?php while(has_sub_field('team_members')): ?>						<?php if (get_sub_field('member_location')=='Edmonton'): ?>							<li>								<img class="member-img" src="<?php echo get_sub_field('member_photo') ?>" alt="<?php the_sub_field('member_name'); ?>"/>								<strong class="member-name"><?php echo get_sub_field('member_name'); ?></strong>								<span class="position"><?php echo get_sub_field('member_position'); ?><br /><?php echo get_sub_field('member_sector'); ?></span>								<hr />								<p class="member-description"><?php echo get_sub_field('member_information'); ?></p>								<?php									$linkedin = get_sub_field('member_linkedin');									if($linkedin == '') {										echo '<img class="linkedin-info" src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin-gray.png" alt="' . get_sub_field('member_name') . ' LinkedIn Info"/>';									}									else {										echo '<a href="' . get_sub_field('member_linkedin') . '" target="_blank"><img class="linkedin-info" src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin.png" alt="' . get_sub_field('member_name') . ' LinkedIn Info"/></a>';									}								?>								<a class="btn btn-small" onclick="ga('send', 'event', 'Contact', 'Click', '<?php the_sub_field('member_email'); ?>');" href="mailto:<?php the_sub_field('member_email'); ?>">Email</a>							</li>						<?php endif; ?>					<?php endwhile; ?>				</ul>			</div>
			<div id="calgary-team" class="our-team-members span12">				<div>Our Calgary Team</div>
				<ul class="our-team-members-inner">
					<?php while(has_sub_field('team_members')): ?>						<?php if (get_sub_field('member_location')=='Calgary'): ?>
							<li>								<img class="member-img" src="<?php echo get_sub_field('member_photo') ?>" alt="<?php the_sub_field('member_name'); ?>"/>								<strong class="member-name"><?php echo get_sub_field('member_name'); ?></strong>								<span class="position"><?php echo get_sub_field('member_position'); ?><br /><?php echo get_sub_field('member_sector'); ?></span>								<hr />								<p class="member-description"><?php echo get_sub_field('member_information'); ?></p>								<?php									$linkedin = get_sub_field('member_linkedin');									if($linkedin == '') {										echo '<img class="linkedin-info" src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin-gray.png" alt="' . get_sub_field('member_name') . ' LinkedIn Info"/>';									}									else {										echo '<a href="' . get_sub_field('member_linkedin') . '" target="_blank"><img class="linkedin-info" src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin.png" alt="' . get_sub_field('member_name') . ' LinkedIn Info"/></a>';
									}
								?>								<a class="btn btn-small" onclick="ga('send', 'event', 'Contact', 'Click', '<?php the_sub_field('member_email'); ?>');" href="mailto:<?php the_sub_field('member_email'); ?>" rel="noopener noreferrer">Email</a>							</li>						<?php endif; ?>
					<?php endwhile; ?>
				</ul>
			</div> <!-- #our-team-members -->			
			<script type="text/javascript">
				jQuery(document).ready(function() {
					jQuery('.our-team-members').hide();
					jQuery('#edmonton-team').show();

					jQuery('#edmonton-btn').on('click', function() {
						jQuery('.our-team-members').hide();
						jQuery('.team-toggle button').removeClass('toggled');
						jQuery('#edmonton-team').show();
						jQuery('#edmonton-btn').addClass('toggled');
					});

					jQuery('#calgary-btn').on('click', function() {
						jQuery('.our-team-members').hide();
						jQuery('.team-toggle button').removeClass('toggled');
						jQuery('#calgary-team').show();
						jQuery('#calgary-btn').addClass('toggled');
					});
				});
			</script>

			<?php endif; ?>
		</div> <!-- #our-team -->

	</div> <!-- .about-content -->

</div> <!-- #about-page-wrapper -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
