<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage onde_esta_o_mar
 * @since onde_esta_o_mar 1.0
 */

get_header();
?>

<main id="site-content">

<div class="Hero" id="hero">
	<div class="section-hero">
		<h1 class="h1-section-hero">Onde está o mar?</h1>
		<p class=p-sectionHero>Das Ondas à Cidade: <br>
A transformação do espaço através dos panoramas
		</p>
		<img class="seta-section-hero" src="/wp-content/uploads/2023/11/Gif-seta.gif" alt="">
	</div>
</div>



</main><!-- #site-content -->

<?php
get_footer();
