<?php
/**
 * The template for displaying the headerv MH Proyecto apasionados
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri() ?>/bootstrap/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php  echo get_stylesheet_directory_uri() ?>/bootstrap/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pre-header" style="background: url(<?php echo CFS()->get('main_header',5)?>) no-repeat; ">
		<div class="size">
		<div class="main-tag">
			<h1><?php echo CFS()->get('hashtag'); ?></h1>
		</div>
		</div>		 	
	</div>
</header>

<div class="menu-mh">
	<?php menu_mh();
	contact_form(); ?>
</div>

<div id="page" class="hfeed site">
	<div style="clear:both"></div>
	<div id="content" class="site-content">
