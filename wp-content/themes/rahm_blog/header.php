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
	<meta name='viewport', content='width=device-width, initial-scale=1.0'>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<!-- Youtube api -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
	<script src="//use.typekit.net/vvt4yoq.js"></script>
	<script>
		try{Typekit.load();}catch(e){}
	</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed">

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="large-12 column">
				<div class="row">
					<div class="medium-6 large-4 column">
						<h1 class="titleBar">
							<a href="/">
								<img alt="Rahm for Chicago" src="<?php bloginfo('template_directory'); ?>/assets/logo-title.jpg"/>
							</a>
						</h1>
					</div>
					<div class="medium-6 large-6 column">
						<form>
							<input type="text" placeholder="Email" name="signUpEmail" class="signUpEmail-header"/>
							<input type="text" placeholder="Zip code" name="signUpZip" class="signUpZip-header"/>
							<button>Sign up</button>
						</form>
						<div class="socialLinks">
							<a class="headerSocial">
								<span class="social">F</span>
								<span>LIKE US</span>
							</a>
							<a class="headerSocial fb">
								<span class="social">L</span>
								<span>FOLLOW US</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<nav class="mainNav">
		<div class="central">
			<div class="row">
				<div class="small-12 columns">
					<ul class="mainList">
						<li data-id="1">
							<a>TAKE ACTION</a>
						</li>
						<li data-id="2">
							<a>FACTS</a>
						</li>
						<li data-id="3">
							<a>LATEST</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="dropdown">
			<div class="row">
				<div class="small-12 columns">
					<ul data-target="1">
						<li>
							<a>Share Your Story</a>
						</li>
						<li>
							<a>See Programs In Your Neighborhood</a>
						</li>
						<li>
							<a>Sign Up</a>
						</li>
						<li>
							<a>Donate</a>
						</li>
					</ul>
					<ul data-target="2">
						<li>
							<a>About</a>
						</li>
						<li>
							<a>Contact</a>
						</li>
						<li>
							<a>Parks</a>
						</li>
						<li>
							<a>infrastructure</a>
						</li>
						<li>
							<a>Economic Development</a>
						</li>
						<li>
							<a>Education</a>
						</li>
					</ul>
					<ul data-target="3">
						<li>
							<a>Blog</a>
						</li>
						<li>
							<a>Twitter</a>
						</li>
						<li>
							<a>Facebook</a>
						</li>
						<li>
							<a>Youtube</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div id="main" class="wrapper">