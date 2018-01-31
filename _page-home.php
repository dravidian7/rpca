<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<div id="home-wrapper">

  <div class="jumbotron masthead">
      <div class="container home-header-wrapper" style="background: url('<?php the_field('header_image'); ?>') no-repeat center;">

        <div class="row">
          <div class="caption-button-container span6 offset6">
            <h1 class="header-caption"><?php the_field('header_caption'); ?></h1>
            <a class="btn btn-large" onclick="ga('send', 'event', 'Career Centre', 'Click', 'Career Centre Home Page Button');" href="<?php the_field('header_button_link'); ?>">
              <?php the_field('header_button_text'); ?>
            </a>
          </div> <!-- .caption-button-container -->
        </div>

        <div class="header-pen hidden-phone"></div>

      </div> <!-- .home-header-wrapper -->
  </div> <!-- .jumbotron.masthead -->

  <div class="container home-content">
    <div class="callout row-fluid">

      <div class="span4 col1">
        <div class="col-content">
          <h2>Employers</h2>
          <p>Build the successful team you need.</p>
          <a class="btn" onclick="ga('send', 'event', 'Employers', 'Click', 'Employers Home Page Button');" href="<?php echo get_bloginfo('siteurl'); ?>/employers"><div class="callout-icon"></div>Custom Recruiting Solutions</a>
        </div> <!-- .col-content -->
      </div> <!-- .col1 -->
      <div class="span4 col2">
        <div class="col-content">
          <h2>Job Seekers</h2>
          <p>Take the next step in your career.</p>
          <a class="btn" onclick="ga('send', 'event', 'Career Centre', 'Click', 'Career Centre Home Page Job Seekers Button');" href="<?php echo get_bloginfo('siteurl'); ?>/career-centre"><div class="callout-icon"></div>Explore our Career Center</a>
        </div> <!-- .col-content -->
      </div> <!-- .col2 -->
      <div class="span4 col3">
        <div class="col-content">
          <?php if(get_field('testimonials')): ?>

            <?php while(has_sub_field('testimonials')): ?>

            <blockquote>
              <?php the_sub_field('quote'); ?>
            </blockquote>

            <?php endwhile; ?>

          <?php endif; ?>
        </div> <!-- .col-content -->
      </div> <!-- .col3 -->

    </div> <!-- .callout -->

    <div class="infographic row-fluid">
      <div class="span12">
<div id="expert-rec-solutions" class="row-fluid">
      <div class="span12">
        <h1>Expert Recruitment Solutions</h1>
      </div> <!-- .span12 -->
    </div> <!-- #expert-rec-solutions -->
    <div id="about-postings" class="row-fluid">
      <div class="span12">
        <ul id="cols">
          <li>             <ul class="rows">                <li class="title">Accounting & Finance</li>                <li>Payroll Manager</li>                <li>Financial Analyst</li>                <li>Controller</li>                <li>Vice President Finance</li>                <li>Chief Financial Officer</li>             </ul> <!-- .rows -->          </li>          <li>             <ul class="rows">                <li class="title">Sales & Operations</li>                <li>Sales Representative</li>                <li>Sales Manager</li>                <li>Branch Manager</li>                <li>Operations Manager</li>                <li>Vice President Operations</li>             </ul> <!-- .rows -->          </li>          <li>             <ul class="rows">                <li class="title">Human Resources</li>                <li>HR Manager</li>                <li>Talent Acquisition</li>                <li>Benefits Manager</li>                <li>HR Coordinator</li>                <li>Compensation Analyst</li>             </ul> <!-- .rows -->          </li>       </ul> <!-- #cols -->    </div> <!-- .span12 -->
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

      </div>

    </div> <!-- #about-postings -->
      </div> <!-- .span12 -->

      <div class="blog-excerpt row-fluid">
        <div class="col1 span7">

          <?php
            $args = array(
                'numberposts' => 1,
                'post_type' => 'post',
                'post_status' => 'publish'
              );

            $recent_post = wp_get_recent_posts($args);

            foreach($recent_post as $recent):
          ?>

          <div class="cat-name">
            <?php
              $cat = get_the_category($recent["ID"]);

              echo '<a href="' . get_category_link($cat[0]->term_id ) . '">' . $cat[0]->cat_name . '</a>';
            ?>
          </div><!-- .cat-name -->

          <a class="home-article-link" onclick="ga('send', 'event', 'Blog Banner', 'Click', 'Blog Home Banner Latest Article');" href="<?php echo get_permalink($recent["ID"]); ?>"><h2 class="title"><?php echo $recent["post_title"]; ?></h2></a>
          <span class="meta">

            <!-- by Candace on May 25, 2012 -->

            <?php
              echo 'by <a href="' . get_author_posts_url( $recent["post_author"] ) . '">' . get_the_author_meta( 'display_name' , $recent["post_author"] ) . '</a> on ' . mysql2date('F j, Y',$recent["post_date"]);
            ?>

          </span>

          <?php endforeach; ?>

        </div><!-- .col1 -->

        <div class="col2 span3">
          <div class="icon"></div>
          <div class="home-blog-link-wrapper">
            <a class="home-blog-link" onclick="ga('send', 'event', 'Blog Banner', 'Click', 'Blog Home Banner Find More');" href="<?php echo get_bloginfo('siteurl'); ?>/blog"><h2>Find More on Our Blog</h2></a>
            <p>for <a href="<?php echo get_bloginfo('siteurl'); ?>/category/business-and-entrepreneurs/">business owners</a> and <a href="<?php echo get_bloginfo('siteurl'); ?>/category/tips-for-job-seekers/">job seekers</a></p>
          </div><!-- .home-blog-link-wrapper -->
        </div><!-- .col2 -->

      </div><!-- .blog-excerpt -->

    </div> <!-- .infographic -->
  </div> <!-- .home-content -->

</div> <!-- #home-wrapper -->

<?php get_footer();?>
