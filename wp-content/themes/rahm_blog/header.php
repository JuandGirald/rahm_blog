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
header("Access-Control-Allow-Origin: *"); 
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
	<link href="<?php bloginfo('template_directory'); ?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
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
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TWCG98"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TWCG98');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed">

	<iframe id="headerIframe" src="http://www.chicagotogether.org/header" frameborder="0"></iframe>

	<div id="main" class="wrapper">