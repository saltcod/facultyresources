<?php
/**
 * @package WordPress
 * @subpackage Victoria Park
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 	 


 	 <div class="breadcrumb">
        <?php if( has_term('tool-landing-page', 'guide-type') ) : ?>
                <span class="parent-guide"><a href="<?php echo home_url();?>/using-d2l">Desire2Learn</a></span>
            <?php endif; ?>
    </div>  

<ul class="accordion">
 
    <li id="one">
        <a href="#one" class="tool-name"><?php the_title();?> <i class="icon-plus tool-name"></i></a>
        <ul class="sub-menu">
            <li><?php the_field('tool_intro');?></li>
        </ul>
    </li>
 
    <li id="two">
        <a href="#two" class="faq">Frequently Asked Questions <i class="icon-plus faq"></i></a>
        <ul class="sub-menu">
            <li><li><?php the_field('frequently_asked_questions');?></li></li>
        </ul>
    </li>
</ul>


 	
	<?php edit_post_link( __( 'Edit', 'victoria_park' ), '<span class="edit-link">', '</span>' ); ?>
 </article><!-- #post-<?php the_ID(); ?> -->
