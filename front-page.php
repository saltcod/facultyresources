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
				<h2 class="resources">Teaching with Technology Resources</h2>
				<p class="em light">Detailed how-to guides and video tutorials will guide you through the technical side of teaching online.</p>


				<div class="index-tool first group">
					
					<div class="left-side">
						<img class="cloud" src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
					</div>
					
					<div class="right-side group">
						
						<a href="<?php echo home_url(); ?>/guides/desire2learn"><h2>Desire2Learn </h2></a>
						<h3>Memorial's Learning Management System (LMS)</h3>
						<div class="course-contents">
							<ul class="chevron-green left">
								<li><a href="<?php echo home_url(); ?>/guides/desire2learn/semester-startup/semester-startup-parent/"> Semester Startup</a></li>
								<li><a href="<?php echo home_url(); ?>/guides/desire2learn/course-home/course-homepage-widgets/"> Course Home</a></li>
								<li><a href="<?php echo home_url(); ?>/guides/desire2learn/course-content/the-content-tool/"> Course Content</a></li>
								<li><a href="<?php echo home_url(); ?>/guides/desire2learn/communication/calendar/"> Communication</a></li>
							</ul>
						</div>
						<div class="course-contents">
							<ul class="chevron-green">
								<li><a href="<?php echo home_url(); ?>/guides/desire2learn/assessments/the-grades-tool/"> Assessments</a></li>
								<li><a href="<?php echo home_url(); ?>/"> Help</a></li>
								<li><a href="<?php echo home_url(); ?>/"> Edit Course</a></li>
							</ul>
						</div>
					</div>
				</div>	

				<div class="index-tool group">

					<div class="left-side">
						<img src="<?php echo get_template_directory_uri();?>/images/online-rooms-icon.png" alt="">
					</div>

					<div class="right-side group">
						<a href="<?php echo home_url(); ?>/guides/online-rooms/"><h2>Online Rooms</h2></a>
						
						<h3>Bring your classroom discussions online</h3>	

						<div class="course-contents">
							<ul class="chevron-green">
								<li><a href="<?php echo home_url(); ?>/guides/online-rooms/uses-of-online-rooms/"> Uses of Online Rooms</a></li>
								<li><a href="<?php echo home_url(); ?>/guides/online-rooms/best-practices/"> Best Practices</a></li>
							</ul>
						</div>
					</div> 
				</div>

				<div class="index-tool group">
					<div class="left-side">
						<img src="<?php echo get_template_directory_uri();?>/images/lecture-capture-icon.png" alt="">
					</div>
					
					<div class="right-side group">
						<a href="<?php echo home_url(); ?>/guides/lecture-capture"><h2>Lecture Capture</h2> </a>
						<h3>Record and share your lectures with your class</h3>	

						<div class="course-contents">
							<ul class="chevron-green">
								<li><a href="<?php echo home_url(); ?>/guides/lecture-capture/set-up-lecture-capture"> Request Lecture Capture</a></li>
								<li><a href="<?php echo home_url(); ?>/guides/lecture-capture/student-access-to-lecture-recordings"> Give students access to recordings</a></li>
							</ul>
						</div>
					</div> 
				</div>
				
				<div class="index-tool last group">
					<div class="left-side">
						<img src="<?php echo get_template_directory_uri();?>/images/stor-icon.png" alt="">
					</div>
					
					<div class="right-side group">
					 
						<a href="<?php echo home_url(); ?>/guides/stor/stor-basics/getting-started/"><h2>stor</h2> </a>
						<h3>A Learning Object Repository</h3>	

						<div class="course-contents">
							<ul class="chevron-green">
								<li><a href="<?php echo home_url(); ?>/guides/stor/stor-basics/getting-started/">Getting started</a></li>
							</ul>
						</div>
						
					</div> 
				</div>
				
				
				
			</div> 


			<div id="sidebar" class="block third">


				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
			<?php endif; ?>



		</div>
		<div class="widget feedback"><a href="<?php echo home_url(); ?>/feedback">Feedback</a></div>
		<div class="widget get-in-touch"><a href="<?php echo home_url(); ?>/contact">Get in touch</a></div>


	</div> <!-- .row -->






</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>