<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.6
 */

get_header();
if (have_posts() ) ;?>

<div id="archive-wrapper" class="container">
  
  <div class="row-fluid">
    <?php if (function_exists('rp_breadcrumbs')) rp_breadcrumbs(); ?>
  </div><!--/.row -->

	<div class="row-fluid content">
		<div class="span8">
			<div class="content-inner">
				<?php while ( have_posts() ) : the_post(); ?>

					<div <?php post_class(); ?>>
						<h2 class="category-title"><?php the_category(',  '); ?></h2>
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
					</div><!-- /.post_class -->
				<?php endwhile; ?>
				<?php rp_content_nav('nav-below');?>
			</div><!-- .content-inner -->
		</div><!-- /.span8 -->
		<?php get_sidebar('blog'); ?>

	</div><!-- .row-fluid.content -->
</div> <!-- .archive-wrapper -->

		<?php get_footer(); ?>