<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Victoria Park
 * @since Victoria Park 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'victoria_park' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />



<!-- Mun Goodies -->
 <link href="http://www.mun.ca/appinclude/brand/2011v1/include/styles/structure.css" rel="stylesheet" type="text/css" media="screen" />
 <link href="http://www.mun.ca/appinclude/brand/2011v1/include/styles/interior.css" rel="stylesheet" type="text/css" media="screen" />


 <script type="text/javascript" language="javascript" src="http://www.mun.ca/appinclude/brand/2011v1/include/basefunctions.js"></script>
<script type="text/javascript" language="javascript" src="http://www.mun.ca/appinclude/brand/2011v1/include/onready.js"></script>
<script type="text/javascript" language="javascript" src="http://www.mun.ca/appinclude/brand/2011v1/include/topnav-content.js"></script>


<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-4957285-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<!-- Mun Goodies -->


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" type="text/css" media="screen, projection, print" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>




<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
 
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php include ('header-mun.php'); ?>
<div id="page" class="hfeed group">
	<header id="branding" class="group" role="banner">
		<hgroup>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>-->		</hgroup>

		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'tsep' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'tsep' ); ?>"><?php _e( 'Skip to content', 'tsep' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			
			<a href="http://online.mun.ca"><div id="at-home"></div></a>
		</nav><!-- #access -->
	</header><!-- #branding -->
			
			
	<?php if(is_front_page() ): ?>
	<div class="hero">
		<h3>Discover. Learn. Transform. Teach.</h3>
		<span class="tagline">Teaching with Technology Resources from DELTS </span>

	</div>
	<?php endif; ?>


<div id="main" class="group">