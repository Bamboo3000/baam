<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript">
		window.onload = function() {
			document.getElementsByTagName('body')[0].classList.add("loaded");
		};
		window.onbeforeunload = function(e) {
			// e.preventDefault(); // If you prevent default behavior in Mozilla Firefox prompt will always be shown
			// // Chrome requires returnValue to be set
			// e.returnValue = '';
			document.getElementsByTagName('body')[0].classList.remove("loaded");
		};
		// The order matters here, and this may report false positives for unlisted browsers.
	</script>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/7acc43e0e6.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="wrapper">
		<?php get_template_part('template-parts/navigation'); ?>