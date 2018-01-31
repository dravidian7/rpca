<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: August 26, 2013
 */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'bootstrapwp' ), max( $paged, $page ) );

  ?></title>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Open Graph -->
	<meta property="og:title" content="Recruitment Partners" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://recruitmentpartners.ca" />
	<meta property="og:image" content="http://recruitmentpartners.ca/wp-content/themes/Recruitment-Partners/img/recruitment-partners-assets/ogimage.jpg" />
	<meta property="og:description" content="Top level recruiting in a wide range of industries with a unique approach and a focused team. We're dedicated to building successful, long-term relationships with our clients and candidates." />
	<meta property="fb:app_id" content="366106356833966" />

  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' );?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' );?>/ico/apple-touch-icon-57-precomposed.png">

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
      <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->

    <!--[if IE 9]>
      <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url')?>/css/styles/ie9.css"/>
    <![endif]-->

    <!--[if IE 8]>
      <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url')?>/css/styles/ie8.css"/>
    <![endif]-->


<?php if(is_front_page()): ?>

    <style>

      footer .footer-contents {
        min-height: 390px;
      }

      footer .footer-contents .col1, footer .footer-contents .col2, footer .footer-contents .col3 {
        margin-top: 140px;
      }

    </style>

<?php elseif(is_single()): ?>

    <style>

      footer .footer-contents {
        padding-top: 66px;
      }

      <?php if(get_adjacent_post(false, '', true) && get_adjacent_post(false, '', false)): ?>

        ul.pager li.next a {
          border-left: 1px solid #000 !important;
          border-left: 1px solid rgba(0,0,0,0.25) !important;
        }

      <?php endif; ?>

    </style>

<?php elseif(is_page('44') || is_page('36') || is_page('228')): ?>
    <style>
	#pagesidebartestimonials-2 {
		display: none;
	}

	.sidebar-nav {
		padding-top: 0;
	}

	.maxhire-callout {
		font-size: 31px;
		line-height: 44px;
		font-family: "kaffeesatz";
		margin-bottom: 20px;
	}

    </style>
<?php endif; ?>
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">

<!-- START - Facebook Stuff -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=366106356833966";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END - Facebook Stuff -->

    <div class="container navbar main-nav navbar-relative-top">
      <div class="navbar-top clearfix">         <ul class="locations">           <li>Edmonton 780.758.5888 | Calgary 403.457.5888</li>        </ul>        <ul>

          <li class="link">
            <a onclick="ga('send', 'event', 'Positions', 'Click', 'Permanent Positions Header');" href="<?php echo get_bloginfo('siteurl'); ?>/permanent-positions">Permanent Jobs</a><span class="navtop-divider">|</span>
          </li><li class="link">
            <a onclick="ga('send', 'event', 'Positions', 'Click', 'Temp Positions Header');" href="<?php echo get_bloginfo('siteurl'); ?>/temp-positions">Temporary Jobs</a><span class="navtop-divider">|</span>
          </li><li class="link">
            <a onclick="ga('send', 'event', 'Login', 'Click', 'Login Header');" href="<?php echo get_bloginfo('siteurl'); ?>/login">Login</a><span class="navtop-divider">|</span>
          </li><li class="link">
            <a target="_blank" onclick="ga('send', 'event', 'Track Time', 'Click', 'Track Time Header');" href="https://rpinc.springahead.com">Track Time</a>
          </li><li class="social facebook">
            <a onclick="ga('send', 'event', 'Social Link', 'Click', 'Facebook Icon Header');" href="http://www.facebook.com/recruitmentpartnersinc">
              <span></span>
            </a>
          </li><li class="social twitter">
            <a onclick="ga('send', 'event', 'Social Link', 'Click', 'Twitter Icon Header');" href="http://twitter.com/rpijobs">
              <span></span>
            </a>
          </li><li class="social linkedin">
            <a onclick="ga('send', 'event', 'Social Link', 'Click', 'LinkedIn Icon Header');" href="http://www.linkedin.com/company/2362673">
              <span></span>
            </a>
          </li>
        </ul>
      </div> <!-- .navbar-top -->
      <div class="navbar-inner">
        <div class="container">
           <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php echo get_bloginfo('template_url') . '/img/recruitment-partners-assets/main-logo.png'; ?>" alt="recruitment partners"/>
            <?php bloginfo( 'name' ); ?>
          </a> <!-- .brand -->

          <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>
        </div> <!-- .container -->
      </div> <!-- .navbar-inner -->
    </div> <!-- .navbar -->

  <?php if(is_page_template('page-career-center.php') || is_page_template('page-career-center-landing.php')): ?>
    <div class="container sub-menu-navbar">

        <?php
         /** Loading Career Center Menu  **/
         wp_nav_menu( array(
            'menu'            => 'career-center-menu',
            'container_class' => 'sub-menu-wrapper',
            'menu_class'      => 'nav',
            'fallback_cb'     => '',
            'menu_id' => 'sub-menu',
            'walker' => new Bootstrapwp_Walker_Nav_Menu()
        ) ); ?>
    </div> <!-- .sub-menu-navbar -->
  <?php endif; ?>

  <?php if(is_single() || is_category() || is_archive() || is_home() || is_search()): ?>
    <div class="container sub-menu-navbar">


        <?php
         /** Loading Blog Menu  **/
         wp_nav_menu( array(
            'menu'            => 'blog-menu',
            'container_class' => 'sub-menu-wrapper',
            'menu_class'      => 'nav',
            'fallback_cb'     => '',
            'menu_id' => 'sub-menu',
            'walker' => new Bootstrapwp_Walker_Nav_Menu()
        ) ); ?>
    </div> <!-- .sub-menu-navbar -->
  <?php endif; ?>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64298691-1', 'auto');
  ga('send', 'pageview');

</script>

    <!-- End Header -->
              <!-- Begin Template Content -->
