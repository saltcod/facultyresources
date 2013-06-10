<?php
/**
 * A study in stuctural functionalism at Victoria Park
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.2
 */


/**
 * Setup defaults, register taxonomies/post types and other WordPress features.
 * This function is hooked into the after_setup_theme hook.
 *
 * @since Victoria Park 0.2
 */



function wpr_maintenance_mode() {
    if ( !current_user_can( 'edit_themes' ) || !is_user_logged_in() ) {
        wp_die('Sorry about this. We\'re just doing a little upgrade. We should only be a few minutes.');
    }
}
add_action('get_header', 'wpr_maintenance_mode');





add_action( 'after_setup_theme', 'victoria_park_theme_setup' );




function victoria_park_theme_setup() {
	//add basic features
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	// Image size for inline slideshows
	add_image_size( 'inline-slideshow', 500, 9999);

	//add custom scripts
	add_action( 'wp_enqueue_scripts', 'victoria_park_enqueue_scripts' );

	//Register taxonomies
	add_action( 'init', 'register_guide_type_taxonomy' );


	//add custom widgets/sidebars
	add_action( 'init', 'victoria_park_widgets_init' );

	// add custom menus
	add_action( 'init', 'victoria_park_register_menus' );


	// add various other custom actions/filters
	add_filter( 'body_class', 'victoria_park_better_body_classes' );
	add_filter( 'wp_nav_menu', 'victoria_park_add_slug_class_to_menu_item' );

	//print template file in footer — remove for production.
	add_action( 'wp_footer', 'victoria_park_show_template' );

	// Make the HTML editor the default when creating content
	add_filter( 'wp_default_editor', create_function( '', 'return "html";' ) );


}

/* Register the 'Guides' post type */

register_post_type(
	'guides',
	array(
		'label' => 'Guides',
		'description' => '',
		'public' => true,
		'menu_icon' => get_bloginfo( 'template_directory' ) . '/images/help-icon.png',
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => true,
		'rewrite' => array( 'slug' => '' ),
		'query_var' => true,
		'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'revisions', 'comments','author' ),
		'labels' => array (
			'name' => 'Guides',
			'singular_name' => 'Guide',
			'menu_name' => 'Guides',
			'add_new' => 'Add guide',
			'add_new_item' => 'Add new guide',
			'edit' => 'Edit',
			'edit_item' => 'Edit guide',
			'new_item' => 'New guide',
			'view' => 'View guide',
			'view_item' => 'View guide',
			'search_items' => 'Search Guides',
			'not_found' => 'No Guides Found',
			'not_found_in_trash' => 'No Guides Found in Trash',
			'parent' => 'Parent guide',
			), ) );



//Register a taxonomy for specific tools (D2L, Elive)

function register_guide_type_taxonomy() {
	register_taxonomy(
		'guide-type', 'guides', array(
			'label' => __( 'Guide Type' ),
			'sort' => true,
			'args' => array( 'orderby' => 'term_order' ),
			'hierarchical' => true,
			'rewrite' => array( 'slug' => 'guide-type' ),
			'show_admin_column' => true
			)
		);
}


/**
 * Strip the width and height attr for images posted to the content area
 *
 * @since 0.1
 */

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}



 /**
  * wp_list_pages() outputs a menu nicely, 
  * but doesn't include the handy classes like current_page_item 
  * for styling. 
  *
  * @since 0.1
  */ 
 function wp_list_pages_css_class( $css_class, $page, $depth, $args ) {


 	if ( empty($args['post_type']) || !is_singular($args['post_type']) )
 		return $css_class;

 	$_current_page = get_queried_object();
 	
 	if ( in_array( $page->ID, $_current_page->ancestors ) )
 		$css_class[] = 'current-page-ancestor';
 	if ( $page->ID == $_current_page->ID )
 		$css_class[] = 'current-page-item';
 	elseif ( $_current_page && $page->ID == $_current_page->post_parent )
 		$css_class[] = 'current-page-parent';

 	return $css_class;
 }
 add_filter( 'page_css_class', 'wp_list_pages_css_class', 10, 4 );









 /**
  * Add custom tax term to each wp_list_pages() item, 
  *
  * @since 0.1
  */ 
 function wp_list_pages_tax_terms_css_class( $css_class, $page, $depth, $args, $current_page ){
 	$terms = get_the_terms( $page->ID, 'guide-type' );
 	if ( $terms && ! is_wp_error( $terms ) ){
 		$term_names = wp_list_pluck($terms,'slug');

        //Add term names to array of classes
 		$css_class = array_merge($css_class, $term_names);
 	}
 	return $css_class;
 }
 add_filter( 'page_css_class', 'wp_list_pages_tax_terms_css_class', 10, 5 );




/**
 * Loads theme-specific JavaScript files.
 *
 * @since 0.2
 */

function victoria_park_enqueue_scripts() {
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'faculty-resources-scripts', get_template_directory_uri() .'/js/faculty-resources-scripts.js', array('jquery') );
	wp_enqueue_script( 'faculty-resources-scripts' );
}











/**
 * Include the page slug in the body class attribute.
 *
 * @since 0.2
 *
 * @param array   $classes The existing classes for the body element
 * @return array The amended class array for the body element
 */

function victoria_park_better_body_classes( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}

	$section_terms = get_the_terms($post->ID, 'guide-type');
	if ($section_terms && !is_wp_error($section_terms)) {
		$section_name = array();
		foreach ($section_terms as $term) {
			$classes[] = $term->slug;
		}
		return $classes;
	}

	return $classes;
}










/**
 * Get current "Hot Topics"
 *
 * @since 0.2
 */

function victoria_park_get_hot_topics(){
	$args = array( 
		'post_type' => 'guides',
		'meta_query' => array(
			array(
				'key' => 'hot_topic',
				'value' => '1',
				'compare' => '=='
				)
			), 
		'order' => 'ASC',
		'orderby' => 'meta_value', 'meta_key' => 'hot_topic_order' 

		); 

	$the_query = new WP_Query( $args );

	 // The Loop 
	if ( $the_query->have_posts()) :
		while ( $the_query->have_posts() ) : $the_query->the_post();

	echo '<li><a href="';
	the_permalink();
	echo '">';
	the_title(); 
	echo '</a>'; 
	echo '</li>';

	endwhile;
	endif;


	// Reset Post Data
	wp_reset_postdata();
}




/**
 * Print out the current template file to the footer.
 * Obviously to be removed in production
 *
 * @since 0.2
 */

function victoria_park_show_template() {
	if ( is_super_admin() ) {
		global $template;
		echo '<strong>Template file:</strong>';
		print_r( $template );
	}
}



/**
 * Add slug to menu li classes
 *
 * @since 0.2
 */

function victoria_park_add_slug_class_to_menu_item( $output ) {
	$ps = get_option( 'permalink_structure' );
	if ( !empty( $ps ) ) {
		$idstr = preg_match_all( '/<li id="menu-item-(\d+)/', $output, $matches );
		foreach ( $matches[1] as $mid ) {
			$id = get_post_meta( $mid, '_menu_item_object_id', true );
			$slug = basename( get_permalink( $id ) );
			$output = preg_replace( '/menu-item-'.$mid.'">/', 'menu-item-'.$mid.' menu-item-'.$slug.'">', $output, 1 );
		}
	}
	return $output;
}







/**
 * Is D2L child?
 * Hideous, but not much we can do
 * Get the top-most parent of the page you are on. 
 * D2L = page_ID 3029
 *
 * @since 1.0
 */

function waterstreet_is_child_of($id){
	global $post;

	if ( $post->post_parent ) {
		$ancestor = get_post_ancestors($post->ID);
		if ( $ancestor[0] === $id || $ancestor[1] === $id || $ancestor[2] === $id ) {
			return true;
		} 
	}
	// if a D2L child, print the D2L sidebar
}


/**
* A better stab at body classes for post-parents
*
*/
function waterstreet_ancestor_body_class( $classes ){
	global $post;
	// add 'class-name' to the $classes array
	
	if ($post->post_parent)	{
		$ancestors = get_post_ancestors($post->ID);
		$root = count($ancestors)-1;
		$parent = $ancestors[$root];
		$parent_data = get_page($parent);


 		$classes[] = $parent_data->post_name . '-child' ;
	} else {
		$parent = $post->ID;
	}

	
	return $classes;
}
add_filter( 'body_class', 'waterstreet_ancestor_body_class' );




/**
* We need a body class hook to add post->parent()  
*
* @since 1.0
*/
function waterstreet_page_parent_body_class( $classes ){
	global $post;
	// add 'class-name' to the $classes array

	if ( waterstreet_is_child_of(3029) ) {
		$classes[] = 'd2l-child';
	} 
	return $classes;
}
add_filter( 'body_class', 'waterstreet_page_parent_body_class' );






/**
* Add an item or two to the admin menu
*
* @since 1.0
*/
function waterstreet_admin_bar_additions() {
	global $wp_admin_bar;
// we can remove a menu item, like the Comments link, just by knowing the right $id
// or we can remove a submenu, like New Link.
// we can add a submenu item too
	$wp_admin_bar->add_menu( array(
		'id' => 'guides',
		'title' => __('Guides'),
		'href' => admin_url( 'edit.php?post_type=guides')
		) );
}

add_action( 'wp_before_admin_bar_render', 'waterstreet_admin_bar_additions', 0 );





/**
* This theme uses wp_nav_menu() in one location.
*
* @since 0.2
*/


function victoria_park_register_menus() {
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'victoria_park' ),
		) );

}


function facultyresources_home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'facultyresources_home_page_menu_args' );


/**
* Modify the Posted on output
*
* @since 0.2
*/

function victoria_park_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline">   </span></span>', 'toolbox' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'toolbox' ), get_the_author() ) ),
		esc_html( get_the_author() )
		);
}



/**
* Register widgetized area and update sidebar with default widgets
*/
function victoria_park_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar 1', 'victoria_park' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
		) );

	register_sidebar( array(
		'name' => __( 'Sidebar 2', 'victoria_park' ),
		'id' => 'sidebar-2',
		'description' => __( 'An optional second sidebar area', 'victoria_park' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
		) );
}




if ( ! function_exists( 'victoria_park_content_nav' ) ):
/**
* Display navigation to next/previous pages when applicable
*
* @since victoria_park 1.2
*/
function victoria_park_content_nav( $nav_id ) {
	global $wp_query;

	?>
	<nav id="<?php echo $nav_id; ?>">
		<h1 class="assistive-text section-heading"><?php _e( 'Post navigation', 'victoria_park' ); ?></h1>

		<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'victoria_park' ) . '</span> %title' ); ?>
		<?php next_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'victoria_park' ) . '</span>' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

	<?php if ( get_next_posts_link() ) : ?>
	<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'victoria_park' ) ); ?></div>
<?php endif; ?>

<?php if ( get_previous_posts_link() ) : ?>
	<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'victoria_park' ) ); ?></div>
<?php endif; ?>

<?php endif; ?>

</nav><!-- #<?php echo $nav_id; ?> -->
<?php
}
endif; // victoria_park_content_nav



function victoria_park_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
			) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so toolbox_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so toolbox_categorized_blog should return false
		return false;

	}
}


function direct_email( $text="Send by email" ) {
	global $post;
	$title = htmlspecialchars( $post->post_title );
	$subject = htmlspecialchars( get_bloginfo( 'name' ) ) . ' from DELTS'.' : '.$title;
	$body = 'Hi! I saw this step by step guide and thought you might like to have a look: '.$title.'. You can read it on : '.get_permalink( $post->ID );
	$link = '<a rel="nofollow" href="mailto:?subject='.rawurlencode( $subject ).'&amp;body='.rawurlencode( $body ).'" title="'.$text.' : '.$title.'">'.$text.'</a>';
	return $link;
}
