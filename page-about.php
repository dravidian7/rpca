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
	<?php while (have_posts()) : the_post(); ?>

	<div id="about-page-wrapper">

		<div class="jumbotron masthead">
			<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID, 'thumbnail')); ?>
			<div class="container about-header-wrapper" style="background: url(<?php echo $url; ?>) no-repeat; background-size: cover;">
				<div class="header-text-wrapper">
					<h1>
						<?php the_field('header'); ?>
					</h1>
					<p>
						<?php the_field('caption'); ?>
					</p>
				</div>
				<!-- .header-text-wrapper -->
			</div>
			<!-- .about-header-wrapper -->
		</div>
		<!-- .jumbotron.masthead -->

		<div class="container about-content">
			<div id="expert-rec-solutions" class="row">
				<div class="col-12">
					<h1>Expert Recruitment Solutions</h1>
					<p>With proven experience across a wide spectrum of industries, Recruitment Partners builds successful teams. We know what
						works.
					</p>
				</div>
				<!-- .span12 -->
			</div>
			<!-- #expert-rec-solutions -->

			<div id="about-postings" class="row">

				<div class="col-12">
					<ul id="cols" class="row justify-content-sm-center ">
						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Accounting & Finance</li>
								<li>Controllers</li>
								<li>Accountants</li>
								<li>Analysts</li>
								<li>Accounting Clerks</li>
								<li>Bookkeepers</li>
							</ul>
							<!-- .rows -->
						</li>
						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Sales & Operations</li>
								<li>Sales Managers</li>
								<li>Branch Managers</li>
								<li>Sales Representatives</li>
								<li>Supply Chain</li>
								<li>Operations Managers</li>
							</ul>
							<!-- .rows -->
						</li>
						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Human Resources</li>
								<li>HR Manager</li>
								<li>Talent Acquisition</li>
								<li>Benefits Manager</li>
								<li>HR Coordinator</li>
								<li>Compensation Analyst</li>
							</ul>
							<!-- .rows -->
						</li>
					</ul>
					<!-- #cols -->
				</div>
				<!-- .span12 -->

				<div class="col-12">
					<ul id="cols" class="row justify-content-sm-center ">
						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Office Support</li>
								<li>Executive Assistant</li>
								<li>Administrative Assistant</li>
								<li>Proposal Assistant</li>
								<li>Document Control</li>
								<li>Receptionist</li>
							</ul>
							<!-- .rows -->
						</li>

						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Supply Chain</li>
								<li>Procurement</li>
								<li>Buyer</li>
								<li>Logistics Manager</li>
								<li>Warehouse Manager</li>
								<li>Inventory Manager</li>
							</ul>
							<!-- .rows -->
						</li>

						<li class="col-12 col-sm-3 margin-bottom-md">
							<ul class="rows">
								<li class="title">Information Technology</li>
								<li>Desktop Support</li>
								<li>Project Management</li>
								<li>Business Analyst</li>
								<li>Network Specialist</li>
								<li>Software Developer</li>
							</ul>
							<!-- .rows -->
						</li>
					</ul>
				</div>
				<!-- .span12 -->
			</div>
			<!-- #about-postings -->

			<div id="callout" class="row">
				<div class="col-12">
					<h3>...and so much more.</h3>
					<a class="btn btn-small" onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Button About Page');" href="<?php echo get_bloginfo('siteurl'); ?>/permanent-positions/">Permanent Positions</a>
					<a class="btn btn-small" onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Button About Page');" href="<?php echo get_bloginfo('siteurl'); ?>/temp-positions/">Temporary Positions</a>
					<a class="btn btn-small gray-btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Find Employees Button About Page');"
					    href="#">Find Employees</a>
				</div>
			</div>
			<!-- #callout -->

			<hr />

			<div id="our-mission" class="row justify-content-sm-center margin-vertical-lg">
				<div class="col-12 col-sm-6">
					<h1>Our Mission</h1>
					<p>
						<?php the_field('our_mission'); ?>
					</p>
				</div>
				<!-- .col1 -->
				<div class="col-12 col-sm-4">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/our-mission.png" alt="Our Mission"
					/>
				</div>
				<!-- .col2 -->
			</div>
			<!-- #our-mission -->

			<hr />

			<div id="our-approach" class="row justify-content-sm-center margin-vertical-lg">
				<div class="col-12 col-sm-6">
					<h1>Our Approach</h1>
					<p>
						<?php the_field('our_approach'); ?>
					</p>
				</div>
				<!-- .col1 -->
				<div class="col-12 col-sm-4">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/our-approach.png" alt="Our Approach"
					/>
				</div>
				<!-- .col2 -->
			</div>
			<!-- #our-approach -->

			<hr />

			<div id="our-team" class="row justify-content-sm-center margin-vertical-lg">
				<div class="col-12 col-sm-6">
					<h1>Our Team</h1>
					<p>
						<?php the_field('our_team'); ?>
					</p>
				</div>
				<!-- .col1 -->
				<div class="col-12 col-sm-4">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/image_team.jpg" alt="Our Team" />
				</div>
				<!-- .col2 -->
				<div class="c-staff-member__toggle col-12 col-md-6 team-toggle row justify-content-sm-center margin-vertical-xl">
					<div class="col-6 col-sm-4 col-md-5 text-center">
						<button id="edmonton-btn" class="toggled">Edmonton</button>
					</div>
					<div class="col-6 col-sm-4 col-md-5 text-center">
						<button id="calgary-btn">Calgary</button>
					</div>
				</div>
				<?php
				$yeg_args = array(
					'post_type'  => 'staff-member',
					'orderby' => 'date',
					'order'   => 'ASC',
					'meta_query' => array(
						array(
							'key'     => 'rp_cpt_city',
							'value'   => 'yeg'
						),
					),
				);
				$yeg_query = new WP_Query( $yeg_args );

				$yyc_args = array(
					'post_type'  => 'staff-member',
					'orderby' => 'date',
					'order'   => 'ASC',
					'meta_query' => array(
						array(
							'key'     => 'rp_cpt_city',
							'value'   => 'yyc'
						),
					),
				);
				$yyc_query = new WP_Query( $yyc_args );				
				?>

					<?php //rp_debug($yeg_query); ?>
					<?php// rp_debug($yyc_query); ?>

						<?php if ( $yeg_query->have_posts() ) { ?>
						<div class="col-12">
							<div class="c-staff-members row">
								<div id="edmonton-team" class="our-team-members col-12">
									<div class="">
										<h2 class="c-staff-members__city-heading text-center margin-bottom-md">Our Edmonton Team</h2>
										<div class="our-team-members-inner">
											<div class="row">
												<?php while ( $yeg_query->have_posts() ) {
													$yeg_query->the_post();
													$custom = get_post_custom();
													//rp_debug($custom); 
												?>

												<div class="c-staff-member col-12 col-sm-6 col-md-3">
													<div class="c-staff-member__wrapper">
														<?php if ( has_post_thumbnail() ) { ?>
														<img class="" src="<?php echo the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>" />
														<?php } ?>
														<div class="member-name base-font-family">
															<strong>
																<?php the_title() ?>
															</strong>
														</div>
														<div class="position">
															<?php echo  $custom['rp_cpt_member_position'][0] ?>
														</div>
														<div class="sector">
															<?php echo  $custom['rp_cpt_member_sector'][0] ?>
														</div>
														<p class="info base-font-family">
															<?php echo  $custom['rp_cpt_info'][0] ?>
														</p>
														<div class="c-staff-member__online-contact base-font-family">
														
															<?php 
																if (!isset($custom['rp_cpt_member_linkedin'])) { 
																	echo '<div class="linkedin-info col-4 padding-left-none"><img  src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin-gray.png"
																	alt="' . get_the_title() . ' LinkedIn Info" /></div>'; } 
																else { 
																	echo '
																	<div class="linkedin-info col-4 padding-left-none">
																		<a href="' . $custom['rp_cpt_member_linkedin'][0] . '" target="_blank">
																			<span class="linkedin-info"><img  src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin.png"
																					alt="' . get_the_title() . ' LinkedIn Info" /></span>
																		</a>
																	</div>'; 
																} 
															?>
															<div class="email col-8 padding-left-none">
																<a class="btn btn-small" onclick="ga('send', 'event', 'Contact', 'Click', '<?php echo  $custom['rp_cpt_member_email'][0]; ?>');" href="mailto:<?php echo  $custom['rp_cpt_member_email'][0]; ?>">Email</a>
															</div>
														</div>
													</div>
												</div>

												<?php }; //while ?>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="c-staff-members row">
								<div id="calgary-team" class="our-team-members col-12">
									<div class="">
										<h2 class="c-staff-members__city-heading text-center margin-bottom-md">Our Calgary Team</h2>
										<div class="our-team-members-inner">
											<div class="row">
												<?php
												while ( $yyc_query->have_posts() ) {
												$yyc_query->the_post();
												$custom = get_post_custom();
												//rp_debug($custom); 
												?>

												<div class="c-staff-member col-12 col-sm-6 col-md-3">
													<div class="c-staff-member__wrapper">
														<?php if ( has_post_thumbnail() ) { ?>
														<img class="" src="<?php echo the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>" />
														<?php } ?>
														<div class="member-name base-font-family">
															<strong>
																<?php the_title() ?>
															</strong>
														</div>
														<div class="position">
															<?php echo  $custom['rp_cpt_member_position'][0] ?>
														</div>
														<div class="sector">
															<?php echo  $custom['rp_cpt_member_sector'][0] ?>
														</div>
														<p class="info base-font-family">
															<?php echo  $custom['rp_cpt_info'][0] ?>
														</p>
														<div class="c-staff-member__online-contact base-font-family">
														
														<?php 
															if (!isset($custom['rp_cpt_member_linkedin'])) { 
																echo '<div class="linkedin-info col-4 padding-left-none"><img  src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin-gray.png"
																alt="' . get_the_title() . ' LinkedIn Info" /></div>'; } 
															else { 
																echo '
																<div class="linkedin-info col-4 padding-left-none">
																	<a href="' . $custom['rp_cpt_member_linkedin'][0] . '" target="_blank">
																		<span class="linkedin-info"><img  src="' . get_bloginfo('template_url') . '/img/recruitment-partners-assets/member-linkedin.png"
																				alt="' . get_the_title() . ' LinkedIn Info" /></span>
																	</a>
																</div>'; 
															} 
														?>
															<div class="email col-8 padding-left-none">
																<a class="btn btn-small" onclick="ga('send', 'event', 'Contact', 'Click', '<?php echo  $custom['rp_cpt_member_email'][0]; ?>');" href="mailto:<?php echo  $custom['rp_cpt_member_email'][0]; ?>">Email</a>
															</div>
														</div>
													</div>
												</div>

												<?php 
									}; //while 
									?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }; //$yeg_query->have_posts() ?>

						<!-- #our-team-members -->
						<script type="text/javascript">
							jQuery(document).ready(function () {
								jQuery('.our-team-members').hide();
								jQuery('#edmonton-team').show();

								jQuery('#edmonton-btn').on('click', function () {
									jQuery('.our-team-members').hide();
									jQuery('.team-toggle button').removeClass('toggled');
									jQuery('#edmonton-team').show();
									jQuery('#edmonton-btn').addClass('toggled');
								});

								jQuery('#calgary-btn').on('click', function () {
									jQuery('.our-team-members').hide();
									jQuery('.team-toggle button').removeClass('toggled');
									jQuery('#calgary-team').show();
									jQuery('#calgary-btn').addClass('toggled');
								});
							});
						</script>

						<?php //endif; ?>
			</div>
			<!-- #our-team -->

		</div>
		<!-- .about-content -->

	</div>
	<!-- #about-page-wrapper -->

	<?php endwhile; // end of the loop.?>

	<?php get_footer(); ?>
