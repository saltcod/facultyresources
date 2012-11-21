<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="breadcrumb">
		<?php if( has_term('step-by-step', 'guide-type') ) : ?>
		 		<span class="parent-guide"> <a href="<?php echo home_url();?>/using-d2l">Desire2Learn</a> / <a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title($post->post_parent); ?> </a></span>
		 	<?php endif; ?>
	</div>

	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

 
	<?php // Show Captivate video if guide has one ?> 
	<?php if ( get_field('captivate_url' )) : ?>
		<?php include('captivate-embed.php'); ?>
	<?php endif; ?>
 
 
	<?php if (has_term( 'step-by-step', 'guide-type' ) ) : ?>
		<h3 class="step-by-steps"><i class="icon-bookmark-empty"></i> Step by Step</h3>
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
