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
		<!-- Desenvolvido por Gabriel Penido -->
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
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
		<!-- Add the slick-theme.css if you want default styling -->
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>

		<script src="https://kit.fontawesome.com/8fbabb70b4.js" crossorigin="anonymous"></script>

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
	
	<div class="menu-mobile">

		<!-- Ícone do menu hamburguer -->
		<div class="hamburger-menu">
			<img class="hamburger-image" src="/wp-content/uploads/2023/11/Cabecalho.png" alt="Menu">
		</div>

		<!-- Menu de navegação do hamburguer -->
		<div class="hamburger-nav">
			<div class="hamburger-menu-content">
				<div class="hamburger-link home">
				<a class="hamburger-link" href="#hero">Home</a>
				</div>
				<div class="hamburger-link space-transforming">
				<a class="hamburger-link" href="#transforming">Transformação do espaço</a>
				</div>
				<div class="hamburger-link virtual-tour">
				<a class="hamburger-link" href="#tour">Tour Virtual</a>
				</div>
				<div class="hamburger-link sobre">
				<a class="hamburger-link" href="#sobre">Sobre Nós</a>
				</div>
			</div>
		</div>

	</div>

	</header>

	<body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
