<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web_Layouts
 */

?>

	<footer id="colophon" class="main-footer" role="contentinfo"> 
		<div class="row flex-container">
			<div class="footer-item">
				<?php 
					dispay_custom_logo('large', 'light');
					dispay_custom_logo('small', 'light');
				?>
				<?php //get_template_part( 'components/shared/logo', 'light' ); ?> 
			</div>
			<div class="footer-copyright footer-item">
				<p>
					<span>
						<?php echo esc_html__( 'Copyright', 'web_layouts' ); ?> 
						&copy; 
						<?php echo date('Y'); ?> 
					</span> 
					| 
					<span>Toronto, Canada</span> 
					| 
					<?php echo esc_html__( 'Many thanks to', 'web_layouts' ); ?> &nbsp; 
					<a href="https://unsplash.com" target="_blank">unsplash</a>  
					 &nbsp; 
					<?php echo esc_html__( 'and their amazing photographers for the breathtaking pictures.', 'web_layouts' ); ?> 
				</p> 

				<ul class="list-unstyled list-inline">
					<li>
						<a href="https://www.youtube.com/channel/UCaJgRDHskcE9Y5ip0pQy4NQ" target="_blank">
							<i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i>
							<span class="screen-reader-text">
								<?php echo esc_html__( 'Weblayouts Youtube Channel', 'web_layouts' ); ?> 
							</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/weblayouts1" target="_blank">
							<i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i>
							<span class="screen-reader-text">
								<?php echo esc_html__( 'Weblayouts Twitter Account', 'web_layouts' ); ?> 
							</span>
						</a>
					</li>
					<li>
						<a href="https://github.com/WebLayouts1" target="_blank">
							<i class="fa fa-2x fa-github-square" aria-hidden="true"></i>
							<span class="screen-reader-text">
								<?php echo esc_html__( 'Weblayouts GitHub Account', 'web_layouts' ); ?> 
							</span>
						</a>
					</li>
				</ul> 
			</div>
			<div class="footer-item"> 
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-pages-menu', 'menu_class'=>'main-navigation menu top-pages-menu list-unstyled list-inline text-uppercase text-right', 'container'=> false ) ); ?>	
			</div>
		</div><!-- row -->
	</footer>
	</div><!-- site-content -->
</div><!-- site -->


<!-- Mailchimp subscription popup -->
<!-- <script type="text/javascript" src="http://s3.amazonaws.com/downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us1.list-manage.com","uuid":"dae40c7c2215015ad591513bb","lid":"96a17a8260"}) })</script> -->


<?php wp_footer(); ?>

</body>
</html>