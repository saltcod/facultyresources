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

	<img src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot-short.png" alt=""> 

	<h2 class="title">Desire2Learn</h2>
	<h2>Memorial University’s Learning Management System (LMS).</h2>
	<h3>Extend your course beyond the classroom: administrate, communicate and facilitate with Desire2Learn</h3>
</div> <!-- hero -->




<div class="row d2l-tools hot-topics group"> 
	
	<div class="left-side">
		<h2 class="section-title left"><i class="icon-fire"></i>Hot topics</h2>	 
	</div>
	
	<div class="right-side">
		
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
	
			
		<img class="d2l-screenshot-numbered" src="<?php echo get_template_directory_uri();?>/images/d2l-screenshot-numbered.png" alt="">
		
	
		<div class="navigation-bar">		
			<a href="../guides/the-course-navigation-bar">Navigation Bar</a> 
 		
		</div>
	 </div>
</div>		 




<div class="row d2l-tools classlist group">
	<div class="triangle"></div>
		<h2 class="section-title center">The Classlist</h2>	  
		<h3 class="center">Use the classlist to send email and to check enrollments and student progress.</h3>

	 
 	<div class="group">
	 	<img id="classlist-circle" src="<?php echo get_template_directory_uri();?>/images/classlist-circle.png" alt="">
		<ul>
	 		<li><span class="classlist-email"><i class="icon-envelope"></i>Email the class</span></li>
			<li><span class="classlist-progress"><i class="icon-bar-chart"></i>View student progress</span></li>
			<li><span class="classlist-status"><i class="icon-time"></i>Students' online status</span></li>
			<li><span class="classlist-enrollments"><i class="icon-group"></i>View class enrollment</span></li>
			<li class="last"><a class="button blue" href="../guides/the-classlist">See how</a></li>
		</ul>
  	
 	</div>
 

</div>		 






<div class="row d2l-tools communicate-collaborate group">
	<div class="triangle"></div>
		<h2 class="section-title center">Communicate and Collaborate</h2>	  
		<h3 class="center">You and your students can use Chat, Discussions, Groups, and Online Rooms to communicate and collaborate</h3>

	  <div class="icon-row">
 	  	<a href="../guides/groups-discussions-and-dropboxes/"><span class="icon"><i class="icon-group"></i><label>Groups</label></span></a>
 	  	<a href="../guides/groups-discussions-and-dropboxes/"><span class="icon"><i class="icon-comment-alt"></i><label>Discussions</label></span></a>
	  	<a href="../guides/online-rooms/"><span class="icon"><i class="icon-signin"></i><label>Online Rooms</label></span></a>
	  </div>
 
  <span class="office-hours"> Office Hours and online Chats. <br> Anytime, anywhere. </span>


</div>		 


<div class="row d2l-tools dropbox group">
	<div class="triangle"></div>

	<div class="left-side">		
		<h2 class="section-title left">The Dropbox</h2>	  
		 <h3>An easy way to receive, grade, and provide feedback on assignments.</h3>
		 <span class="instant-feedback">Instant feedback. </span>
		 <span class="instant-feedback">No more hardcopies. </span>

		<a class="button blue" href="../guides/the-dropbox">See how</a>
	</div>


	<div class="right-side">
		<img class="grades-cloud" src="<?php echo get_template_directory_uri();?>/images/grades-tool-cloud.png" alt="">
 	</div>
		 
</div>	

<div class="row d2l-tools grades-tool group">
	<div class="triangle"></div>

 		<h2 class="section-title center">The Grades Tool</h2>	  
		 <h3 class="center">Use the Grades tool to enter, calculate, distribute, and send final grades to Banner. </h3>
 
		<img class="grades-list" src="<?php echo get_template_directory_uri();?>/images/grades-tool-list.png" alt="">
		
		<a class="button blue" href="../guides/the-grades-tool">Explore</a>

</div>
 
 

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
