<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */

get_header(); ?>

<div id="primary">
<div id="content" role="main">

<div class="hero">
	<h3>Discover. Learn. Transform. Teach</h3>
</div>

<div class="row teaching-with-technology group">

	<div class="block half">
		
		<h2>Teaching with Technology Resources</h2>

		<p>Detailed how-to guides and video tutorials will guide you through the technical side of teaching online.</p>
		<p>Click a tool below to view the resources →</p>


		<div class="index-tool first">
			<img src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
			<a href="<?php echo home_url(); ?>/using-desire2learn-at-memorial"><h2>Desire2Learn </h2></a>
		 	<h3>Memorial's Learning Management System (LMS)</h3></div>	

		<div class="index-tool">
			<img src="<?php echo get_template_directory_uri();?>/images/elive-icon-green.png" alt="">
			<a href="#"><h2>Elluminate <em>Live!</em></h2>	</a>
			<h3>Bring your classroom discussions online</h3><span class="soon">soon</span>	
		</div> 
	</div> 

		<div class="block half last">
			<div class="teaching-skills group">
				<h2>Teaching Skills Enhancement Program</h2>

				<p>Praesent hendrerit sapien et justo porta sed viverra mauris viverra. Nullam id eros diam.</p>
				<span class="view-more"><a href="#">Explore the course offerings</a> →</span>
			</div>

			<div class="technology-enabled group">
				<h2>Technology Enabled Learning</h2>

				<p>Praesent hendrerit sapien et justo porta sed viverra mauris viverra. Nullam id eros diam.</p>
				<span class="view-more"><a href="#">Explore the course offerings</a> →</span>
			</div>
		
		</div>


</div> <!-- .row -->

 


 

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>