<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>


<?php // Setup custom fields up here
	global $cfs;
	$faq = $cfs->get('frequently_asked_questions');
	$intro = $cfs->get('tool_intro');
	?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="breadcrumbs"><?php if(function_exists('bcn_display')) {bcn_display(false, false); }?> </div>
	</header><!-- .entry-header -->



	<div class="landing-page-description"> 
		<?php if( isset( $intro )) {
			 echo $intro;
			}
		?>
	</div> 
	
	

	<?php if( !empty( $faq )): ?>
		<h3 class="faq">Frequently Asked Questions</h3> 
		 <?php echo $faq; ?>
	<?php endif; ?>




<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
