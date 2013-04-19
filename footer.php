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



<footer id="colophon" role="contentinfo">

	<a href="http://delts.mun.ca">DELTS, 2012</a><span class="sep"> | </span>
	<div class="powered-by">Powered by <a href="http://wordpress.org">WordPress</a></div>



	<div class="right">
		<img src="<?php echo get_template_directory_uri();?>/images/creativecommons.png">
	</div>
</footer><!-- #colophon -->
</div><!-- .wrap -->
</div><!-- #main -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-35346528-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

</body>
</html>