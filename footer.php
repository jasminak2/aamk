<div class="footer-container">
	<footer class="site-footer">
		<!-- 
		<nav class="site-nav footer-nav clearfix">
			<?php
			$args = array(
				'theme_location' => 'footer', 
			);
			?>

			<?php wp_nav_menu( $args ); ?>
		</nav>
		-->

		<div class="blog-info">
			<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
		</div>
	</footer>

</div><!-- footer-container -->
</div><!-- footer-home -->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work properly */ ?>
</div><!-- wrapper -->
</body>
</html>