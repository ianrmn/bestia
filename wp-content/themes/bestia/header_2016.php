<?php
/**
 * The Header template for our theme
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- bxslider -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.sticky.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bestia.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />

<!-- bxslider -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.css">

<?php wp_head(); ?>

<script>
	$(document).ready( function(){
		$('.gallery_slider').bxSlider({
		  mode: 'fade',
		  adaptiveHeight: true,
		  captions: true
		});
	});
</script>

<style>
	html { margin-top: 0px!important; }
</style>

</head>

<body <?php body_class(); ?>>
    
<div id="page" class="hfeed site">
	<div id="main" class="">