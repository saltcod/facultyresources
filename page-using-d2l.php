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
<?php get_sidebar('d2l'); ?> 



<div id="primary">
	<div id="content" role="main">

		<header class="group" >
			<img class="tool-logo" src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
			<div class="info-wrap">
				<h1 class="page-title">Desire2Learn</h1>
				<h3 class="description">Memorial University's Learning Management System (LMS)</h3>
			</div>
		</header>
		
<<<<<<< HEAD
		<ul>
			<?php // This function is too long for a template file. It lives in functions.php 
				victoria_park_get_hot_topics();
			?>	
		</ul>
	</div>
 </div>		 


<div class="row d2l-tools first group"> 
	<div class="triangle"></div>
	
	<h2 class="section-title center">Get Ready. Get Prepared. Get Started</h2>	 
	<h3 class="center">Information for new and experienced users.</h3>
 

  	<a class="button blue" href="../guides/semester-startup">See How</a>
</div>		 


<div class="row d2l-tools course-content group">
	<div class="triangle"></div>
	
	<div class="left-side group">
		<img src="<?php echo get_template_directory_uri();?>/images/manage-content-icons.png" alt="">
	</div>

	<div class="right-side">		
		<h2 class="section-title">Course Content</h2>	  
			<h3>Make your syllabus and other course materials readily available to students.</h3>

			<a class="button blue" href="../guides/the-content-tool">Explore</a>
	</div>	
</div>		 




<div class="row d2l-tools homepage-navbar group">
	<div class="triangle"></div>
	 
	<h2 class="section-title center">Course Homepage and Navigation Bar</h2>	 
	<h3 class="center">Use the homepage and navigation bar as they are or make modifications to suit the needs of your course.</h3>
	 
	
	<div class="homepage-screenshot-container group">
		<div class="homepage">
				<a href="../guides/course-homepage-widgets">Homepage Widgets</a> 
 		</div>
	
=======
		<div class="entry-content">
			<img class="screenshot" src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot-short.png" alt="">
			<p>Desire2Learn provides a wealth of tools that make teaching online easy.</p>
			<p>Quisque mauris nunc, lobortis id congue vitae, venenatis tempor nunc. Aenean tellus odio, fermentum nec scelerisque ut, vulputate in lacus. Donec sapien tortor, fermentum eu aliquam in, placerat in augue. In sodales enim a nibh malesuada tristique. Maecenas tristique augue eu leo tempus vitae tincidunt velit sodales.  Morbi euismod lorem justo. </p>
			<p>Nulla purus arcu, vehicula ac luctus ut, lobortis quis lacus. Curabitur dolor est, varius sed ultrices eu, malesuada non odio.</p>
		</div>

		<div class="topics group">
			<h3 class="blue">Topics include</h3>
			<ul class="chevron-green left">
				<li><a href="#">Customizing your Course</a></li>
				<li><a href="#">Assessments</a></li>
			</ul>
>>>>>>> 236d6cb2e9ac993fbdd58efa14cfb365b2567862
			
			<ul class="chevron-green left">
				<li><a href="#">Course Content</a></li>
				<li><a href="#">Communication</a></li>
			</ul>
		</div>
		
		<div class="hot-topics group">
			<h3 class="blue">Hot Topics</h3>
			<ul class="chevron-green left">
			 <li><a href="#">Assessments</a></li>
				<li><a href="#">Edit Course</a></li>
				<li><a href="#">Help</a></li>
			</ul>
			
			 
		</div>
		
		

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>

<<<<<<< HEAD
<?php get_footer(); ?>
=======
>>>>>>> 236d6cb2e9ac993fbdd58efa14cfb365b2567862
