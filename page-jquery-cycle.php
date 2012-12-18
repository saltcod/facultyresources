<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */

get_header(); ?>
<?php get_sidebar(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

				 <div class="gallery">
				 	<img src="http://placehold.it/350x250" alt="">
				 	<img src="http://placehold.it/380x150" alt="">
				 	<img src="http://placehold.it/250x250" alt="">
				 </div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>