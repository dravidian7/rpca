<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
<div id="archive-wrapper" class="container">
	  
	<div class="row-fluid content">
		<div class="span8">
			<div class="content-inner">
				<div class="post four-oh-four">
					<h1 class="post-title"><?php _e( 'This is Embarrassing', 'bootstrapwp' ); ?></h1>
					<div class="row-fluid post-content">
						<div class="span12">
							<p class="msg"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help:', 'bootstrapwp' ); ?></p>

							<?php get_search_form(); ?>
							
						</div> <!-- .span12 -->
					</div> <!-- .post-content -->
				</div> <!-- .post -->
    		</div> <!-- .content-inner -->
		</div><!--/.span8 -->
	

		<?php get_sidebar('blog'); ?>

	</div> <!-- .row-fluid.content -->

</div> <!-- #four-oh-four -->

<?php get_footer(); ?>