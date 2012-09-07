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
	<h3>Bring your classroom discussions online </h3>


 	


</div> <!-- .row.using-d2l -->


<div class="row tools-get-started">
	<h2>First steps with Desire2Learn</h2>  
</div>


	<div class="row first-steps group">
		<div class="section-title block third">		
			<h2 class="section-title">Log in and get started</h2>
			<i class="icon-key"></i>
		</div> 

		<div class="section-descriptions block two-thirds last">
			<h2>Fusce quis massa dolor, nec imperdiet felis. Morbi eget mi eget lacus faucibus hendrerit. Integer a enim felis, consequat ullamcorper diam. </h2>
			
			<p><a href="http://online.mun.ca">http://online.mun.ca</a> is your home for all of your distances courses</p>
			<button><a href="http://online.mun.ca">Login now!</a></button>
		</div>
	</div> <!-- .row.first-steps -->
	 
	<div class="row second-steps group">
		<div class="section-title block third">		
			<h2 class="section-title">Make the course your own</h2>
			<i class="icon-pushpin"></i>
		</div> 

		<div class="section-descriptions block two-thirds last">
			<h2>Your course is your online home. Make it your own.</h2>
			
			<ul class="tools">
				<li><i class="icon-picture"></i><a href="#" class="tool">Change the background</a> <p>Nam venenatis sapien et massa condimentum tincidunt molestie ut odio. </p></li>
				<li><i class="icon-move"></i><a href="#" class="tool">Re-arrange the menu</a> <p>Donec purus nisi, facilisis eget pellentesque in, congue eget risus. Nullam vestibulum, leo eu susci </p></li>
				<li class="second-row"><i class="icon-table"></i><a href="#" class="tool">Add and remove Widgets</a> <p>facilisis eget pellentesque in, congue eget risus</p></li>
			</ul>

 
		</div>



	</div> <!-- .row.first-steps -->
	 	 
 	<div class="row third-steps group">
		<h2 class="section-title">Organize your content</h2>
		<i class="icon-copy"></i>
	</div> <!-- .row.first-steps -->

 	<div class="row third-steps group">
		<h2 class="section-title">See who's in your class</h2>
		<i class="icon-group"></i>
	</div> <!-- .row.first-steps -->
	 
 	<div class="row forth-steps group">
		 
		<h2 class="section-title">Time for the first quiz?</h2>
	</div> <!-- .row.first-steps -->
 


<div class="row tools-get-started">
	<h2>Tools to get you started</h2>  

</div>


<div class="row tools-list group">
	<div class="block third">
		<h3 class="task">Content and Organization</h3>
			<ul>
				<li><a href="#" class="tool">Course Content</a> to create, upload, review, or update course materials, syllabi, and links to resources</li>
				<li><a href="#" class="tool">Classlist</a> is a list of students, instructors, and teaching assistants who can access the course. </li>
				<li><a href="#" class="tool">Dropbox Folders</a><span class="soon">Soon</span>  where students can submit assignments and you can grade, return, and provide feedback</li>
				<li><a href="#" class="tool">Discussion Forums and Groups</a><span class="soon">Soon</span>  to facilitate class discussions and group work</li>
				<li><a href="<?php echo home_url(); ?>/guides/the-grades-tool/" class="tool">Grades Tool</a> to enter and release student, calculate final grades, and  transfer final grades to Banner</li>
				 
			</ul>
	</div>
		
	<div class="block third">
		<h3 class="task">Communicate with Ease</h3>
			 <ul>
				<li><a href="#" class="tool">Profile</a> Nam venenatis sapien et massa condimentum tincidunt molestie ut odio. </li>
				<li class="soon"><a href="#" class="tool">Announcements</a> Donec purus nisi, facilisis eget pellentesque in, congue eget risus. Nullam vestibulum, leo eu suscipit fringilla </li>
				<li><a href="#" class="tool">Online Rooms</a><span class="soon">Soon</span>  facilisis eget pellentesque in, congue eget risus</li>
				<li><a href="#" class="tool">Email</a><span class="soon">Soon</span>  Nullam vestibulum, leo eu suscipit fringilla discussions and group work</li>
				 
			</ul>
	</div> 
	 

	<div class="block third last">
		<h3 class="task">Do other cool stuff</h3>		 
			<ul>
				<li><a href="#" class="tool">Self-assessments</a> Nam venenatis sapien et massa condimentum tincidunt molestie ut odio. </li>
				<li><a href="#" class="tool">Calendar</a> Donec purus nisi, facilisis eget pellentesque in, congue eget risus. Nullam vestibulum, leo eu suscipit fringilla </li>
				<li><a href="#" class="tool">Rubrics</a><span class="soon">Soon</span>  facilisis eget pellentesque in, congue eget risus</li>
			</ul>
	</div> 
	 


</div> <!-- .row.tools-get-started -->
 
 


			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>