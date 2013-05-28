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
				<p class="em light">Detailed how-to guides and video tutorials will guide you through the technical side of teaching online</p>


				<div class="index-tool first group">
					
					<div class="left-side">
						<img class="cloud" src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
					</div>
					
					<div class="right-side group">
						
						<h2><a href="<?php echo home_url(); ?>/guides/desire2learn">Desire2Learn</a></h2>
						<h3>Memorial's Learning Management System (LMS)</h3>
						
						
						<div class="course-contents">
							
							<ul class="left">
								<li class="tool-category">Customizing your Course 
									<ul class="tools">
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/customizing-your-course/course-homepage-widgets/">Course Homepage Widgets</a></li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/customizing-your-course/the-course-navigation-bar-and-theme/">Course Navigation and Theme</a></li>
									</ul>
								</li> <!-- Customizing your Course -->
								
								<li class="tool-category communication">Communication
									<ul class="tools">
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/customizing-your-course/classlist">Classlist</a> </li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/communication/discussions">Discussions</a> </li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/communication/classlist/emailing-from-the-classlist/">Email</a> </li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/communication/groups">Groups</a> </li> 
									</ul>
								</li>
								
							</ul>
								
							<ul class="right">
								
								<li class="tool-category">Course Content
									<ul class="tools">
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/course-content/content/">Content</a></li>
									</ul>
								</li>
								
								<li class="tool-category assessment">Assessment
									<ul class="tools">
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/assessments/grades">Grades</a></li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/assessments/quiz">Quiz</a></li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/assessments/assessments/dropbox/">Dropbox</a></li>
										<li><a href="<?php echo home_url(); ?>/guides/desire2learn/assessments/question-library">Question Library</a></li>
									</ul>
								</li> <!-- assessment -->
								
							</ul>	

						</div>
						
					</div>
				</div>	

				<div class="index-tool group">

					<div class="left-side">
						<img src="<?php echo get_template_directory_uri();?>/images/online-rooms-icon.png" alt="">
					</div>

					<div class="right-side group">
						<h2><a href="<?php echo home_url(); ?>/guides/elluminate-live">Online Rooms</a></h2>

						<h3>Online discussions with Elluminate Live</h3>	

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
						<h2><a href="<?php echo home_url(); ?>/guides/lecture-capture">Lecture Capture </a></h2>
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

						<h2><a href="<?php echo home_url(); ?>/guides/stor/stor-basics/getting-started/">stor</a></h2>
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