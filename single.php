<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */

get_header(); ?>

<?php if ( waterstreet_is_child_of(3029) ) { // d2l = post->ID=>3029
		get_sidebar('d2l');
	} else{
		get_sidebar();
	}
?>




<div id="primary">
	<div id="content" role="main">
		
		<?php  // What type of guide is this? 
		$terms = get_the_terms( $post->ID, 'guide-type' ); ?>


		<?php while ( have_posts() ) : the_post(); ?>

		<?php if (has_term( 'tool-landing-page', 'guide-type' ) ) {
			get_template_part( 'content', 'tool-landing-page' );
		} elseif (has_term( 'tool-category', 'guide-type' ) ) {
			get_template_part( 'content', 'tool-landing-page' );
		} elseif (has_term( 'step-by-step', 'guide-type' ) ) {
			get_template_part( 'content', 'step-by-step' );
		} else {
			get_template_part( 'content', 'single' );
		} 
		?>


	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>