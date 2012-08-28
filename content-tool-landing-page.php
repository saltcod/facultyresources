<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	
 	  




<ul class="accordion">
 
    <li id="one">
        <a href="#one" class="tool-name">The Grades Tool <i class="icon-plus tool-name"></i></a>
        <ul class="sub-menu">
            <li>The Grades Tool allows you to record, calculate, and share grades using a gradebook that you create in Desire2Learn. Grade items in the gradebook represent course assessment components. You can manually input the grades into the appropriate column in the gradebook or, if you associated the grade item with a quiz, dropbox folder, or discussion forum, students’ grades will automatically transfer to the appropriate column.</li>
        </ul>
    </li>
 
    <li id="two">
        <a href="#two" class="faq">Frequently Asked Questions <i class="icon-plus faq"></i></a>
        <ul class="sub-menu">
            <li>The Grades tool is <a href="#">easy</a> to use and includes a Grades Wizard to help you get started.</li>
			<li>Using a gradebook for your course allows students easy and timely access to their grades. And, the gradebook does a great job of keeping student information confidential.</li>
			<li><h3> Reorder and Delete Grades</h3>You have full control over how you want to setup and interact with your gradebook. You can hide grades, reorder and delete grade items, create grade schemes, calculate final grades, adjust final grades, and transfer final grades to Banner.</li>
        </ul>
    </li>
</ul>


 	
	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
 </article><!-- #post-<?php the_ID(); ?> -->
