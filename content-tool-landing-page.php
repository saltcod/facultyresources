<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	 
<?php global $cfs; ?>

<header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="breadcrumbs"><?php if(function_exists('bcn_display')) {bcn_display(false, false); }?> </div>
</header><!-- .entry-header -->
 
   <div class="landing-page-description"><?php echo $cfs->get('tool_intro'); ?></div> 
  
     <?php if( $cfs->get('frequently_asked_questions') ): ?>  
   		<h3 class="faq">Frequently Asked Questions</h3> 
     
    <?php echo $cfs->get('frequently_asked_questions');  ?>
    <?php endif; ?>

     
   

 	
	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
 </article><!-- #post-<?php the_ID(); ?> -->


