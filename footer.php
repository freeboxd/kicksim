<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kicksim
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="main-footer">
			<div class="container site-footer--container">
				<div class="company-logo">
					<a class="footer-home-anchor" href="#">
						<img src="<?php echo get_template_directory_uri() ?>/images/kicksim-logo-blue.png" alt="KimSIM blue logo">
						KickSIM
					</a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'footer-main-menu' ) ); ?>
			</div>
		</footer>
		<div class="sub-footer">
			<div class="container sub-footer--container">
				<?php wp_nav_menu( array( 'theme_location' => 'sub-menu', 'menu_class' => 'footer-sub-menu' ) ); ?>
				<div class="site-info">
					<span>Copyright © 2017 Kick SIM Networks, Inc. All rights reserved.</span>
				</div>
			</div>
		</div>
		<!-- #colophon -->
	</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- #wrapper -->

</body>
</html>
