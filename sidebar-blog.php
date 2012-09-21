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
sidebar blog

		<?php
			if (!$post->post_parent):
				// will get the subpages of this top level page
				$parent = $post->ID;
			elseif ($post->ancestors):
				// now can get the the top ID of this page
				// WordPress puts the IDs DESC, which is why the top level ID is the last one
				$parent = end($post->ancestors);
			endif;


 		    $args = array(
		     	'post_type'    => 'guides', 
		     	'sort_column' => 'menu_order',
		   		'title_li'     => __(''),
		   		'echo' => 0, 
		   		'child_of' => $parent
 		     	);

		    $children = wp_list_pages( $args );
			  
			if ($children) :
		?>
  

 	 		<h2><i class="icon-bookmark-empty"></i>Step by Step Guides</h2>

	  		<nav id="menu-context">
				<ul class="menu">
					<?php echo $children; ?>
				</ul>
			</nav>

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
 