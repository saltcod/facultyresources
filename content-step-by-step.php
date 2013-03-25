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
