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
 


 		<?php // Show a few things on the blog pages ?>

		<?php  //Quizzically, is_home detects the posts page
		if( is_home() || is_single() && !has_term('step-by-step', 'guide-type') && !has_term('tool-landing-page', 'guide-type') || is_archive() ): ?> 
			
			<a href="<?php echo home_url();?>/blog"><h2 class="blog"><i class="icon-rss"></i> Blog</h2></a>
			<p>Thanks for stopping by at the new Technology Resources website</p>
			
			<h3>Tags</h3>			
				<?php
					$tags = get_tags();
					$html = '<div class="post-tags"><ul>';
					foreach ($tags as $tag){
						$tag_link = get_tag_link($tag->term_id);
								
						$html .= "<li><a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
						$html .= "{$tag->name}</a>";
						$html .= "<span>{$tag->count}</span></li>";
					}
					$html .= '</ul></div>';
					echo $html;
				?>




			<h3> Archives</h3>
			<div class="monthly-archives"><?php wp_get_archives('type=monthly&limit=12'); ?></div>
		<?php endif; ?>




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
 