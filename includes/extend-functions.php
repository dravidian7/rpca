<?php

/***
 * Extended functions for Recruitment Partners Inc.
 ****/

 // Setting paths to the resources we will need later, js and styles
$path_to_js 	= get_stylesheet_directory_uri() . '/js/';
$path_to_styles = get_stylesheet_directory_uri() . '/css/';

// We don't want to load unnecessary things when browsing the Dashboard, right?
if ( ! is_admin() ) {

	/** START - Setup For Typekit Fonts **/
	function load_font() {

		// Retrieving the paths we set above
		global $path_to_styles;

		// Actually printing the font scripts
		print "\n<!-- Loading Typekit Fonts -->\n";
		print "<script type='text/javascript' src='//use.typekit.net/qgf5bgq.js'></script>\n";
		print "<script type='text/javascript'>try{Typekit.load();}catch(e){}</script>\n";
	}

	// Adding the action to the HEAD
	add_action( 'wp_head', 'load_font' );
	/** END - Setup For Typekit Fonts **/

	/** START - Setup For less.js **/
	function load_LESS() {

		// Retrieving the paths we set above
		global $path_to_js, $path_to_styles;

		// Actually printing the lines we need to load LESS in the HEAD
    /*
    print "\n<!-- Loading LESS styles and js -->\n";
		print "<link rel='stylesheet/less' type='text/css' href='" . $path_to_styles . "less/bootstrapwp.less' />\n";
		print "<script type='text/javascript'>less = { env: 'development' };</script>\n"; // remove this line when in Prod
		print "<script type='text/javascript' src='" . $path_to_js . "less-1.3.3.min.js'></script>\n";
    print "<!-- REMOVE THIS AFTER DEV - Stops LESS.js from caching O.o -->\n";
    */
    //print "<script> /* Provisory for dev environment: */ localStorage.clear(); </script>\n\n";


		// Load CSS when in Prod
		print "<link rel='stylesheet' type='text/css' href='" . $path_to_styles . "styles/bootstrapwp.css?v=2.0' />\n";
	}

	// Adding the action to the HEAD
	//add_action( 'wp_head', 'load_LESS' );
	/** END - Setup For less.js **/

} // END ! is_admin()

/** Check if blog page - https://gist.github.com/wesbos/1189639 **/
function is_blog () {
    global  $post;
    $posttype = get_post_type($post );
    return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}

/** Custom Bread Crumbs for RP **/
 function rp_breadcrumbs() {

  if ( !is_home() && !is_front_page() || is_paged() ) {

    global $post;

    if ( is_search() ) {
        echo '<div class="alert">';
        echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo 'Search results for “' . get_search_query() . '”';
        echo '</div>';

    } elseif ( is_tag() ) {
        echo '<div class="alert">';
        echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo 'Showing all articles tagged “' . single_tag_title('', false) . '”';
        echo '</div>';

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo '<div class="alert">';
      echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      echo 'Showing all articles posted by ' . $userdata->display_name;
      echo '</div>';

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }


    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() || is_blog()) {
        echo '<div class="alert">';
        echo __('Page', 'bootstrapwp') . ' ' . get_query_var('paged');
        echo '</div>';
      }
    }

  }
} // end rp_breadcrumbs()

/** Custom Nav for RP **/
if ( ! function_exists( 'rp_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 */
function rp_content_nav( $nav_id ) {
  global $wp_query;

  ?>

  <?php if ( is_single() ) : // navigation links for single posts ?>
<ul class="pager">
    <?php previous_post_link( '<li class="previous">%link</li>', '<p><span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'bootstrapwp' ) . '</span> <span class="text">%title</span></p>' ); ?>
    <?php next_post_link( '<li class="next">%link</li>', '<p><span class="text">%title</span> <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'bootstrapwp' ) . '</span></p>' ); ?>
</ul>
  <?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

  <?php
    // http://wordpress.org/extend/plugins/wp-pagenavi/
    wp_pagenavi();
  ?>

  <style>
    .content { padding-bottom: 137px; }
    .wp-pagenavi { margin-top: 80px; }
  </style>

  <?php endif; ?>

  <?php
}
endif; // rp_content_nav

/** Add additional items to Menu Item **/
add_filter('wp_nav_menu_main-menu_items', 'add_home_link', 10, 2);
function add_home_link($items, $args) {

  $home_link = get_bloginfo('siteurl');

  $items = '<li class="home-link"><a href="'. $home_link .'">Home</a></li>' . $items;

    return $items;
}

// Add custom first and last class to menu items
function add_first_and_last($output) {
  $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
  $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
  return $output;
}
add_filter('wp_nav_menu', 'add_first_and_last');

/** Improve the_excerpt. Source: http://bacsoftwareconsulting.com/blog/index.php/wordpress-cat/how-to-create-a-variable-length-excerpt-in-wordpress-without-a-plugin/ **/

/*************************************CODE-Z**********************************
*  @Author: Boutros AbiChedid
*  @Date: May 3, 2012
*  @Websites: bacsoftwareconsulting.com/ ; blueoliveonline.com/
*  @Description: For the automatically generated Excerpt:
1. Option to generate a variable Length Excerpt.
2. Option to generate a fixed Length Excerpt. Complete the sentence in the Excerpt.
3. Option to add a 'Continue Reading' link to the text (Excerpt ending).
4. Option to add an unlinked Ellipsis to the text (Excerpt ending).
5. Option to preserve ALL, SOME, or NONE of the HTML formatting in the Excerpt.
6. The Code counts 'real words'. Does not count the HTML tags or their content.
7. Advantage of step 6: No opened HTML tags in the Excerpt.
8. Code Ignores Manual Excerpts and use the auto-generated one instead.
*  @Tested on: WordPress version 3.3.2
****************************************************************************/

function bac_variable_length_excerpt($text, $length, $finish_sentence){
     //Word length of the excerpt. This is exact or NOT depending on your '$finish_sentence' variable.
     $length = 55; /* Change the Length of the excerpt as you wish. The Length is in words. */

     //1 if you want to finish the sentence of the excerpt (No weird cuts).
     $finish_sentence = 1; // Put 0 if you do NOT want to finish the sentence.

     $tokens = array();
     $out = '';
     $word = 0;

    //Divide the string into tokens; HTML tags, or words, followed by any whitespace.
    $regex = '/(<[^>]+>|[^<>\s]+)\s*/u';
    preg_match_all($regex, $text, $tokens);
    foreach ($tokens[0] as $t){
        //Parse each token
        if ($word >= $length && !$finish_sentence){
            //Limit reached
            break;
        }
        if ($t[0] != '<'){
            //Token is not a tag.
            //Regular expression that checks for the end of the sentence: '.', '?' or '!'
            $regex1 = '/[\?\.\!]\s*$/uS';
            if ($word >= $length && $finish_sentence && preg_match($regex1, $t) == 1){
                //Limit reached, continue until ? . or ! occur to reach the end of the sentence.
                $out .= trim($t);
                break;
            }
            $word++;
        }
        //Append what's left of the token.
        $out .= $t;
    }
    //Add the excerpt ending as a link.
    $excerpt_end = ' <a class="more btn" href="'. get_permalink($post->ID) . '">' . 'Read More...' . '</a>';

    //Add the excerpt ending as a non-linked ellipsis with brackets.
    //$excerpt_end = ' [&hellip;]';

    //Append the excerpt ending to the token.
    $out .= $excerpt_end;

    return trim(force_balance_tags($out));
}

function bac_excerpt_filter($text){
    //Get the full content and filter it.
    $text = get_the_content('');
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);

    $text = str_replace(']]>', ']]&gt;', $text);

    /**By default the code allows all HTML tags in the excerpt**/
    //Control what HTML tags to allow: If you want to allow ALL HTML tags in the excerpt, then do NOT touch.

    //If you want to Allow SOME tags: THEN Uncomment the next line + Line 80.
    //$allowed_tags = '<p>,<a>,<strong>'; /* Here I am allowing p, a, strong tags. Separate tags by comma. */

    //If you want to Disallow ALL HTML tags: THEN Uncomment the next line + Line 80,
    //$allowed_tags = ''; /* To disallow all HTML tags, keep it empty. The Excerpt will be unformated but newlines are preserved. */
    //$text = strip_tags($text, $allowed_tags); /* Line 80 */

    //Create the excerpt.
    $text = bac_variable_length_excerpt($text, $length, $finish_sentence);
    return $text;
}
 //Hooks the 'bac_excerpt_filter' function to a specific (get_the_excerpt) filter action.
  add_filter('get_the_excerpt','bac_excerpt_filter',5);

/**
* Culture page
* @author KEEN Creative
*/
function culture_page_enqueue_styles() {
	if ( is_page('Culture') ) {
		wp_enqueue_style('culture-page', get_template_directory_uri().'/css/styles/culture_page.css');
		wp_enqueue_script('infinitescroll',get_template_directory_uri().'/js/jquery.infinitescroll.min.js',array(),false,true);
	}
}
add_action( 'wp_enqueue_scripts', 'culture_page_enqueue_styles' );

  // Instragram Custom Post Type
  add_action('init', 'instagram_cpt');
  function instagram_cpt() {
	  register_post_type( 'instagram', array(
		  'label' => 'Instagram',
		  'description' => '',
		  'public' => true,
		  'show_ui' => true,
		  'show_in_menu' => true,
		  'capability_type' => 'post',
		  'map_meta_cap' => true,
		  'hierarchical' => false,
		  'rewrite' => array('slug' => 'instagram', 'with_front' => false),
		  'query_var' => true,
		  'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		  'labels' => array (
			  'name' => 'Instagram Posts',
			  'singular_name' => 'Instagram Post',
			  'menu_name' => 'Instagram',
			  'add_new' => 'Add Instagram Post',
			  'add_new_item' => 'Add New Instagram Post',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Instagram Post',
			  'new_item' => 'New Instagram Post',
			  'view' => 'View Instagram Post',
			  'view_item' => 'View Instagram Post',
			  'search_items' => 'Search Instagram Posts',
			  'not_found' => 'No Instagram Posts Found',
			  'not_found_in_trash' => 'No Instagram Posts Found in Trash',
			  'parent' => 'Parent Instagram Post',
		  )
	  ));
  }

  function find_hash_tags( $string ) {
	  preg_match_all('/(#\w+)/', $string, $hashtags);

	  $find = array();
	  $replacements = array();
	  foreach ( $hashtags[0] as $hashtag ) {
		  $mod_hashtag = strip_tags(str_replace('#', '', $hashtag));
		  $replacements[] = '#<span class="hashtag">' . $mod_hashtag . '</span>';
		  $find[] = '/' . strip_tags($hashtag) . '/';
	  }
	  return preg_replace($find, $replacements, $string);
  }

  function limit_characters( $string ) {
	  $max_len = 150;
	  if ( strlen($string) > $max_len )
		  $string = substr($string, 0, $max_len) . '...';

	  return $string;
  }

  add_action( 'after_setup_theme', 'recruitment_partners_theme_setup' );
  function recruitment_partners_theme_setup() {
	  add_image_size( 'instagram-thumb', 350, 350, true );
  }
