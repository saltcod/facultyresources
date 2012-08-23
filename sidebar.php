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


	 	<h3 class="parent-guide"><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title($post->post_parent); ?> </a></h3>

	 	<h2> Step by Step Guides</h2>

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
  


	  		<nav id="menu-context">
				<ul class="menu">
					<?php echo $children; ?>
				</ul>
			</nav>

 		<?php endif;?>


 
		</div><!-- #secondary .widget-area -->
 