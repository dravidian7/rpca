<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
<footer>
	<div class="container">
		<div class="footer-contents row-fluid">

			<div class="col1 span4">
				<div id="tweet-text">
					<?php echo do_shortcode('[twitget]'); ?>
				</div> <!-- #tweet-text -->

				<ul class="social">
					<li class="twitter">
						<a href="https://twitter.com/RPIjobs" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @RPIjobs</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</li><!-- .twitter -->
					<li class="facebook">
						<div class="fb-like" data-href="https://www.facebook.com/RecruitmentPartnersInc" data-width="85" data-layout="button_count" data-show-faces="false" data-send="false"></div>
					</li> <!-- .facebook -->
					<li class="linkedin">
		            	<script src="//platform.linkedin.com/in.js" type="text/javascript">
 							lang: en_US
						</script>
						<script type="IN/Share" data-url="recruitmentpartners.ca" data-counter="right"></script>
					</li> <!-- .linkedin -->
				<ul><!-- .social -->
			</div> <!-- .col1 -->

			<div class="col2 span4">
				<h4>Subscribe to our Newsletter</h4>
				<p>Everything you need to know about taking charge of your career, delivered right to your inbox. Subscribe today!</p>
				<div id="mailchimp-footer">
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="http://recruitmentpartners.us6.list-manage.com/subscribe/post?u=4c9bd38a330b7f0d5bf194bbf&amp;id=8d76307d6f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							
						<div class="mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" placeholder="Your email address..." id="mce-EMAIL">
						</div>
						<input type="submit" onclick="ga('send', 'event', 'Sign Up', 'Click', 'Mailing List External Sign Up');" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						<div class="mc-field-group input-group">
						    <ul>
						    	<li><input type="checkbox" value="1" name="group[8637][1]" id="mce-group[8637]-8637-0"><label for="mce-group[8637]-8637-0">I'm an Employer</label></li>
								<li><input type="checkbox" value="2" name="group[8637][2]" id="mce-group[8637]-8637-1"><label for="mce-group[8637]-8637-1">I'm a Job Seeker</label></li>
							</ul>
						</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>
						</form>
					</div>
					<!--End mc_embed_signup-->
				</div> <!-- #mailchimp-footer -->
			</div> <!-- .col2 -->

			<div class="col3 span4">
				<?php
		           /** Loading WordPress Main Menu  **/
		           wp_nav_menu( array(
		              'menu'            => 'main-menu',
		              'container_class' => 'footer-nav',
		              'menu_class'      => 'nav',
		              'fallback_cb'     => '',
		              'menu_id' => 'footer-menu',
		              'walker' => new Bootstrapwp_Walker_Nav_Menu()
		          ) );

		           /** Loading WordPress Category Menu  **/
		           wp_nav_menu( array(
		              'menu'            => 'blog-menu',
		              'container_class' => 'footer-cat-nav',
		              'menu_class'      => 'nav',
		              'fallback_cb'     => '',
		              'menu_id' => 'footer-cat-menu',
		              'walker' => new Bootstrapwp_Walker_Nav_Menu()
		          ) ); 
          		?>
			</div> <!-- .col3 -->

		</div> <!-- .footer-contents -->

		<div class="footer-bottom">
	      <p class="pull-right">This site was made by <a href="http://wearebully.com">Bullies</a>.</p>
	      <p>Content and images copyright &copy; <?php the_time('Y') ?> <?php bloginfo('name'); ?> <a href="<?php bloginfo('siteurl'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('siteurl'); ?>/terms-of-use">Terms of Use</a></p>
	    </div> <!-- .footer-bottom -->
	</div> <!-- /container -->
</footer>
<?php wp_footer(); ?>

  </body>
</html>