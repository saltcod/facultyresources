<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	
 	  
<div id="accordion">
	
	<h3 class="page-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'victoria_park' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<div>
		<?php the_field('tool_intro'); ?> 
	</div>
	

	<h3 class="sam"><a href="#">Frequently Asked Questions <span class="plus">+</span></a></h3>
	<div>
		<?php echo the_field('frequently_asked_questions'); ?> 
	</div>
	 
</div>

 	
	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
 </article><!-- #post-<?php the_ID(); ?> -->
