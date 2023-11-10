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


<div class="transform-espaco">
	<div class="transform-espaco-container">
		<h1 class="title-transform-espaco">
			Transformação do espaço
		</h1>
		<div class="transform-espaco-content">
			<div class="transform-text">
				<p class="p-transfom-text">
				Iniciamos a nossa jornada na história, em 1519, onde um navegador chamado Fernão de Magalhães ergueu uma pequena capela para se casar com uma indígena, chamada de Luzia. E então ela foi usada e criada para afirmar essa história de amor. Mas além disso, recebeu a imagem da Nossa Senhora dos Navegantes. <br><br>
				Já em 1751, dois proprietários de uma chácara cedem um terreno para a construção de uma pequena igreja à beira mar e a frente do Morro do Castelo, dando espaço para a Irmandade de Santa Luzia. <br><br>
				E com um tempo, a paisagem foi sendo transformada para se adaptar a uma determinada evolução, que previa o desmonte do Morro do Castelo, que possuía habitações e a criação de um aterro que dava fim a uma linda praia. Porém permanecendo a Igreja de Santa Luzia e a Santa Casa da Misericórdia. Com isso, a partir de 1924, tal igreja jamais terá a mesma vista que um dia já possuiu
				</p>
			</div>
			<div class="transform-gif">
				<img class="img-transform-gif" src="/wp-content/uploads/2023/11/Gif-do-aterro_finalmente.gif" alt="">
			</div>
		</div>
	</div>
</div>


<div class="compare-transform">
	<div class="compare-transform-container">
		<div>
			<div class="text-compare-transform">
				<img class="aspas-compare-transform" src="/wp-content/uploads/2023/11/unnamed-file.png" alt="">
				<p class="p-compare-transform">
				Existe, com o tempo, e sempre haverá, uma dimensão de degradação e dispersão. Nenhuma coisa organizada, nenhum ser organizado pode escapar da degradação, desorganização, dispersão. Nenhum ser vivo pode escapar da morte. Perfumes evaporam, vinhos azedam, montanhas se achatam, flores murcham, coisas vivas e sóis voltam ao pó […].
				</p>
				<p class="p-autor-compare-transform">
				Edgar Morin, La nature de la nature, 1977
				</p>
			</div>
			<p class="reference-compare-transform reference-desktop">
				Demolição do Morro do Castelo; tomada da atual avenida Almirante Barroso,<br>
				Rio de Janeiro RJ - Acervo Instituto Moreira Salles [Wikimedia Commons]
			</p>
		</div>
		<div class="embed-compare-transform embed-compare-desktop">
			<iframe frameborder="0" class="juxtapose" width="543" height="304" src="https://cdn.knightlab.com/libs/juxtapose/latest/embed/index.html?uid=87a163d0-7cdb-11ee-b5be-6595d9b17862"></iframe>
		</div>

		<div class="embed-compare-transform embed-compare-mobile">
			<iframe frameborder="0" class="juxtapose" width="100%" height="304" src="https://cdn.knightlab.com/libs/juxtapose/latest/embed/index.html?uid=87a163d0-7cdb-11ee-b5be-6595d9b17862"></iframe>
		</div>

		<p class="reference-compare-transform reference-mobile">
				Demolição do Morro do Castelo; tomada da atual avenida Almirante Barroso,<br>
				Rio de Janeiro RJ - Acervo Instituto Moreira Salles [Wikimedia Commons]
			</p>
	</div>
</div>


</main><!-- #site-content -->

<?php
get_footer();
