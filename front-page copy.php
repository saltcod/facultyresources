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
<?php $response = wp_remote_get( 'http://codex.wordpress.org/Function_API/wp_remote_get' );
if( is_wp_error( $response ) ) {
   echo 'Something went wrong!';
} else {
   echo 'Response:<pre>';
   print_r( $response );
   echo '</pre>';
}
?>
	<div class="block two-thirds">
		<h2 class="blue resources">Teaching with Technology Resources</h2>

		<p>Detailed how-to guides and video tutorials will guide you through the technical side of teaching online.</p>
 

		<div class="index-tool first">
			<img src="<?php echo get_template_directory_uri();?>/images/d2l-icon-green.png" alt="">
			<a href="<?php echo home_url(); ?>/using-d2l"><h2>Desire2Learn </h2></a>
		 	<h3>Memorial's Learning Management System (LMS)</h3></div>	

		<div class="index-tool last">
			<img src="<?php echo get_template_directory_uri();?>/images/elive-icon-green.png" alt="">
			<a href="#"><h2>Elluminate <em>Live!</em></h2>	</a>
			<h3>Bring your classroom discussions online</h3><span class="soon">Coming soon</span>	
	</div> 
</div> 
 

	<div id="sidebar" class="block third">
		
		<div class="courses-programs">
			 <h2>Courses and Programs</h2>
			 <ul>
			 	<li><a href="http://blog.distance.mun.ca/teachingandlearning/">Technology Enabled Learning</a></li>
			 	<li><a href="#">Teaching Skills Enhancement</a></li>
	 		</ul>
		</div>

		<div class="short-courses">
			<h2>Short Courses</h2>
			 <ul>
			 	<li><a href="http://media.distance.mun.ca/courses/rubrics/" target="_blank">Rubrics</a></li>
			 	<li><a href="http://media.distance.mun.ca/courses/creativecommons/" target="_blank">Creative Commons</a></li>
	 		</ul>
		</div>

	</div>
	

</div> <!-- .row -->

 


 

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>