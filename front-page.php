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


<div class="row teaching-with-technology group">

	<div class="block two-thirds">
		<h2 class="blue resources">Teaching with Technology Resources</h2>

		<p>Detailed how-to guides and video tutorials will guide you through the technical side of teaching online.</p>
 

		<div class="index-tool first">
			<img src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
			<a href="<?php echo home_url(); ?>/using-desire2learn-at-memorial"><h2>Desire2Learn </h2></a>
		 	<h3>Memorial's Learning Management System (LMS)</h3></div>	

		<div class="index-tool">
			<img src="<?php echo get_template_directory_uri();?>/images/elive-icon-green.png" alt="">
			<a href="#"><h2>Elluminate <em>Live!</em></h2>	</a>
			<h3>Bring your classroom discussions online</h3><span class="soon">Coming soon</span>	
	</div> 
</div> 


	<div id="sidebar" class="block third last">
		 <h2>Courses and Programs</h2>
		 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper ante quis nulla sagittis ut volutpat lectus semper. </p>
		 <ul>
		 	<li><a href="#">Technology Enabled Learning</a></li>
		 	<li><a href="#">Teaching Skills Enhancement</a></li>
		 	<li><a href="#">Rubrics and you</a></li>
		 	<li><a href="#">Incorporating chalkboards into the classroom</a></li>
		</ul>
	
	</div>


</div> <!-- .row -->

 


 

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>