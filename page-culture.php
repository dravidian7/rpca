<?php /* Template Name: Culture */
	get_header();

	$detect = new Mobile_Detect();
?>

<div id="main-content" class="main-content ">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php while(have_posts()): the_post(); ?>
				<section class="culture-gallery">
					<div class="container">

						<?php
							// pagination page variable, used for infinite scroll
							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

							$args = array(
								'posts_per_page' => 20,
								'post_type' => 'instagram',
								'paged' => $paged,
								'post_status' => 'publish',
							);

							$feed_posts = new WP_Query( $args );
							$feed_count = 0;

							//$args['posts_per_page'] = -1;
							$all_results = new WP_Query( $args );
						?>

						<?php if ( $feed_posts->have_posts() ): ?>
							<div class="feed-results">
								<?php while ($feed_posts->have_posts()) : $feed_posts->the_post(); ?>
									<div class="feed-box">
										<?php
											$feed_post = $post;

											preg_match_all('#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#', $feed_post->post_content, $match); // get link
											$link = $match[0][0];

											$string = limit_characters( $feed_post->post_title );
										?>
										<a href="<?php echo $link; ?>" target="_blank">
											<?php if ( $img_class == 'video' ): ?><div class="play-btn"></div><?php endif; ?>
											<?php echo get_the_post_thumbnail( $feed_post->ID, 'instagram-thumb' ); ?>
											<?php if ( !$detect->isMobile() ): ?><div class="overlay"><div class="text-box"><?php echo find_hash_tags($string); ?></div></div><?php endif; ?>
										</a>
									</div>

									<?php $feed_count++; ?>
								<?php endwhile; ?>

								<?php wp_reset_query(); ?>
							</div>
						<?php endif; ?>
					</div>

					<nav id="nav-below">
					    <ul>
					        <li><?php next_posts_link( 'NEXT &raquo;', $all_results->max_num_pages ) ?></li>
					    </ul>
					</nav>

					<script type="text/javascript">
						jQuery(window).load(function() {
							// Infinite Scroll

							jQuery('.feed-results').infinitescroll({
								navSelector  : '#nav-below',    // selector for the paged navigation
								nextSelector : '#nav-below a',  // selector for the NEXT link (to page 2)
								itemSelector : '.feed-box',     // selector for all items you'll retrieve
								extraScrollPx: 50,
								loading: {
									finishedMsg: '',
									//img: 'http://i.imgur.com/6RMhx.gif'
								}
						   });

							//box_height();

							jQuery(window).resize(function() {
								//box_height();
							});
						});

						function box_height() {
							var box_height = jQuery('.feed-box:first').height();
							jQuery('.feed-box').height(box_height);
						}
					</script>
				</section>

			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php get_footer(); ?>
