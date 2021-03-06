<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */
?>
<div id="secondary" class="widget-area group" role="complementary">


	<?php 
	if ($post->post_parent) {
		$ancestors = get_post_ancestors($post->ID);
		$root = count($ancestors)-1;
		$parent = $ancestors[$root];  
	} else {
		$parent = $post->ID;
	} 
	?>
	
	<?php

	$args = array(
		'post_type'    => 'guides', 
		'sort_column' => 'menu_order',
		'title_li'     => __(''),
		'echo' => 0,
		'child_of' => $parent //The ID of the top D2L guide
		);

	$children = wp_list_pages( $args );
	?>
	
	
	<?php if ( $children ) : ?>

	<div class="menu-wrap">
		<nav id="menu-sidebar">
			<ul class="menu">
				
				<?php
				// Return the topmost Parent to the top of the menu stack
				$page_data = get_page( $parent );
				echo '<a href="'. get_permalink( $parent ) .'"><h4 class="parent-tool">'. $page_data->post_title .'</h4></a> ';
				?>

				<?php if( ! is_single(3029) ): ?>
				<span class="back"><a href="<?php echo get_permalink( $parent );?>"><i class="icon-chevron-left"></i>Back</a> </span>
			<?php endif; ?>

			<?php echo $children; ?>
		</ul>
	</nav>
</div>

<?php endif;?>






<div id="share">
	<h2>Share</h2>
	<i class="icon-share"> </i><?php echo direct_email();?>


	<?php if( has_term('step-by-step', 'guide-type') ) : ?>
	<div class="print">
		<i class="icon-print"></i> <a href="javascript:window.print()">Print this guide</a>
	</div>
<?php endif; ?>

</div>

</div><!-- #secondary .widget-area -->
