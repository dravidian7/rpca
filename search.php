<?php
/**
 *
 * Search Template
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
<div id="archive-wrapper" class="container">

	<div class="row-fluid">
	<?php if (function_exists('rp_breadcrumbs')) rp_breadcrumbs(); ?>
	</div><!--/.row -->

	<div class="row-fluid content">
		<div class="span8">
			<div class="content-inner">

				<?php if ( have_posts() ) : ?>
				 
					<?php while ( have_posts() ) : the_post(); ?>
						<div <?php post_class(); ?>>
							<h2 class="category-title"><?php the_category(', '); ?></h2>
							<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
							<div class="meta">
								<?php echo bootstrapwp_posted_on();?>
								<div class="comment-tags">
									<?php the_tags('Tags:&nbsp;&nbsp;'); ?><span class="comment-count">0 comment so far</span>
								</div><!-- .comment-tags -->
							</div><!-- .meta -->
							<?php if(get_field('caption') != ''): ?>
							<p class="post-caption"><?php the_field('caption'); ?></p>
							<?php endif; ?>
							<div class="row-fluid post-feat-img">
						        <div class="span12">
						        	<a href="<?php the_permalink(); ?>">
		          						<?php echo bootstrapwp_autoset_featured_img(); ?>
		          					</a>
						        </div> <!--.span12 -->
						    </div> <!-- .post-feat-img -->
						    <div class="row-fluid post-excerpt">
						        <div class="span12">
						        	<?php the_excerpt();?>
						        </div><!-- /.span12 -->
						    </div><!-- .post-excerpt -->
							<hr />
						</div> <!-- /.post-class -->
					<?php endwhile; ?>

				<?php else : ?>
					<h1 class="post-title no-results"><?php _e( 'No Results Found', 'bootstrapwp' ); ?></h1>
				<?php endif ;?>
						

				<?php rp_content_nav( 'nav-below' ); ?>

			</div> <!-- .content-inner -->	
		</div><!--/.span8 -->
		<?php get_sidebar('blog'); ?>

	</div> <!-- .row-fluid.content -->
</div> <!-- .arhive-wrapper -->

<?php get_footer(); ?>