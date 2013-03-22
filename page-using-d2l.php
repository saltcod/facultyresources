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
		
		<div class="entry-content">
			<img class="screenshot" src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot-short.png" alt="">
			<p>Desire2Learn provides a wealth of tools that make teaching online easy.</p>
			<p>Quisque mauris nunc, lobortis id congue vitae, venenatis tempor nunc. Aenean tellus odio, fermentum nec scelerisque ut, vulputate in lacus. Donec sapien tortor, fermentum eu aliquam in, placerat in augue. In sodales enim a nibh malesuada tristique. Maecenas tristique augue eu leo tempus vitae tincidunt velit sodales.  Morbi euismod lorem justo. </p>
			<p>Nulla purus arcu, vehicula ac luctus ut, lobortis quis lacus. Curabitur dolor est, varius sed ultrices eu, malesuada non odio.</p>
		</div>

		<div class="topics group">
			<h3 class="blue">Topics include</h3>
			<ul class="chevron-green left">
				<li><a href="#">Semester Startup</a></li>
				<li><a href="#">Course Home</a></li>
				<li><a href="#">Course Content</a></li>
				<li><a href="#">Communication</a></li>
			</ul>
			
			<ul class="chevron-green left">
				<li><a href="#">Assessments</a></li>
				<li><a href="#">Edit Course</a></li>
				<li><a href="#">Help</a></li>
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

