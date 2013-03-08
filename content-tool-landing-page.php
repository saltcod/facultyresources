<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	 

<header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="breadcrumbs"><?php if(function_exists('bcn_display')) {bcn_display(); }?> </div>
</header><!-- .entry-header -->
 
   <h2 class="landing-page-description"><?php the_field('tool_intro');?></h2> 
  
   <h3 class="faq">Frequently Asked Questions</h3> 
    <?php the_field('frequently_asked_questions');?>
    
  

 	
	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
 </article><!-- #post-<?php the_ID(); ?> -->
