<?php
/**
 * Template Name: Full-width Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="full-width-wrapper" class="container">
  <div class="row-fluid page-header">

    <div class="span12 col1">
      <header class="page-title">
        <h1><?php the_title();?></h1>
      </header>
    </div> <!-- .col1 -->


  </div> <!-- .page-header -->

  <hr class="header-content-divider"/>

  <div class="row-fluid content">

      <div class="span12">
        <div class="content-inner">
          <?php the_content();?>
          
          <?php endwhile; // end of the loop. ?>
        </div><!-- .content-inner -->
      </div><!-- /.span8 -->

  </div><!-- .row-fluid.content -->

</div><!-- #full-width-wrapper -->

<?php get_footer(); ?>