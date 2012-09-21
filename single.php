<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */

get_header(); 
get_sidebar(); ?>


		<div id="primary">
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if (has_term( 'tool-landing-page', 'guide-type' ) ) : ?>
					
	 				<?php get_template_part( 'content', 'tool-landing-page' ); ?>

				<?php elseif (has_term( 'step-by-step', 'guide-type' ) ) : ?>
					
					<?php get_template_part( 'content', 'step-by-step' ); ?>

				<?php else: ?>
					
					<?php get_template_part( 'content', 'single' ); ?>

				<?php endif; ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>