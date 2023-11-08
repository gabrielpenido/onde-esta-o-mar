<?php
/**
 * Header file for the onde_esta_o_mar WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage onde_esta_o_mar
 * @since onde_esta_o_mar 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@500&display=swap" rel="stylesheet">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>


	</head>

	<header>
	<div class="menu">
		<div class="menu-content">
			<div class="link-menu home">
				<a class="link-menu" href="#hero">Home</a>
			</div>
			<div class="link-menu space-transforming">
				<a class="link-menu" href="#transforming">Transformação do espaço</a>
			</div>
			<div class="link-menu virtual-tour">
				<a class="link-menu" href="#tour">Tour Virtual</a>
			</div>
			<div class="link-menu sobre">
				<a class="link-menu" href="#sobre">Sobre Nós</a>
			</div>
		</div>
	</div>

	</header>

	<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
