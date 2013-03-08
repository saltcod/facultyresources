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
		$ancestors=get_post_ancestors($post->ID);
		$root=count($ancestors)-1;
		$parent = $ancestors[$root];  
	} else {
		$parent = $post->ID;
		echo $parent;  
		echo $post->ID;  
	} 
	?>
	
	<?php

	$args = array(
		'post_type'    => 'guides', 
		'sort_column' => 'menu_order',
		'title_li'     => __(''),
		'echo' => 0,
			'child_of' => 3029 //The ID of the top D2L guide
			);

	$children = wp_list_pages( $args );
	?>
	
	
	<?php if ( $children ) : ?>

	<div class="menu-wrap">
		<nav id="menu-sidebar">
			<ul class="menu">
				<?php echo $children; ?>
			</ul>
		</nav>
	</div>

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
