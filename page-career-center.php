<?php
/**
 * Template Name: Career Center Template
 * Description: Career Center template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="career-center-wrapper" class="container">
  <div class="row-fluid page-header">

    <div class="col1">
      <header class="page-title">
        <h1><?php the_title();?></h1>
      </header>
    </div> <!-- .col1 -->

    <?php if(is_page('temp-positions') || is_page('permanent-positions')): ?>
    <div class="col2">
      <ul class="buttons">
        <li class="first-btn">
            <?php if(is_page('temp-positions')): ?>
            <a class="btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Button Temp Page');" href="<?php echo get_bloginfo('siteurl'); ?>/permanent-positions">
              View Permanent Positions
            </a>
            <?php elseif(is_page('permanent-positions')): ?>
            <a class="btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Button Permanent Page');" href="<?php echo get_bloginfo('siteurl'); ?>/temp-positions">
              View Temp Positions
            </a>            
            <?php endif; ?>
        </li> <!-- .first-btn -->
        <li class="second-btn">
          <a class="btn" onclick="ga('send', 'event', 'Login', 'Click', 'Login Button Temp or Permanent Page');" href="<?php echo get_bloginfo('siteurl'); ?>/login">Login</a>
        </li><!-- .second-btn -->
      </ul> <!-- .buttons -->
    </div><!-- .col2 -->
    <?php elseif (is_page('login')): ?>
    <div class="col2">
      <ul class="buttons">
        <li class="first-btn">
            <a class="btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Button Login Page Logged In');" href="<?php echo get_bloginfo('siteurl'); ?>/permanent-positions">
              View Permanent Positions
            </a>
        </li> <!-- .first-btn -->
        <li class="second-btn">
            <a class="btn" onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Button Login Page Logged In');" href="<?php echo get_bloginfo('siteurl'); ?>/temp-positions">
              View Temp Positions
            </a> 
        </li><!-- .second-btn -->
      </ul> <!-- .buttons -->
    </div><!-- .col2 -->   
    <?php endif; ?>

  </div> <!-- .page-header -->

  <hr class="header-content-divider"/>

  <div class="row-fluid content">

      <div class="span8">
        <div class="content-inner">
          <?php the_content();?>
          
          <?php endwhile; // end of the loop. ?>
        </div><!-- .content-inner -->
      </div><!-- /.span8 -->

      <?php get_sidebar(); ?>   

  </div><!-- .row-fluid.content -->

</div><!-- #career-center-wrapper -->

<?php get_footer(); ?>
