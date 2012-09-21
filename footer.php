<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			
			 
				<a href="http://delts.mun.ca">DELTS, 2012</a><span class="sep"> | </span>
 				<div class="powered-by">Powered by <a href="http://wordpress.org">WordPress</a></div>
 			 
 		</div>

			<div class="right">
				<img src="<?php echo get_template_directory_uri();?>/images/creativecommons.png">
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>