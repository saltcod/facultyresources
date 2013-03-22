<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<header class="entry-header">
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<div class="breadcrumbs"><?php if(function_exists('bcn_display')) {bcn_display(false, false); }?> </div>
</header><!-- .entry-header -->


 
<?php // Show Captivate video if guide has one ?> 
<?php global $cfs; if ( $cfs->get('captivate_url' )) : ?>

	<!-- Button to trigger modal -->
	<h3 class="watch-video"><a href="#watch-video-button" role="button" class="btn"><i class="icon-facetime-video"></i>Watch a video<i class="icon-chevron-right second"></i></a></h3>

	<!-- Modal -->
	<div id="watch-video-modal" class="modal hide fade" tabindex="-1">

		<div class="modal-header">
			<div class="video-title"><?php the_title();?></div> 
			<a class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
		</div>

		<div class="modal-body">
			<?php include('captivate-embed.php'); ?>
		</div>

		<div class="modal-footer">
			<a class="btn close" data-dismiss="modal" aria-hidden="true">Close</a>
		</div>

	</div>
<?php endif; ?>


 

<div class="entry-content">
	<?php the_content(); ?>
	<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'victoria_park' ), 'after' => '</div>' ) ); ?>
</div><!-- .entry-content -->

<footer class="entry-meta">
	<?php
	/* translators: used between list items, there is a space after the comma */
	$category_list = get_the_category_list( __( ', ', 'victoria_park' ) );

	/* translators: used between list items, there is a space after the comma */
	$tag_list = get_the_tag_list( '', ', ' );
	?>

	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
