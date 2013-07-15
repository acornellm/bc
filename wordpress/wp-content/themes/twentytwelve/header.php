<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
        <div class="banner">
            <div class="logo"><a href="<?php echo esc_url( site_url() ); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" alt="" height="150px" width="418px"/></a></div>
            <div class="company-info">
                <div class="location-info">
                    <p>1224 Washington Ave<br />
Golden, CO 80401<br />
303-271-0730</p>
                </div>
                <div class="social">
                    <ul>
                       <li class="facebook"><a title="Facebook" href="https://www.facebook.com/pages/Blue-Canyon-Bar-Grill/111667252204567?fref=ts" target="_blank" rel="nofollow"></a></li>
                    </ul>
                </div>
            </div>
        </div>	
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="wrapper">