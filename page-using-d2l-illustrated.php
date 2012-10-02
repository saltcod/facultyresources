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
 
 
 
<div class="row using-d2l-hero group">

	<img src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot.png" alt=""> 

	<h2 class="title">Desire2Learn</h2>
	<h2>Memorial University’s Learning Management System (LMS).</h2>
	<h3>Extend your course beyond the classroom: administrate, communicate and facilitate with Desire2Learn</h3>
</div> <!-- hero -->







<div class="row d2l-tools first group"> 
	
	<h2 class="section-title center">Getting started</h2>	 
	<h3 class="center">Information for new and experienced users.</h3>
 		<img class="cloud" src="<?php echo get_template_directory_uri();?>/images/new-to-d2l-cloud.png" alt="">

 	<div class="left">
 		<h3 class="how-to">Learn how to:</h3>
 	 	
 	 	<ul class="first">
 	 		<li><a href="#">Access to Desire2Learn</a></li>
 	 		<li><a href="#">Logging in</a></li>
 	 		<li><a href="#">Copying course components</a></li>
 	 	</ul>
 	 	<ul class="second">
 	 		<li><a href="#">Starting a new semester</a></li>
 	 		<li><a href="#">Activating a course</a></li>
 	 	</ul>
 	</div>
 	<a href="../guides/getting-started"><button class="center blue">Lets begin!</button></a>
</div>		 




<div class="row d2l-tools second group">
	<div class="triangle"></div>
	 
	<h2 class="section-title center">Course Homepage and Navigation Bar</h2>	 
	<h3 class="center">Use the homepage and navigation bar as they are or make modifications to suit the needs of your course.</h3>
	 
	
	<div class="homepage">
			<span class="label">Homepage</span>
		This is where your course begins. 
	</div>

		
		<img class="d2l-screenshot-numbered" src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot-numbered.png" alt="">
	

	<div class="navigation-bar">		
		<span class="label">Navigation Bar</span>
		The doorway to your course!
	
 		<button class="blue">Explore</button>
	</div>
	 


</div>		 



<div class="row d2l-tools third group">
	<div class="triangle"></div>
	
	<div class="left-side group">
		<img src="<?php echo get_template_directory_uri();?>/images/manage-content-icons.png" alt="">
	</div>

	<div class="right-side">		
		<h2 class="section-title">Course Content</h2>	  
			<h3>Make your syllabus and other course materials readily available to students.</h3>

			<button class="blue">Explore</button>
	</div>	
 	
	
	 
</div>		 



<div class="row d2l-tools forth group">
	<div class="triangle"></div>

	 <div class="left-side group">
		<h2 class="section-title left">The Classlist</h2>	  
		<h3>Use the classlist to send email and to check enrollments and student progress.</h3>
	 </div>
 	
 	<div class="right-side last">
		<img src="<?php echo get_template_directory_uri();?>/images/classlist-list.png" alt="">
	</div>	

		<div class="classlist-circle">
	 		<img src="<?php echo get_template_directory_uri();?>/images/classlist-circle.png" alt="">
		
	 		<a href="#"><span class="classlist-email"><i class="icon-envelope"></i>Email the class</span></a>
	 		<a href="#"><span class="classlist-progress"><i class="icon-bar-chart"></i>View student progress</span></a>
	 		<a href="#"><span class="classlist-status"><i class="icon-time"></i>Students' online status</span></a>
	 		<a href="#"><span class="classlist-enrollments"><i class="icon-group"></i>View class enrollment</span></a>
		</div>

 	<a href="#"><button class="center blue">See how</button></a>

</div>		 




<div class="row d2l-tools fifth group">
	<div class="triangle"></div>

	<div class="left-side">		
		<h2 class="section-title left">The Grades Tool</h2>	  
		 <h3>Use the Grades tool to enter, calculate, distribute, and send final grades to Banner. </h3>
		 <span class="instant-feedback">Instant feedback. </span>
		 <span class="instant-feedback">No more hardcopies. </span>

		<a class="button" href="#"><button class="blue">See how</button></a>

</div>


<div class="right-side">
	<img class="grades-cloud" src="<?php echo get_template_directory_uri();?>/images/grades-tool-cloud.png" alt="">
	 
	 <img class="grades-list" src="<?php echo get_template_directory_uri();?>/images/grades-tool-list.png" alt="">
</div>
		 
</div>	

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>