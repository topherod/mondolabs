<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<!doctype html>
<html class="no-js initial-white-background" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#F1F1F1">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#F1F1F1">

		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="inner-wrap">
	
	<?php do_action( 'foundationpress_layout_start' ); ?>

	<?php get_template_part( 'parts/top-bar' ); ?>

<section class="container" role="document">
	<?php do_action( 'foundationpress_after_header' ); ?>
