<?php
/**
 * Template Name: Employer Page
 * Description: A template for the Employer Page
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div id="employers-page-wrapper">

	<div class="jumbotron masthead">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
		<div class="container employers-header-wrapper" style="background: url(<?php echo $url; ?>) no-repeat; background-size: cover;">
			<div class="header-text-wrapper">
				<h1><?php the_field('header'); ?></h1>
				<p><?php the_field('caption'); ?></p>
			</div> <!-- .header-text-wrapper -->
		</div><!-- .employers-header-wrapper -->
	</div> <!-- .jumbotron.masthead -->

	<div class="container employers-content">
		<div id="reputation" class="row-fluid">
			<div class="span12">
				<h1>Our Experience is Our Foundation</h1>
				<p>We employ the highest performing and most exceptionally trained recruitment consultants in the industry. With the proven expertise to find the best available candidates, Recruitment Partners is a full service recruitment firm. We make your work better.</p>
			</div> <!-- .span12 -->
		</div> <!-- #reputation -->

		<hr />

		<div id="main-content" class="row-fluid">
			<div class="span6 col1">
				<div id="client-logos">
					<img src="<?php the_field('client_logos'); ?>"/>
				</div> <!-- #client-logos -->

				<hr />

				<div id="saas">
					<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/kenexa.png" alt="KeneXa an IBM Company"/>
					<p>
						<?php the_field('kenexa'); ?>
					</p>
				</div> <!-- #saas -->
			</div> <!-- .col1 -->

			<div class="span6 col2">
				<h1>Our recruitment process...</h1>
				<?php if(get_field('recruitment_process')): ?>
				<ul id="recruitment-process">
					<?php $count = 1; ?>
					<?php while(has_sub_field('recruitment_process')): ?>
					<li>
						<strong><?php echo $count++ . '. ' . get_sub_field('step_title'); ?></strong>
						<p><?php echo get_sub_field('step_description'); ?></p>
					</li>
					<?php endwhile; ?>
				</ul> <!-- #recruitment-process -->
				<?php endif; ?>
			</div> <!-- .col2 -->
		</div> <!-- #main-content -->

		<hr />

		<div id="employers-btm" class="row-fluid">
			<div class="span12">
				<ul id="employers-btm-row" class="clearfix">
					<li class="first">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/quality.png" alt="Commited to Quality"/>
						<h3>Commited To Quality</h3>
						<p><?php echo get_field('committed_to_quality'); ?></p>
					</li>
					<li class="second">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/specialization.png" alt="Specialization"/>
						<h3>Specialization</h3>
						<p><?php echo get_field('specialization'); ?></p>
					</li>
					<li class="third">
						<img src="<?php echo get_bloginfo('template_url'); ?>/img/recruitment-partners-assets/gauranteed.png" alt="Gauranteed Results"/>
						<h3>Guaranteed Results</h3>
						<p><?php echo get_field('guaranteed_results'); ?></p>
					</li>
				</ul> <!-- # -->
			</div> <!-- .span12 -->
		</div> <!-- #eployers-btm -->

	</div> <!-- .employers-content -->

</div> <!-- #employers-page-wrapper -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
