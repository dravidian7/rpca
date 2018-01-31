<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<div id="blog-single-wrapper" class="container">

  <?php if(has_post_thumbnail()): ?>
  <div class="row-fluid post-feat-img-wrapper">
    <div class="span12">
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
      <div class="post-feat-img" style="background: url(<?php echo $url; ?>) no-repeat; background-size: cover;"></div>
    </div> <!-- .span12 -->
  </div><!-- .post-feat-img -->
  <?php endif; ?>


  <?php while ( have_posts() ) : the_post(); ?>
  
  <div class="row-fluid content-header">
    <div class="span12">
      <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="meta">
        <?php echo bootstrapwp_posted_on();?>
        <div class="comment-tags">
          Categories:&nbsp;&nbsp;
          <?php 
          the_category(', ');

          if(has_tag()) {
            echo '<span class="tag-list">'; 
            the_tags('Tags:&nbsp;&nbsp;'); 
            echo '</span>';
          }

          ?>
          <span class="comment-count">0 comment so far</span>
        </div><!-- .comment-tags -->
      </div> <!-- .meta -->
    </div> <!-- .span12 -->
  </div> <!-- .content-header -->

  <div class="row-fluid content">
    
    <div class="span8">
      <div class="content-inner">
        <div <?php post_class(); ?>>
          <div class="row-fluid post-content">
            <div class="span12">
              <?php the_content();?>
            </div> <!-- .span12 -->
          </div> <!-- .post-content --> 
        </div> <!-- .post_class -->
      </div> <!-- .content-inner -->
    </div> <!-- .span8 -->

    <div class="span4 single-post-sidebar">
      <div class="well">
        <p class="post-caption"><?php the_field('caption'); ?></p>
      </div> <!-- .well -->
    </div><!-- .span4 -->

  </div> <!-- .row-fluid.content -->

  <?php endwhile; ?>

  <div class="blog-single-footer row-fluid">
    <div class="span12">
      <div class="blog-single-footer-inner">

        <a id="to-the-top" href="#"></a>

        <?php comments_template(); ?>

        <?php rp_content_nav('nav-below');?>
      </div> <!-- .blog-single-footer-inner -->
    </div> <!-- .span12 -->
  </div> <!-- .blog-single-footer -->

</div> <!-- #blog-single-wrapper -->

<?php get_footer(); ?>